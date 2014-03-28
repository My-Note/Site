<?php
 
session_start();
 
if (!empty($_SESSION)) {
    header("Location: home.php");
}

 
# require library
require("facebook.php");
 
# Creating the facebook object
$facebook = new Facebook(array(
            'appId' => '1388696308017573',
            'secret' => 'e5bc11b8a6dad759b63c8827a740314b',
            'cookie' => true
        ));
 
# check active session
$session = $facebook->getSession();
 
 
if (!empty($session)) {
    # session active, get user id (getUser()) and user info (api->('/me'))
    try {
        $params = array(
            'req_perms' => 'user_birthday,email,user_hometown,user_location,user_website,user_relationships,user_relationship_details,user_photos',
            'redirect_uri' => 'https://my-note.net63.net/social/home.php'
        );
    //$login_url = $facebook->getLoginUrl($params);

        $uid = $facebook->getUser();
        $fb_access_token=$session['access_token'];
        $url = $facebook->getLoginUrl($params);

        $user = $facebook->api('/me');
        $photolink = 'http://graph.facebook.com/'.$user['id'].'/picture?type=square';
        $param = array(
            'method' => 'users.getInfo',
            'uids' => uid,
            'fields' => 'pic_big'
        );
        $users_getinfo = $facebook->api($param);
    } catch (Exception $e) {
 
    }
 
    if (!empty($user)) {
        # active session, check if already registered the user
        $query = mysql_query("SELECT * FROM users WHERE oauth_provider = 'facebook' AND oauth_uid = " . $user['id']);
        $result = mysql_fetch_array($query);
 
 
        # If not, add it to the database
        if (empty($result)) {
            $query = mysql_query("INSERT INTO users (oauth_uid, oauth_provider, username, first_name, last_name, email, pic_square) VALUES ('facebook', {$user['id']}, '{$user['name']}', '{$user['first_name']}', '{$user['last_name']}','{$user['email']}', '".$photolink."')");
            $query = mysql_query("SELECT * FROM users WHERE id = " . mysql_insert_id());
            $result = mysql_fetch_array($query);
        }
 
 
        // variables in the session 
        $_SESSION['id'] = $result['id'];
        $_SESSION['oauth_uid'] = $result['oauth_uid'];
        $_SESSION['oauth_provider'] = $result['oauth_provider'];
        $_SESSION['username'] = $result['username'];
    } else {
        # if error, kill the script
        die("There was an error.");
    }
 
    $api_call = array(
        'method' => 'users.hasAppPermission',
        'uid' => $uid,
        'ext_perm' => 'publish_stream'
    );
    $can_post = $facebook->api($api_call);
    if ($can_post) {
        # post it! 
        $facebook->api('/' . $uid . '/feed', 'post', array(
            'message' => 'Participate in Camry Slogan Contest and Win great prizes!',
            'name' => 'Camry Slogan Contest',
            'description' => 'Participate in Camry Slogan Contest and Win iPhone, iPad, Samsung Galaxy, Canono Digital Camera, Sony Play Station, Blackberry Bold and more prizes.',
            'caption' => 'WIN prizes by suggesting us a Slogan for our new Toyota Camry!',
            'picture' => 'http://www.masudonline.net/camry/headar.jpg',
            'link' => 'https://my-note.net63.net'
        ));
        echo 'Posted!';
    } else {
        die('Permissions required!');
    }
} else {
    # no active session, generate one
    $login_url = $facebook->getLoginUrl();
    header("Location: " . $login_url);
}
 
?>
<?php

require 'facebook/facebook.php';
require 'config/fbconfig.php';
//require 'config/functions.php';

$facebook = new Facebook(array(
            'appId' => APP_ID,
            'secret' => APP_SECRET,
            ));

$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }






    if (!empty($user_profile )) {
        # User info ok? Let's print it (Here we will be adding the login and registering routines)
  var_dump($user_profile);
  
        $username = $user_profile['name'];
			 $uid = $user_profile['id'];
		 $email = $user_profile['email'];



            # User info ok? Let's print it (Here we will be adding the login and registering routines)

            $id         = $user_profile['id'];

            $name       = $user_profile['name'];

            $first      = $user_profile['first_name'];

            $last       = $user_profile['last_name'];

            $username_fb= $user_profile['username'];

            $link_fb    = $user_profile['link'];

            $email      = $user_profile['email'];

            $local_fb   = $user_profile['location'];

            $sexo       = $user_profile['gender'];

            $interested = $user_profile['interested_in'];

            $website_fb = $user_profile['website'];

            $relacao    = $user_profile['relationship_status'];

            $home_fb    = $user_profile['hometown'];

            $relacao = mysql_real_escape_string($relacao);
    
            $foto_fb       = 'https://graph.facebook.com/'.$user_profile['id'].'/picture?type=large';





        $user = new User();
        $userdata = $user->checkUser($uid, 'facebook', $username,$email,$twitter_otoken,$twitter_otoken_secret);
        if(!empty($userdata)){
            session_start();
            $_SESSION['id'] = $userdata['id'];
            $_SESSION['oauth_id'] = $uid;

            $_SESSION['username'] = $userdata['username'];
			$_SESSION['email'] = $email;
            $_SESSION['oauth_provider'] = $userdata['oauth_provider'];






            header("Location: home.php");
        }
    } else {
        # For testing purposes, if there was an error, let's kill the script
        die("There was an error.");
    }
} else {
    # There's no active session, let's generate one
	# $login_url = $facebook->getLoginUrl(array( 'scope' => 'email'));
    $login_url = $facebook->getLoginUrl(array( 'scope' => 'user_birthday,email,friends_birthday,user_hometown,user_location,user_website,user_relationships,user_relationship_details,user_photos,publish_stream'));

    header("Location: " . $login_url);
}
?>

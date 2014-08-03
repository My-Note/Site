<?php 
	require_once('session_base.php');
    require_once('config/user_function.php');

	# http:/ /my-note.esy.es/invite.php?type=confirm&id=1&username=SusanViera&mail=susanavreis_2@hotmail.com&token=9JC2vfQczHUJQliGkS6HePb6Qr5TcWKaAsrzyYULWpeBMmPPql
	$type 	= $_GET['type'];
	$id 	= $_GET['id'];
    if ($id === "1") {
        $name   = $_GET['username'];
    } else {
        $UserSendInvite = search_for_email_of_invite($id);
        $name   = "";
    }
	$email 	= $_GET['mail'];
	$token 	= $_GET['token'];

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration | My-Note</title>
        <?php include( 'header.php'); ?>
    </head>
    <body class="index_body">
        <div class="container" style="background:rgba(255, 255, 255, 0.95);margin-top:5%;">
<?php
	if ($type === "confirm") {
		include("config/signup/confirm_invite.php");
	} else if ($type === "cancel") {
		include("config/signup/cancel_invite.php");
	} else {
		include("config/signup/error_invite.php");
	}
?>
        </div>
        <div class="posted-by container" style="height: 60px; z-index: 10;">
            <?php include( 'footer.php'); ?>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <script src="public/jquery/user.js" type="text/javascript"></script>
        <?php include( 'modal_login.php'); ?>
    </body>
</html>

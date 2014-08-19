<?php require_once( 'session_base.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My-Note</title>
        <?php include( 'header.php'); ?>
    </head>
    <body class="body_image">
        <div class="container" style="background:rgba(255, 255, 255, 0.95);margin-top:5%;">
            <hr class="colorgraph">
            <br>
            <center>
                <h1><b>Sorry</b>
                </h1>
                <h3>You need an invitation to be a part of this Network</h3>
                <p>Probably this will be join all, but for now, you can be exclusive, like "VIP" :p</p>
                <br>
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#invite_Modal">Ask for an invitation!</button>
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#login_Modal">Have an account? Log in</button>
            </center>
            <br>
            <hr class="colorgraph">
        </div>

        <!-- Modal invite -->
        <div class="modal fade bs-modal-lg" id="invite_Modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h2 style="text-align:center">
                            <small> 
                                This can take some time, but you can share the link after 
                                <br>
                                 and try your luck in Facebook or Twitter with friends.
                            </small>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <div id="myTabContent" class="tab-content">
                            <!-- formulario de invite -->
                            <div class="row" style="margin-top:20px">
                                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                    <form role="form" id="invite_form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="email" name="email" id="invite_email" class="form-control input-lg" placeholder="Email Address" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="name" id="invite_name" class="form-control input-lg" placeholder="Username" required>
                                            </div>
                                            <hr class="colorgraph">
                                            <div class="row" id="invite_alert" style="display:none; margin:30px 0 -30px;">
                                                <div class="col-xs-12 col-sm-8 col-md-10 col-sm-offset-2 col-md-offset-1">
                                                    <div id="invite_alert_base" class="alert alert-dismissible" role="alert">
														<button type="button" class="close" >
															<span aria-hidden="true">&times;</span>
															<span class="sr-only">Close</span>
														</button>
														<span id="invite_warning"></span>
													</div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <!-- fim de formulario de invite -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                    <button type="button" id="invite_luck" class="btn btn-lg btn-primary btn-block" data-loading-text="Lets check...">Try my luck!</a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal login-->
        <div class="modal fade bs-modal-lg" id="login_Modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h2 style="text-align:center">
                            <small> 
                                This can take some time, but you can share the link after 
                                <br>
                                 and try your luck in Facebook or Twitter with friends.
                            </small>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <div id="myTabContent" class="tab-content">
                            <!-- formulario de invite -->
                            <div class="row" style="margin-top:20px">
                                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                    <form role="form" id="invite_form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="username" id="login_username" class="form-control input-lg" placeholder="Email or Username" required>
                                            </div>
                                            <div class="input-group">
                                                <input type="password" name="password" id="login_password" class="form-control input-lg pwd" placeholder="Password" required>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default btn-lg reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                                </span>
                                            </div>
                                            <hr class="colorgraph">
                                            <div class="row" id="invite_alert" style="display:none; margin:30px 0 -30px;">
                                                <div class="col-xs-12 col-sm-8 col-md-10 col-sm-offset-2 col-md-offset-1">
                                                    <div id="invite_alert_base" class="alert alert-dismissible" role="alert">
                                                        <button type="button" class="close" >
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                        <span id="invite_warning"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <!-- fim de formulario de invite -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                    <button type="button" id="invite_luck" class="btn btn-lg btn-primary btn-block" data-loading-text="Lets check...">Login</a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="posted-by container" style="height: 60px; z-index: 10;">
            <?php include( 'footer.php'); ?>
        </div>
        <script src="public/jquery/user.js" type="text/javascript"></script>
    </body>
</html>

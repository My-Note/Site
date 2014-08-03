<?php require_once( 'session_base.php'); ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>My-Note</title>

	<?php include( 'header.php'); ?>

</head>

<body class="index_body">
	<div class="container">
		<div class="container text-center">
			<div class="row ">
				<div class="col-md-12">
					<a href="home.php" style="text-decoration:none;">
						<h2 style="background:white; opacity:0.9; padding:20px; margin:30px auto; width:63%; ">
							<span class="glyphicon glyphicon-eye-open"></span>Veja o que está a acontecer!
							<small>Isto está ainda em modo preview!</small>
							<small>Serão abertos testes para as versões Betas!!</small>
						</h2>
					</a>
				</div>
			</div>
			<!-- Button trigger modal -->
			<div class="container" style="background:rgba(255, 255, 255, 0.8);">
				<hr class="colorgraph">
				<br>
				<center>
					<h1><b>Yupy!!</b>
					</h1>
					<h3>You get an invite for our Social Network</h3>
					<p>Finish this signup forms and we will take you to the "VIP" zone :D</p>
					<br>
					<button class="btn btn-primary btn-lg" href="#signup" data-toggle="modal" data-target=".bs-modal-lg">Already registed? Then Sign In!</button>
				</center>
				<br>
				<hr class="colorgraph">
			</div>


			<!-- Modal -->
			<div class="modal fade bs-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<br>
						<div class="bs-example bs-example-tabs">
							<ul id="myTab" class="nav nav-tabs">
								<li class=""><a href="#signin" data-toggle="tab">Sign In</a>
								</li>
								<li class="active"><a href="#signup" data-toggle="tab">Register</a>
								</li>
								<li class=""><a href="#why" data-toggle="tab">Why?</a>
								</li>
							</ul>
				<hr class="colorgraph" style="margin-top:0;">
						</div>
						<div class="modal-body">
							<div id="myTabContent" class="tab-content">
								<div class="tab-pane fade in" id="why">
									<p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
									<p></p>
									<br>Please contact
									<a mailto:href="help@my-note.com"></a>help@my-note.com</a> for any other inquiries.</p>
								</div>
								<div class="tab-pane fade in" id="signin">

									<!-- formulario de login -->

									<div class="row" style="margin-top:20px">
										<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
											<form role="form">
												<fieldset>
													<div class="form-group">
														<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
													</div>
													<div class="form-group">
														<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
													</div>
													<span class="button-checkbox">
														<button type="button" class="btn pull-left" data-color="info">Remember Me</button>
														<input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
														<a href="" class="btn btn-link pull-right">Forgot Password?</a>
													</span>
													<div class="clearfix"></div>
													<hr class="colorgraph">
													<div class="row">
														<div class="col-xs-6 col-sm-6 col-md-6">
															<input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
														</div>
														<div class="col-xs-6 col-sm-6 col-md-6">
															<a href="#signup" data-toggle="tab" class="btn btn-lg btn-primary btn-block">Register</a>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>

									<!-- fim de formulario de login -->

								</div>
								<div class="tab-pane fade active in" id="signup">

									<!-- fim de formulario de login -->

									<div class="row">
										<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
											<form role="form">
												<h2 style="margin-top: -10px;"><small>It's free and always will be.</small></h2>
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6">
														<div class="form-group">
															<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<div class="form-group">
															<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
														</div>
													</div>
												</div>
												<div class="form-group">
													<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
												</div>
												<div class="form-group">
													<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
												</div>
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6">
														<div class="form-group">
															<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<div class="form-group">
															<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-4 col-sm-3 col-md-3">
														<span class="button-checkbox">
															<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
															<input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
														</span>
													</div>
													<div class="col-xs-8 col-sm-9 col-md-9">
														By clicking
														<strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
													</div>
												</div>

												<hr class="colorgraph">
												<div class="row">
													<div class="col-xs-12 col-md-6">
														<input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
													</div>
													<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a>
													</div>
												</div>
											</form>
										</div>
									</div>

									<!-- fim de formulario de login -->

								</div>
							</div>
						</div>
						<div class="modal-footer">
							<center>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</center>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="posted-by" style="position: fixed; bottom: 0px; width: 100%;">
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
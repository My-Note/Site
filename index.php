<?php  
	require_once('session_base.php');
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My-Note</title>
		
		<?php include('header.php'); ?>	

	</head>
	<body class="index_body">
		<div class="container">
			<div class="container text-center">

				<div class="row ">
					<div class="col-md-12">
						<a href="home.php" style="text-decoration:none;">
							<h2 style="background:white; opacity:0.9; padding:20px; margin:30px auto; width:63%; ">
							<span class="glyphicon glyphicon-eye-open"></span> Veja o que está a acontecer! <small>Isto está ainda em modo preview!</small><small>Serão abertos testes para as versões Betas!!</small></h2>
						</a>
					</div>
				</div>
				<div class="panel panel-default form-signin">
					<div class="panel-heading">
						<h3 class="panel-title">Redes Sociais</h3>
					</div>
					<div class="panel-body">
						<p>
							<a href="config/login-facebook.php" class="btn btn-primary social-login-btn social-facebook"><i class="fa fa-facebook"></i></a>
							<a data-toggle="modal" href='#modal-facebook'><span class="glyphicon glyphicon-info-sign icon_info"></span></a>
							<a class="btn btn-primary social-login-btn social-twitter"><i class="fa fa-twitter"></i></a>
							<a data-toggle="modal" href='#modal-twitter'><span class="glyphicon glyphicon-info-sign icon_info"></span></a>
						</p>
						<p>
							<a class="btn btn-primary social-login-btn social-linkedin"><i class="fa fa-instagram"></i></a>
							<a data-toggle="modal" href='#modal-instagram'><span class="glyphicon glyphicon-info-sign icon_info"></span></a>
							<a class="btn btn-primary social-login-btn social-google"><i class="fa fa-google-plus"></i></a>
							<a data-toggle="modal" href='#modal-google'><span class="glyphicon glyphicon-info-sign icon_info"></span></a>
						</p>
					</div>
				</div>
				<span class="btn btn-default btn-circle btn-lg">Or</span>
				<div class="row">
					<div class="col-md-12" style="margin-bottom: 20px;">
						<div class="panel panel-default form-signin pr-wrap show-form" id="panel_signin" style="margin-top:0px;">
							<div class="panel-heading">
								<p class="form-title">Sign In</p>
							</div>
							<div class="panel-body" style="padding-top:37px;">
								<div class="wrap">
									<form class="login form_log" id="form_login">
										<input type="text" placeholder="Username" />
										<input type="password" placeholder="Password" />
										<div class="remember-forgot">
											<div class="row">
												<div class="col-md-6">
													<div class="checkbox">
														<label><input type="checkbox"/>Remember Me</label>
													</div>
												</div>
												<div class="col-md-6 forgot-pass-content">
													<a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
												</div>
											</div>
										</div>
										<button style="background: #FFF;" class="btn btn-defaut btn-sm" id="btn_login">Sign In</button>
										<span class="btn btn-default btn-circle">Or</span>
										<span class="btn btn-danger button" id="btn_signup">Sign Up</span>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default form-signin pr-wrap" id="panel_password" style="margin-top:0px;">
							<div class="panel-heading">
								<p class="form-title">Lost Password</p>
							</div>
							<div class="panel-body"  style="padding:40px 15px 18px;">
								<div class="wrap pass-reset">
									<label>Enter the email you signed up with</label>
									<input type="email" placeholder="Email" style="margin-bottom:55px;" />
									<button class="pass-reset-submit btn-labeled btn btn-success btn-sm"><span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Confirmar</button>
									<span class="btn btn-default btn-circle">Or</span>
									<button class="btn btn-danger btn-labeled btn-sm" id="btn_signup_reset"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Cancelar</button>
								</div>
							</div>
						</div>

						<div class="panel panel-default form-signin pr-wrap" id="panel_signup" style="margin-top:0px;">
							<div class="panel-heading">
								<p class="form-title">Sign Up</p>
							</div>
							<div class="panel-body">
								<div class="wrap">
									<form class="login form_log" id="form_register">
										<div class="has-success has-feedback" id="register_user">
											<input type="text" placeholder="Username" id="registar_username"/>
											<span class="glyphicon form-control-feedback" id="msg_username"></span>
										</div>
										<div class="has-success has-feedback" id="register_email">
											<input type="email" placeholder="Email" />
											<span class="glyphicon form-control-feedback" id="msg_email"></span>
										</div>
										<div class="has-success has-feedback" id="register_pass">
											<input type="password" placeholder="Password" />
											<span class="glyphicon form-control-feedback"></span>
										</div>
										<div class="has-success has-feedback" id="register_password">
											<input type="password" placeholder="Confirm Password" />
											<span class="glyphicon form-control-feedback"></span>
										</div>
										<button class="btn btn-primary btn-sm" id="btn_register">Sign Up</button>
										<span class="btn btn-default btn-circle">Or</span>
										<span class="btn btn-success button" id="btn_signin">Sign In</span>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<span class="text-muted well">Ao clicar no botão Regista-te, aceitas os nossos <a href="#">Termos</a> e confirmas que leste a nossa <a href="#">Política de Utilização de Dados</a>, incluindo a nossa <a href="#">Utilização de Cookies</a>.</span>
										
				<div class="row ">
					<div class="col-md-12">
						<h2 style="background:white; opacity:0.9; padding:20px; margin:30px auto; width:63%; ">Brevemente nas seguintes lojas: <small>Serão abertos testes para as versões Betas!!</small></h2>
						<div class="row">
							<div class="col-md-12" style="margin:30px auto; opacity:0.9;">
								<!-- apple store button -->
									<a class="btn btn-lg btn-primary big-btn" href="#">
									<i class="glyphicon glyphicon-phone pull-left"></i><div class="btn-text"><small>Available on the</small><br><strong>App Store</strong></div></a>
								<!-- android button -->
									<a class="btn btn-lg btn-success big-btn android-btn" href="#">
									<img width="80px" class="pull-left" src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png"><div class="btn-text"><small>Available on</small><br><strong>Google Play</strong></div></a>
								<!-- windows store button -->
									<a class="btn btn-lg btn-success big-btn windows-btn" href="#">
									<img width="60px" class="pull-left" src="http://1.bp.blogspot.com/-rD2_M6Vvv6w/UbmywLq5V8I/AAAAAAAACko/BEcR4QqtkRI/s1600/Windows%2BStore%2BLogo.png"><div class="btn-text">Windows<br>Store</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12" id="msg_success_registo" style="display:none;position:fixed; top:100px;">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<span class="glyphicon glyphicon-ok"></span> <strong>Registo com sucesso!</strong>
					<hr class="message-inner-separator">
					<p>Irá agora completar o seu perfil</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12" id="msg_erro_registo" style="display:none;position:fixed; top:100px;">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<span class="glyphicon glyphicon-remove"></span> <strong>Erro ao Registar!</strong>
					<hr class="message-inner-separator">
					<p>Ocorreu um erro ao registar se no site, tente novamente!</p>
				</div>
			</div>
		</div>
		<div class="posted-by">
			<?php include('footer.php'); ?>
		</div>

		<script src="public/jquery/user.js" type="text/javascript"></script>
		<?php include('modal_login.php'); ?>
	</body>
</html>
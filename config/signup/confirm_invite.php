<!-- inicio de formulario de registo -->

<div class="row" style="padding-bottom:40px;">
	<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
		<div class="row" style="margin: 20px -5px -20px; display:none" id="alert_registration">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<span class="glyphicon glyphicon-ok"></span> <strong>Success Message</strong>
				<hr class="message-inner-separator">
				<p>Your registration was completed with success.</p>
			</div>
		</div>
		<form role="form" id="registration_form">
			<div class="row">
				<div class="col-xs-12 col-sm-1 col-md-1" style="margin:20px 10px 0;">
					<?php if (($name === "") and ($id !== "1")) { ?>
						<img class="img-thumbnail img-responsive" src="public/img/icons/default-avatar.jpg" alt="avatar" />
					<?php } ?>
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10">
					<?php if (($name === "") and ($id !== "1")) {
						echo "<h3>".$UserSendInvite['name']."</h3>";
						echo "<h5><span>Known as <strong>".$UserSendInvite['username']." </strong>, invited you to join this great Social Network</span> </h5>";

					} else {?>
						<h3>It's free and always will be.</h3>
					<?php } ?>
				</div>
			</div>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
					</div>
				</div>
			</div>

			<div class="form-group has-feedback">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" value="<?=$name?>"  data-toggle="tooltip" data-placement="top" title="" required>
				<span class="glyphicon form-control-feedback" id="span_display_name"></span>
			</div>
			<div class="form-group  has-feedback">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="<?=$email?>"  data-toggle="tooltip" data-placement="top" title="" required>
				<span class="glyphicon form-control-feedback" id="span_email"></span>
				<p class="help-block" id="recover" style="height: 0; text-align: right; background: #F5949D; opacity:0">
					<span class="text-muted">Email used!! <a href='config/recover.php'>Forgot your account?</a></span>
				</p>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="input-group input-group-lg has-feedback">
						<input type="password" name="password" id="password" class="form-control pwd" placeholder="Confirm Password" tabindex="6"  data-toggle="tooltip" data-placement="top" title="" required>
						<span class="glyphicon form-control-feedback" id="span_pass"></span>
						<span class="input-group-addon btn btn-default reveal"><span class="glyphicon glyphicon-eye-open"></span></span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="input-group input-group-lg has-feedback">
						<input type="password" name="password_confirm" id="password_confirm" class="form-control pwd" placeholder="Confirm Password" tabindex="6" data-toggle="tooltip" data-placement="top" title="" required>
						<span class="glyphicon form-control-feedback" id="span_pass_conf"></span>
						<span class="input-group-addon btn btn-default reveal"><span class="glyphicon glyphicon-eye-open"></span></span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group" style="text-align:center">
						<label for="">Birth Date</label>
						<div class="row">
							<div class="col-md-12">
								<div class="input-group date" id="birthay_registration" data-date="01-01-1990" data-date-format="dd-mm-yyyy" data-date-viewmode="years" required>
									<input type="text" class="form-control" value="01-01-1990" required>
									<span class="input-group-addon info"><i class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group" style="text-align:center">
						<label for="">Sex</label>
						<div class="input-group" style="margin: 0 auto;">
							<div id="radioBtn_sex" class="btn-group">
								<a class="btn btn-primary notActive" data-toggle="sex_registration" data-title="M"> <i class="fa fa-male"></i>	Male </a>
								<a class="btn btn-warning notActive btn_o" data-toggle="sex_registration" data-title="O"> Other</a>
								<a class="btn btn-danger notActive btn_m" data-toggle="sex_registration" data-title="F"> Female <i class="fa fa-female"></i></a>
							</div>
							<input type="hidden" name="sex_registration" id="sex_registration">
						</div>
					</div>
				</div>
			</div>
			<hr style="border-color:#D8D6D6">
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn btn-info" tabindex="7">I Agree</button>
						<input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					By clicking
					<strong class="label label-success">Complete Registration</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>

			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<button class="btn btn-success btn-block btn-lg" tabindex="7" id="confirm_registration_form">Complete Registration </button>
				</div>
			</div>
			<input type="hidden" name="token" id="token" value="<?=$token?>" readonly style="display: none;">
			<input type="hidden" name="id_user" id="id_user" value="<?=$id?>" readonly style="display: none;">
		</form>
	</div>
</div>

<!-- fim de formulario de registo -->
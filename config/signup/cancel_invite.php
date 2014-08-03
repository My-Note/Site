<?php 
#SELECT `id_user`, `username`, `oauth_provider`, `name`, `first`, `last`, `password`, `email`, `sexo`, `interested`, `relacao`, `invite_id`, `invited`, `data` FROM `users` WHERE 1
?>
<!-- fim de formulario de login -->

<div class="row" style="padding-bottom:40px;">
	<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
		<form role="form">
			<fieldset>
				<h2>
					Are you sure that you want to cancel the invite? :(
					<?php //if (($name === "") and ($id !== "1")) { ?>
						<br>
						<small>Invite send by <strong><?=$UserSendInvite['name'];?></strong></small>
					<?php //} ?>
				</h2>

				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?=$email?>">
				</div>
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" value="<?=$name?>">
				</div>
				<div class="clearfix"></div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="#signup" data-toggle="tab" class="btn btn-lg btn-danger btn-block">Cancel invite</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="#signup" data-toggle="tab" class="btn btn-lg btn-success btn-block">Try anyway</a>
					</div>
				</div>
				<input type="hidden" name="token" id="token" value="<?=$token?>" readonly style="display: none;">
				<input type="hidden" name="id_user" id="id_user" value="<?=$id?>" readonly style="display: none;">
			</fieldset>
		</form>
	</div>
</div>

<!-- fim de formulario de login -->
 <?php
	require_once('session_base.php');
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My-Note - The Game</title>
		
		<?php include('header.php'); ?>	

	</head>
	<body class="cbp-spmenu-push">
		<?php include('menu.php'); ?>
		<div class="container timeline">
			
			<div class="row">
				<div class="col-md-12">
					<div class="well well-sm">
						<div class="media">
							<a class="thumbnail pull-left" href="#">
								<img class="media-object" src="http://critterapp.pagodabox.com/img/user.jpg">
							</a>
							<div class="media-body">
								<h4 class="media-heading">First Last Name</h4>
								<p>
									<span class="label label-default"><span class="glyphicon glyphicon-picture"></span> 13 photos</span>
									<span class="label label-primary"><span class="glyphicon glyphicon-list"></span> 3º Ranked</span>
									<span class="label label-info"><span class="glyphicon glyphicon-ok"></span> 1000 Votos</span>
									<span class="label label-success"><span class="glyphicon glyphicon-thumbs-up"></span> 140 Votos Up</span>
									<span class="label label-danger"><span class="glyphicon glyphicon-thumbs-down"></span> 15 Votos Down</span>
								</p>
								<p>
									<a href="#" class="btn btn-xs btn-default">
										<span class="glyphicon glyphicon-list-alt"></span> My History
									</a>
									<a href="#" class="btn btn-xs btn-default">
										<span class="glyphicon glyphicon-ban-circle"></span> Exit Game
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-6 col_game_left">
					<div class="thumbnail game_thumbnail_left">
						<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="img-responsive game_img_left" />
						<div class="caption"  style="text-align:center; border-right: 3px solid #868686;">
							<div class="ui-group-buttons" style="float: right; margin-right: -14px;">
								<a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
								<div class="or or-lg"></div>
							</div>
							<h3>Maria Inês</h3>
							<p>
								<div class="list-group" style="text-align: start;">
									<a class="list-group-item active game_info_a">
										<span class="badge">2</span>
										<span class="glyphicon glyphicon-list-alt"></span> Ranked
									</a>
									<a class="list-group-item list-group-item-info game_info_a">
										<span class="badge">154</span>
										<span class="glyphicon glyphicon-ok"></span> Total de votos
									</a>
									<a class="list-group-item list-group-item-success game_info_a">
										<span class="badge">134</span>
										<span class="glyphicon glyphicon-thumbs-up"></span> Votos Up
									</a>
									<a class="list-group-item list-group-item-danger game_info_a">
										<span class="badge">14</span>
										<span class="glyphicon glyphicon-thumbs-down"></span> Votos Down
									</a>
								</div>
							<p>
								<a href="#" class="btn btn-primary" role="button">Ver Perfil</a>
								<a href="#" class="btn btn-danger" role="button">Reportar</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-6 col_game_right">
					<div class="thumbnail game_thumbnail_right">
						<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="img-responsive game_img_right" />
						<div class="caption"  style="text-align:center; border-left: 3px solid #868686;">
							<div class="ui-group-buttons" style="float: left; margin-left: -14px;">
								<div class="or or-lg"></div>
								<a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
							</div>
							<h3>Maria Inês</h3>
							<p>
								<div class="list-group" style="text-align: start;">
									<a class="list-group-item active game_info_a">
										<span class="badge">2</span>
										<span class="glyphicon glyphicon-list-alt"></span> Ranked
									</a>
									<a class="list-group-item list-group-item-info game_info_a">
										<span class="badge">154</span>
										<span class="glyphicon glyphicon-ok"></span> Total de votos
									</a>
									<a class="list-group-item list-group-item-success game_info_a">
										<span class="badge">134</span>
										<span class="glyphicon glyphicon-thumbs-up"></span> Votos Up
									</a>
									<a class="list-group-item list-group-item-danger game_info_a">
										<span class="badge">14</span>
										<span class="glyphicon glyphicon-thumbs-down"></span> Votos Down
									</a>
								</div>
							</p>
							<p>
								<a href="#" class="btn btn-primary" role="button">Ver Perfil</a>
								<a href="#" class="btn btn-danger" role="button">Reportar</a>
							</p>
						</div>
					</div>
				</div>
				<button type="button" style="margin: 0 -7px 10px;outline: none;" class="btn btn-default btn-lg btn-block">Or Jump to the Next <span class="glyphicon glyphicon-share-alt"></span></button>
			</div>
			<!-- sugestoes -->
			<div class="row">
				<div class="col-md-3 column productbox">
					<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
					<div class="producttitle">
						Ines
						<div class="pricetext">
							<span class="label label-success"><span class="glyphicon glyphicon-thumbs-up"></span> 140 Votos Up</span>
							<span class="label label-danger"><span class="glyphicon glyphicon-thumbs-down"></span> 15 Votos Down</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 column productbox">
					<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
					<div class="producttitle">
						Ines
						<div class="pricetext">
							<span class="label label-success"><span class="glyphicon glyphicon-thumbs-up"></span> 140 Votos Up</span>
							<span class="label label-danger"><span class="glyphicon glyphicon-thumbs-down"></span> 15 Votos Down</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 column productbox">
					<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
					<div class="producttitle">
						Ines
						<div class="pricetext">
							<span class="label label-success"><span class="glyphicon glyphicon-thumbs-up"></span> 140 Votos Up</span>
							<span class="label label-danger"><span class="glyphicon glyphicon-thumbs-down"></span> 15 Votos Down</span>
						</div>
					</div>
				</div>
			</div>
			<!-- end sugestoes -->
		</div>
		<div class="posted-by">
			<?php include('footer.php'); ?>
		</div>
		<?php include('modal.php'); ?>
	</body>
</html>
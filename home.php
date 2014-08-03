<?php 
	require_once('session_base.php');
	include_once('config/template_function.php');	
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My-Note - Home</title>
		
		<?php include('header.php'); ?>	

	</head>
	<body class="cbp-spmenu-push">
		<?php include('menu.php'); ?>
		<div class="container timeline">
			<div class="status_update">
				<!-- Nav tabs -->
				<div class="tabbable tabs-left">

					<ul class="nav nav-tabs col-xs-1 col-md-1">
						<li title=" Status" class="active panel_arrow">
							<a href="#status_update" data-toggle="tab"><span class="icon_tab_status"></span> </a><!--  <i class="fa fa-file-text-o fa-lg"></i></a> -->
						</li>
						<li title=" Carregar Fotos" class="panel_arrow">
							<a href="#upload_photos" data-toggle="tab"> <span class="icon_tab_upload"></span> </a><!--<i class="fa fa-cloud-upload fa-lg"></i></a> -->
						</li>
						<li title=" Adicionar Fotos" class="panel_arrow">
							<a href="#add_photos" data-toggle="tab"> <span class="icon_tab_share"></span> </a><!--<i class="fa fa-external-link fa-lg"></i></a> -->
						</li>
					</ul>
					<div class="tab-content col-xs-10 col-md-10 panel_base_status">
						<div class="tab-pane active panel panel_status" id="status_update" style="padding: 10px 20px;margin: 0;background: none;">
							<span class="text-muted">Atualiza o teu Status!!</span>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<div class="col-sm-12">
										<textarea class="form-control responsive" rows="3" placeholder="Diz tudo o que te apetecer..." style="resize: none;"></textarea>
									</div>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
						<div class="tab-pane panel panel_status " id="upload_photos" style="padding: 10px 20px;margin: 0;background: none;">
							<span class="text-muted">Atualiza as tuas fotos!!</span>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<div class="col-sm-12">
										<label for="exampleInputFile"><i class="fa fa-camera-retro fa-lg"></i> File input <i class="fa fa-picture-o fa-lg"></i></label>
										<input type="file" id="exampleInputFile">
									</div>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
						<div class="tab-pane panel panel_status" id="add_photos" style="padding: 10px 20px;margin: 0;background: none;">
							<span class="text-muted" style="position: absolute;">Adiciona fotos das outras redes sociais!!</span>
							<a data-toggle="tooltip" data-placement="bottom" title="Carregar do Twitter"  class="btn btn-social-icon btn-lg btn-twitter" style="margin: 30px 45px;"><i class="fa fa-twitter fa-2x"></i></a>
							<a data-toggle="tooltip" data-placement="bottom" title="Carregar do Facebook"  class="btn btn-social-icon btn-lg btn-facebook" style="margin: 30px 45px;"><i class="fa fa-facebook fa-2x"></i></a>
							<a data-toggle="tooltip" data-placement="bottom" title="Carregar do Instagram"  class="btn btn-social-icon btn-lg btn-instagram" style="margin: 30px 45px;"><i class="fa fa-instagram fa-2x"></i></a>
							<a data-toggle="tooltip" data-placement="bottom" title="Carregar do Google+"  class="btn btn-social-icon btn-lg btn-google-plus" style="margin: 30px 45px;"><i class="fa fa-google-plus fa-2x"></i></a>
						</div>
						<!-- END SOCIAL NETWORK TAB -->
					</div>
				</div>
			</div>
			<!-- END STATUS DIV FOR PROFILE UPDATE -->
			<!--//                               //-->


			<div class="row ">
				<div class="col-md-1">
						<img data-toggle="tooltip" data-placement="top" title="Miguel Cerejo" src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed"/>
				</div>
				<div class="col-xs-12 col-md-11  post_status post_status">
					<div class="panel panel-default">
						<?php echo template_share_img(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2011-12-17T09:24:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating="4"></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart-over"></span> Unlike</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-1">
						<img data-toggle="tooltip" data-placement="top" title="Miguel Cerejo" src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed"/>
				</div>
				<div class="col-xs-12 col-md-11  post_status">
					<div class="panel panel-default">
						<?php echo template_share_status(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2011-12-17T09:24:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating="4"></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart-over"></span> Unlike</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-1">
						<img data-toggle="tooltip" data-placement="top" title="Miguel Cerejo" src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed"/>
				</div>
				<div class="col-xs-12 col-md-11  post_status">
					<div class="panel panel-default">
						<?php echo template_img(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2014-03-07T02:04:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating='4'></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart-over"></span> Unlike</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<img data-toggle="tooltip" data-placement="top" title="Miguel Cerejo" src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed " />
				</div>
				<div class="col-xs-12 col-md-11  post_status">
					<div class="panel panel-default">
						<?php echo template_friend(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2011-12-17T09:24:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating='4'></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart"></span> Like</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-12">
					<div class="panel panel-default">
						<?php echo template_register(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2011-12-17T09:24:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating='4'></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart"></span> Like</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-1">
					<img data-toggle="tooltip" data-placement="top" title="Miguel Cerejo" src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed " />
				</div>
				<div class="col-xs-12 col-md-11  post_status">
					<div class="panel panel-default">
						<?php echo template_status(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2011-12-17T09:24:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating='4'></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart"></span> Like</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-1">
						<img data-toggle="tooltip" data-placement="top" title="Miguel Cerejo" src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed " />
				</div>
				<div class="col-xs-12 col-md-11  post_status">
					<div class="panel panel-default">
						<?php echo template_multiple_img(); ?>
						<div class="panel-footer small">
							<div class="pull-left time_display">
								<a href="#">
									<span class="glyphicon glyphicon-time"></span>
									<time class="timeago" datetime="2014-03-07T02:04:17Z">December 17, 2011</time>
								</a>
							</div>
							<div class="pull-right">
								<div class="info_star_value">
									<label>4</label>/10
								</div>
								<div class="starrr pull-right" data-rating='4'></div>
							</div>
							<div class="st_like_share">
								<a href="#" class="icontext"><span class="glyphicon glyphicon-heart heart-over"></span> Unlike</a> 
								<a href="#" class="icontext" title="Comment"><span class="glyphicon glyphicon-comment comment"></span> Comment</a>
								<a href="#" class="icontext" title="Share"><span class="fa fa-share fa-lg share"></span> Share</a>
								<?php echo template_likes(); ?>
							</div>
							<?php echo template_comments(); ?>
						</div>
					</div>
				</div>
				<button type="button" onmousehover="javascript(this..children().addClass('fa-spin'););" style="margin: 0 -7px 10px;" class="btn btn-default btn-lg btn-block">Load More...<i class="fa fa-spinner fa-spin"></i>
				<i class="fa fa-refresh "></i></button>
			</div>
		</div>
		<div class="posted-by">
			<?php include('footer.php'); ?>
		</div>
		<?php include('modal.php'); ?>
	</body>
</html>
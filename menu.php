<?php 
	$page_active = basename($_SERVER['PHP_SELF']);
	if ($page_active == "profile.php") {
		$back_page = "../";
	} else $back_page ="";
?>

		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<div class="menu_info_user" id="showLeft">
				<i id="icon_menu_open" class="fa fa-bars fa-2x icon_menu_left menu_icon"></i>
			</div>
			<a href="<?php echo $back_page; ?>account/profile.php" class="menu_info_users">
				<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="menu_icon_avatar no-responsive" />
				<span>Marina Rodrigues</span>
			</a>
			<a href="<?php echo $back_page; ?>home.php" <?php if ($page_active == "home.php") { echo "class='active'";} ?>>
				Home <i class="fa fa-home fa-2x icon_menu_left"></i>
				<div class="new-message">16</div>
			</a>
			<a href="#" <?php if ($page_active == "settings.php") { echo "class='active'";} ?>>
				Definições <i class="fa fa-cog fa-2x icon_menu_left"></i>
			</a>
			<a href="#" style="border-bottom: 5px solid #888;">
				Sair <i class="fa fa-sign-out fa-2x icon_menu_left"></i>
			</a>
			<a href="#" <?php if ($page_active == "cases.php") { echo "class='active'";} ?>>
				Relações <i class="fa fa-heart fa-2x icon_menu_left"></i>
				<div class="new-message">46</div>
			</a>
			<a href="<?php echo $back_page; ?>game.php" <?php if ($page_active == "game.php") { echo "class='active'";} ?>>
				The Game <i class="fa fa-gamepad fa-2x icon_menu_left"></i>
				<div class="new-message">46</div>
			</a>
			<a href="#" <?php if ($page_active == "votes.php") { echo "class='active'";} ?>>
				Votos <i class="fa fa-star-half-o fa-2x icon_menu_left"></i>
				<div class="new-message">46</div>
			</a>
			<a href="#" <?php if ($page_active == "picture.php") { echo "class='active'";} ?>>
				Fotografias <i class="fa fa-picture-o fa-2x icon_menu_left"></i>
			</a>
			<a href="#" <?php if ($page_active == "groups.php") { echo "class='active'";} ?>>
				Grupos <i class="fa fa-users fa-2x icon_menu_left"></i>
				<div class="new-message">46</div>
			</a>
		</nav><nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(34, 34, 34, 0.52);">
			<div class="container">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<a class="navbar-brand" href="#">Title</a>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="new_status_top">
					<i class="fa fa-pencil-square-o fa-3x"></i>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div id="wrap">
						<i class="fa fa-search fa-3x"></i>
						<form action="" autocomplete="on">
							<input id="search_bar" name="search" type="text" placeholder="What're we looking for ?">
						</form>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<ul class="nav navbar-nav menu_top">
						<li>
							<a href="#" id="popover_notif_icon" class="popover_parent">
								<i class="fa fa-globe fa-2x icon_menu_top"></i>
								<div class="new-message" style="padding: 0px 4px;">46</div>
							</a>
							<div id="content_notif" class="menu_notifications" style="display:none;">
								<div class="list-group">
									<a class="list-group-item" href="">Cras justo odio</a>
									<a class="list-group-item" href="">Dapibus ac facilisis in</a>
									<a class="list-group-item" href="">Morbi leo risus</a>
									<a class="list-group-item" href="">Porta ac consectetur ac</a>
									<a class="list-group-item" href="">Vestibulum at eros</a>
									<a class="list-group-item" href="">Cras justo odioa asf sdaf sadf sadf sf s </a>
									<a class="list-group-item" href="">Dapibus ac facilisis in</a>
									<a class="list-group-item" href="">Morbi leo risus</a>
									<a class="list-group-item" href="">Porta ac consectetur ac</a>
									<a class="list-group-item" href="">Vestibulum at erosasda sdfs fs fasd fasd f</a>
									<a class="list-group-item" href="">Cras justo odio</a>
									<a class="list-group-item" href="">Dapibus ac facilisis in</a>
									<a class="list-group-item" href="">Morbi leo risus</a>
									<a class="list-group-item" href="">Porta ac consectetur ac</a>
									<a class="list-group-item" href="">Vestibulum at eros</a>
									<a class="list-group-item" href="">Cras justo odio</a>
									<a class="list-group-item" href="">Dapibus ac facilisis in</a>
									<a class="list-group-item" href="">Morbi leo risus</a>
									<a class="list-group-item" href="">Porta ac consectetur ac</a>
									<a class="list-group-item" href="">Vestibulum at eros</a>
								</div>
								<button type="button" class="btn btn-default btn-xs">Ver tudo</button>
							</div>
						</li>
						<li>
							<a href="#" id="popover_messag_icon" class="popover_parent">
								<i class="fa fa-comment-o fa-2x icon_menu_top"></i>
								<div class="new-message" style="padding: 0px 4px;">46</div>
							</a>
							<div id="content_message" class="menu_notifications" style="display:none;">
								<div class="list-group">
									<a class="list-group-item" href="">Cras justo odio</a>
									<a class="list-group-item" href="">Dapibus ac facilisis in</a>
									<a class="list-group-item" href="">Morbi leo risus</a>
									<a class="list-group-item" href="">Porta ac consectetur ac</a>
									<a class="list-group-item" href="">Vestibulum at eros</a>
								</div>
								<a href="message.php">
									<button type="button" class="btn btn-default btn-xs">Ver tudo</button>
								</a>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div style="height:70px;"></div>
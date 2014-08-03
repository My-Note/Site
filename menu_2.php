<?php 
	$page_active = basename($_SERVER['PHP_SELF']);
	if ($page_active == "profile.php") {
		$back_page = "../";
	} else $back_page ="";
?>

		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<div class="menu_info_user" id="showLeft">
				<a href="<?php echo $back_page; ?>account/profile.php" <?php if ($page_active == "profile.php") { echo "class='active'";} ?>>
					<div class="col-xs-4 col-md-4">
							<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="avatar-image-feed no-responsive" />
					</div>
					<span>Marina Rodrigues</span>
				</a>
				<i id="icon_menu_open" class="fa fa-arrow-circle-right fa-2x icon_menu_left menu_icon <?php if ($page_active == "profile.php") { echo "active";} ?>"></i>
			</div>
			<a href="<?php echo $back_page; ?>home.php" <?php if ($page_active == "home.php") { echo "class='active'";} ?>>
				Home <i class="fa fa-home fa-2x icon_menu_left"></i>
				<div class="new-message">16</div>
			</a>
			<a href="#" id="icon_search">
				Pesquisar <i class="fa fa-search fa-2x icon_menu_left"></i>
			</a>
			<a href="#" <?php if ($page_active == "settings.php") { echo "class='active'";} ?>>
				Definições <i class="fa fa-cog fa-2x icon_menu_left"></i>
			</a>
			<a href="#" style="border-bottom: 5px solid #888;">
				Sair <i class="fa fa-sign-out fa-2x icon_menu_left"></i>
			</a>
			<a href="#" data-contentwrapper="#notifications_menu"  rel="popover" <?php if ($page_active == "notifications.php") { echo "class='active'";} ?>>
				Notificações <i class="fa fa-globe fa-2x icon_menu_left"></i>
				<div class="new-message">46</div>
			</a>
			<a href="<?php echo $back_page; ?>message.php" <?php if ($page_active == "message.php") { echo "class='active'";} ?>>
				Mensagens <i class="fa fa-comment-o fa-2x icon_menu_left"></i>
				<div class="new-message">46</div>
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
		</nav>
		<div id="notifications_menu" class="menu_notifications" style="display:none;">
			<ul class="list-group">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>
<?php 
	$videos = "";

	function social_network_icon(){
		$icon = "twitter";

		switch ($icon) {
			case 'twitter':
				return '<a data-toggle="tooltip" data-placement="bottom" title="Ver perfil no Twitter"  class="btn btn-social-icon btn-twitter" style="font-size: 12px;"><i class="fa fa-twitter fa-lg"></i></a>';
				break;
			case 'facebook':
				return '<a data-toggle="tooltip" data-placement="bottom" title="Ver perfil no Facebook"  class="btn btn-social-icon btn-facebook" style="font-size: 12px;"><i class="fa fa-facebook fa-lg"></i></a>';
				break;
			case 'instagram':
				return '<a data-toggle="tooltip" data-placement="bottom" title="Ver perfil no Instagram"  class="btn btn-social-icon btn-instagram" style="font-size: 12px;"><i class="fa fa-instagram fa-lg"></i></a>';
				break;
			case 'google':
				return '<a data-toggle="tooltip" data-placement="bottom" title="Ver perfil no Google+"  class="btn btn-social-icon btn-google-plus" style="font-size: 12px;"><i class="fa fa-google-plus fa-lg"></i></a>';
				break;
		}
	}
	/**
	* Replace links in text with html links
	*
	* @param  string $text
	* @return string
	*/
	function auto_link_text($text) {
		global $videos;
		$pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#';
		$videos = "";
		return preg_replace_callback($pattern, 'auto_link_text_callback', $text);
	}

	function auto_link_text_callback($matches) {
		global $videos;
		$max_url_length = 50;
		$max_depth_if_over_length = 2;
		$ellipsis = '&hellip;';

		$url_full = $matches[0];
		$url_short = '';

		if (strlen($url_full) > $max_url_length) {
			$parts = parse_url($url_full);
			$url_short = $parts['scheme'] . '://' . preg_replace('/^www\./', '', $parts['host']) . '/';

			$path_components = explode('/', trim($parts['path'], '/'));
			foreach ($path_components as $dir) {
				$url_string_components[] = $dir . '/';
			}
			if (!empty($parts['query'])) {
				$url_string_components[] = '?' . $parts['query'];
			}
			if (!empty($parts['fragment'])) {
				$url_string_components[] = '#' . $parts['fragment'];
			}
			for ($k = 0; $k < count($url_string_components); $k++) {
				$curr_component = $url_string_components[$k];
				if ($k >= $max_depth_if_over_length || strlen($url_short) + strlen($curr_component) > $max_url_length) {
					if ($k == 0 && strlen($url_short) < $max_url_length) {
						// Always show a portion of first directory
						$url_short .= substr($curr_component, 0, $max_url_length - strlen($url_short));
					}
					$url_short .= $ellipsis;
					break;
				}
				$url_short .= $curr_component;
			}

		} else {
			$url_short = $url_full;
		}

		$videos .= "<a class=\"oembed\" href=\"$url_full\">$url_short</a>";
		return "<a href=\"$url_full\">$url_short</a>";
	}


	//funcao para preencher os dados da pagina feed
	###############################################
	#status
	function template_status(){
		global $videos;
		$texto = "asdfas dfsad  http://www.youtube.com/watch?v=OKtzEbWiCaM asdf sadf af aads f http://www.youtube.com/watch?v=OKtzEbWiCaM";
		$get_text = auto_link_text($texto);
		return '		<div class="panel-image hide-panel-body">
							<div class="caption-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> partilhou o status de <a href="#"><strong>Catarina Viegas</strong></a> <span class="pull-right" style="margin-top:0px;"><i class="fa fa-share"></i></span>
							</div>
							<div class="row" style="padding: 50px 20px 10px;">
								<div class="col-sm-12 col-md-12">
									<blockquote>
										<p>Bruce Wayne</p> 
										<small>'.$get_text.'</small>
										<div class="col-md-12">
											<div>'.$videos.'</div>
										</div>
									</blockquote>
								</div>
							</div>
						</div>';
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function template_share_status(){
		global $videos;
		$texto = "asdfas dfsad  http://youtu.be/3zLiiZSOBTE asd adf sdf sd";
		$get_text = auto_link_text($texto);
		return '		<div class="panel-image hide-panel-body">
							<div class="caption-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> partilhou o status de <a href="#"><strong>Catarina Viegas</strong></a> <span class="pull-right" style="margin-top:0px;"><i class="fa fa-share"></i></span>
							</div>
							<div class="row" style="padding: 50px 20px 10px;">
								<div class="col-sm-12 col-md-12">
									<blockquote>
										<p>Bruce Wayne</p> 
										<small>'.$get_text.'</small>
										<div class="col-md-12">
											<div>'.$videos.'</div>
										</div>
									</blockquote>
								</div>
							</div>
						</div>';
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function template_share_img(){
		
			return 		'<div class="panel-image hide-panel-body">
							<div class="caption-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> partilhou uma foto de <a href="#"><strong>Catarina Viegas</strong></a> <span class="pull-right" style="margin-top:0px;"><i class="fa fa-share"></i></span>
							</div>
							<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="panel-image-preview" />
						</div>
						<div class="panel-body">
							<h4>Title of Image</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
						</div>';
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#adicionar 1 imagem
	function template_img(){
		return '
						<div class="panel-image">
							<div class="caption-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> adicionou 1 nova foto
								<span class="pull-right"><i class="fa fa-picture-o"></i></span>
							</div>
							<img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cd36aac6bed_1.JPG" class="panel-image-preview" />
						</div>
						<div class="panel-body">
							<h4>Show the Description by default!</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
						</div>';
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#adicionar varias imagens
	function template_multiple_img(){
		return '
						<div class="panel-image">
							<div class="caption-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> adicionou 6 novas fotos
								<span class="pull-right"><i class="fa fa-picture-o"></i></span>
							</div>


							<div class="carousel slide article-slide" id="article-photo-carousel">
							<!-- Wrapper for slides -->
								<div class="carousel-inner cont-slider">

									<div class="item active">
										<img alt="" title="" style="width: 100%;" src="http://placehold.it/600x400">
									</div>
									<div class="item">
										<img alt="" title="" style="width: 100%;" src="http://placehold.it/600x400">
									</div>
									<div class="item">
										<img alt="" title="" style="width: 100%;" src="http://placehold.it/600x400">
									</div>
									<div class="item">
										<img alt="" title="" style="width: 100%;" src="http://placehold.it/600x400">
									</div>
									<div class="item">
										<img alt="" title="" style="width: 100%;" src="http://placehold.it/600x400">
									</div>
									<div class="item">
										<img alt="" title="" style="width: 100%;" src="http://placehold.it/600x400">
									</div>
								</div>
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li class="active" data-slide-to="0" data-target="#article-photo-carousel">
										<img alt="" src="http://placehold.it/250x180">
									</li>
									<li class="" data-slide-to="1" data-target="#article-photo-carousel">
										<img alt="" src="http://placehold.it/250x180">
									</li>
									<li class="" data-slide-to="2" data-target="#article-photo-carousel">
										<img alt="" src="http://placehold.it/250x180">
									</li>
									<li class="" data-slide-to="3" data-target="#article-photo-carousel">
										<img alt="" src="http://placehold.it/250x180">
									</li>
									<li class="" data-slide-to="4" data-target="#article-photo-carousel">
										<img alt="" src="http://placehold.it/250x180">
									</li>
									<li class="" data-slide-to="5" data-target="#article-photo-carousel">
										<img alt="" src="http://placehold.it/250x180">
									</li>
								</ol>
								<a class="left carousel-control" href="#article-photo-carousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#article-photo-carousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>

						</div>';
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#pedido de amizade
	function template_friend(){
		return '
						<div class="panel-image">
							<div class="title-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> adicionou <a href="#"><strong>Catarina Viegas</strong></a> como amigo <span class="pull-right"><i class="fa fa-user"></i><i class="fa fa-plus"></i><i class="fa fa-user"></i></span>
							</div>
							<div class="row" style="padding: 20px;">
								<div class="col-sm-3 col-md-3">
									<img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg" alt="" class="img-rounded img-responsive avatar-friend-feed" />
								</div>
								<div class="col-sm-6 col-md-6">
									<blockquote>
										<p>Bruce Wayne</p> 
										<small><cite title="Source Title">Gotham, United Kingdom  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
									</blockquote>
									<p>
										<i class="glyphicon glyphicon-envelope"></i> masterwayne@batman.com
										<br/>
										<i class="glyphicon glyphicon-globe"></i> www.ola.com
										<br/>
										<i class="glyphicon glyphicon-gift"></i> January 30, 1974
									</p>
								</div>
							</div>
						</div>';
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#registar
	function template_register(){
		return '
						<div class="panel-image">
							<div class="title-feed-info">
								<a href="#"><strong>Miguel Cerejo</strong></a> entrou no <b>My-Note</b> através do '.social_network_icon().'<span class="pull-right"><i class="fa fa-user"></i><i class="fa fa-plus"></i></span>
							</div>
							<div class="row" style="padding: 20px;">
								<div class="col-sm-3 col-md-3">
									<img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg" alt="" class="img-rounded img-responsive avatar-friend-feed" />
								</div>
								<div class="col-sm-6 col-md-6">
									<blockquote>
										<p>Bruce Wayne</p> 
										<small><cite title="Source Title">Gotham, United Kingdom  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
									</blockquote>
									<p>
										<i class="glyphicon glyphicon-envelope"></i> masterwayne@batman.com
										<br/>
										<i class="glyphicon glyphicon-globe"></i> www.ola.com
										<br/>
										<i class="glyphicon glyphicon-gift"></i> January 30, 1974
									</p>
								</div>
							</div>
						</div>';
	}

		//funcao para preencher os dados da pagina feed
		###############################################
		#preencher os comentarios
		function template_comments(){
			
				return		'<div class="comments" style="display:block">
								<hr class="timeline-separator">

								<ul class="comment-list">
									<li class="comment-item">
										<div class="row">
											<div class="col-xs-2 col-md-1">
												<img src="http://placehold.it/80" class="avatar-image-feed img-responsive" alt="" />
											</div>
											<div class="col-xs-10 col-md-11">
												<div class="action pull-right">
													<button type="button" class="btn btn-default btn-xs" title="Edit">
														<span class="glyphicon glyphicon-pencil"></span>
													</button>
													<button type="button" class="btn btn-default btn-xs" title="Delete">
														<span class="glyphicon glyphicon-trash"></span>
													</button>
												</div>
												<div class="user-name">
													<a href="#">Bhaumik Patel</a>
												</div>
												<div class="comment-text">
													Awesome designasd adsf asdf asdf asdf sdsagfhbdfsgc asdf 
												</div>
												<div class="time_display">
													<a href="#">
														<span class="glyphicon glyphicon-time"></span>
														<time class="timeago" datetime="2014-03-07T02:04:17Z">December 17, 2011</time>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li class="comment-item">
										<div class="row">
											<div class="col-xs-2 col-md-1">
												<img src="http://placehold.it/80" class="avatar-image-feed img-responsive" alt="" />
											</div>
											<div class="col-xs-10 col-md-11">
												<div class="action pull-right">
													<button type="button" class="btn btn-default btn-xs" title="Edit">
														<span class="glyphicon glyphicon-pencil"></span>
													</button>
													<button type="button" class="btn btn-default btn-xs" title="Delete">
														<span class="glyphicon glyphicon-trash"></span>
													</button>
												</div>
												<div class="user-name">
													<a href="#">Bhaumik Patel</a>
												</div>
												<div class="comment-text">
													Awesome designasd adsf asdf asdf asdf sdsagfhbdfsgc asdf 
												</div>
												<div class="time_display">
													<a href="#">
														<span class="glyphicon glyphicon-time"></span>
														<time class="timeago" datetime="2014-03-07T02:04:17Z">December 17, 2011</time>
													</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="glyphicon glyphicon-refresh"></span> More</a>
							</div>';
		}

		//funcao para preencher os dados da pagina feed
		###############################################
		#preencher os likes
		function template_likes(){
			return 
								'<div class="likes" id="elikes20284" style="display: block;">
									<hr class="timeline-separator">
									<a href="#" id="likeuser20016">You</a>, 
									<a href="#" id="likeuser20016">Pavan Deshpande</a>, 
									<a href="#" id="likeuser20016">Mridul Kumar Vishwakarma ...</a>,
									<a href="#" id="likeuser20016">Huzoor Bux</a>
									 and <span id="like_count20016" class="numcount">8</span> others like this.
								</div>';
		}
?>
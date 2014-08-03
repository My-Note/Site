<?php 
	$copyYear = 2014; 
	$curYear = date('Y'); 
	$direitos = $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');

	$page_active = basename($_SERVER['PHP_SELF']);
	if ($page_active == "profile.php") {
		$back_page = "../";
	} else $back_page ="";
?>

<!-- FOOTER -->
      <footer>
        <p>&copy; <?php echo $direitos; ?> TenTimeProductions, Inc. &middot; <strong>Miguel Cerejo</strong> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="/My-note/admin/">Administrador</a></p>
      </footer>
		
		<?php 
			if (($page_active != "message.php") and ($page_active != "index.php") and ($page_active != "invite.php")) {
				//include('chat.php'); 
			}
		?>
		
		<div class="col-md-4 alertAdd" id="alertAdd"></div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>
			if (!window.jQuery) {
				var jq = document.createElement('script'); jq.type = 'text/javascript';
				// Path to jquery.js file, eg. Google hosted version
				jq.src = '<?php echo $back_page; ?>public/js/jquery-1.10.2.min.js';
				document.getElementsByTagName('head')[0].appendChild(jq);
			}
		</script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php echo $back_page; ?>public/js/bootstrap.min.js"></script>
		<!-- Versão base of timeago -->
		<script src="<?php echo $back_page; ?>public/jquery/jquery.timeago.js" type="text/javascript"></script>
		<!-- Versão portuguesa do timeago -->
		<script src="<?php echo $back_page; ?>public/jquery/jquery.timeago.pt.js" type="text/javascript"></script>
		<!-- Script for votes -->
		<script src="<?php echo $back_page; ?>public/jquery/jquery.starrr.js" type="text/javascript"></script>
		<!-- Script to show videos -->
		<script src="<?php echo $back_page; ?>public/jquery/jquery.oembed.js" type="text/javascript"></script>

		<?php 
			if ($page_active === "index.php") {
		?>
			<!-- Script for invite options -->
			<script src="<?php echo $back_page; ?>public/jquery/index.js" type="text/javascript"></script>
		<?php 
			}
			if ($page_active === "invite.php") {
		?>
			<!-- Script for registration -->
			<!-- Script for datepicker -->
			<script src="<?php echo $back_page; ?>public/jquery/bootstrap-datepicker.js" type="text/javascript"></script>
			<script src="<?php echo $back_page; ?>public/jquery/login.js" type="text/javascript"></script>

		<?php 
			}
		?>

		<script>
		var ano = data[3].versao;
		if (data[3].updated == false) {
			ano = '<b style="color:red; font-size:15px;">' + data[3].versao + '</b>';
		};
      		$(function () {
          		$("[data-toggle='tooltip']").tooltip();
				$("[data-toggle='popover']").popover({html:true});

				$("#popover_messag_icon").popover({
					title:"Mensagens",
					html:true,
					placement:'bottom',
					container:'body',
					content:function(){
						return $('#content_message').html();
					}
				});
				 //data-container="body" data-toggle="popover" data-placement="bottom"
				$("#popover_notif_icon").popover({
					title:"Notificações",
					html:true,
					placement:'bottom',
					container:'body',
					content:function(){
						return $('#content_notif').html();
					}
				});
				$(".popover_parent").on('click', function (e) {
					e.preventDefault();
					$(this).toggleClass('active');
				});
				$('body').on('click', function (e) {
					//$("[data-toggle='popover']").each(function () {
					$(".popover_parent").each(function () {
						//the 'is' for buttons that trigger popups
						//the 'has' for icons within a button that triggers a popup
						if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
							$(this).popover('hide');
							$(this).removeClass('active');
						}
					});
				});

				$("time.timeago").timeago();
				$('.starrr').on('starrr:change', function(e, value){
					$(this).parent().find("label").html(value);
				});
				$('.carousel').carousel({
					interval: false
				});
				$('#myCarousel').carousel({
					interval: 10000
				})
				$('.nav-tabs a').click(function (e) {
					e.preventDefault()
					$(this).tab('show')
				})

				$( "#game_vote_left" ).hover(
					function(){
						$(this).find('.caption').fadeIn(250);
					},
					function(){
						$(this).find('.caption').fadeOut(250);
					}
				);
				$("#icon_search").on('click', function(){
					$('#Modal_search').modal('toggle');
				});
				$('#Modal_search').on('shown.bs.modal', function () {
					$('#inputSearch_modal').focus();
				})
				$("#inputSearch_modal").on('keyup', function(){

				});
				$('#Modal_search').on('hidden.bs.modal', function () {
					$('#inputSearch_modal').val("");
				})
				$(".oembed").oembed(null, {
						embedMethod: "append", 
						maxWidth: 1024,
						maxHeight: 768,
						vimeo: { autoplay: false, maxWidth: 200, maxHeight: 200}                 
				});
				var my_posts = $("[rel=tooltip]");

				var size = $(window).width();
				for(i=0;i<my_posts.length;i++){
					the_post = $(my_posts[i]);

					if(the_post.hasClass('invert') && size >=767 ){
						the_post.tooltip({ placement: 'left'});
						the_post.css("cursor","pointer");
					}else{
						if(size <767){
							the_post.addClass("responsive_tip");
						} else {
							the_post.tooltip({ placement: 'rigth'});
							the_post.css("cursor","pointer");
						}
					}
				}
      		});
			$( window ).resize(function() {
				var my_posts = $("[rel=tooltip]");
				var size = $(window).width();

				for(i=0;i<my_posts.length;i++){
					the_post = $(my_posts[i]);

					if(the_post.hasClass('invert') && size >=767 ){
						the_post.tooltip({ placement: 'left'});
						the_post.css("cursor","pointer");
					}else{
						if(size <767){
							the_post.addClass("responsive_tip");
							the_post.tooltip({ placement: 'rigth'});
							the_post.css("cursor","pointer");
						} else {
							the_post.tooltip({ placement: 'rigth'});
							the_post.css("cursor","pointer");
						}
					}
				}
			});
			$(document).on('click', '.panel-heading span.icon_minim', function (e) {
				e.preventDefault();
				var $this = $(this);
				if (!$this.hasClass('panel-collapsed')) {
					$this.parents('.panel').find('.panel-body').slideUp();
					$this.parents('.panel').find('.input-chat').css('display', 'none');
					$this.addClass('panel-collapsed');
					$this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
				} else {
					$this.parents('.panel').find('.panel-body').slideDown();
					$this.removeClass('panel-collapsed');
					$this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
					$this.parents('.panel').find('.input-chat').css('display', 'table');
				}
			});
			$(document).on('click', '#new_chat', function (e) {
				e.preventDefault();
				var size = $( ".chat-window:last-child" ).css("margin-left");
				var number = $( ".chat-window:last-child" ).attr("data-number");
				var	size_total = parseInt(size) + 380;
				var id_clone = "chat_window_" + parseInt(number) + 1;

				alert(size_total);
				alert(id_clone);

				var clone = $( "#chat_window_base" ).clone().appendTo( "#chat_base_all" );
					clone.css("margin-right", "+=380");
					clone.css("display", "block");
					clone.attr("id", id_clone);
			});
			$(document).on('click', '.icon_close', function (e) {
				e.preventDefault();
				//$(this).parent().parent().parent().parent().remove();
				$(this).closest('.chat-window').remove();
				//$( "#chat_window_1" ).remove();
			});

		</script>

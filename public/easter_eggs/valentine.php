<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My-Note - Home</title>
		
		<link href='http://fonts.googleapis.com/css?family=Parisienne|Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- /GOOGLE FONT-->

		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

	    <link href="../css/bootstrap.css" rel="stylesheet">
	    <link href="../css/bootstrap-social.css" rel="stylesheet">
	    <link href="../css/animate.css" rel="stylesheet">
	    <!-- Custom styles for this template -->
	    <link href="../css/base.css" rel="stylesheet">
	    <link href="../css/menu.css" rel="stylesheet">
	    <link href="../css/valentine.css" rel="stylesheet">

	</head>
	<body class="cbp-spmenu-push">
		<?php include('../../menu.php'); ?>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'/>

<div class="container">
	<div class="row text-center">
		<h1>
            <span class="header">
                <span class="heart"><i class="glyphicon glyphicon-heart"></i></span> 
                Happy Valentine's!
                <span class="heart"><i class="glyphicon glyphicon-heart"></i></span> 
            </span>    
        </h1>
	</div>
</div>

<?php 
	$copyYear = 2014; 
	$curYear = date('Y'); 
	$direitos = $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');

?>
		<!-- FOOTER -->
	<div class="posted-by">
		<footer>
			<p>&copy; <?php echo $direitos; ?> Company, Inc. &middot; <strong>Miguel Cerejo</strong> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="/My-note/admin/">Administrador</a></p>
		</footer>
	</div>

		<div class="span4 alertAdd" id="alertAdd"></div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>
			if (!window.jQuery) {
				var jq = document.createElement('script'); jq.type = 'text/javascript';
				// Path to jquery.js file, eg. Google hosted version
				jq.src = '../js/jquery-1.10.2.min.js';
				document.getElementsByTagName('head')[0].appendChild(jq);
			}
		</script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Versão base do timeago -->
		<script src="../jquery/jquery.timeago.js" type="text/javascript"></script>
		<!-- Versão portuguesa do timeago -->
		<script src="../jquery/jquery.timeago.pt.js" type="text/javascript"></script>
		<!-- Script para votar -->
		<script src="../jquery/jquery.starrr.js" type="text/javascript"></script>
		<!-- Script para mostrar videos -->
		<script src="../jquery/jquery.oembed.js" type="text/javascript"></script>

		<!-- CONTACTS SCRIPT--
		<script type="text/javascript" src="../js/contact.js"></script>
		<!-- / CONTACTS SCRIPT-->

		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="../jquery/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeft = document.getElementById( 'showLeft' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				menuIcon = document.getElementById( 'icon_menu_open' ),
				body = document.body;

			showLeft.onclick = function() {
				//classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				classie.toggle( menuIcon, 'menu_open' );
			};
			// showLeftPush.onclick = function() {
			// 	classie.toggle( this, 'active' );
			// 	classie.toggle( body, 'cbp-spmenu-push-toright' );
			// 	classie.toggle( menuLeft, 'cbp-spmenu-open' );
			// };
      		$(function () {
          		$("[data-toggle='tooltip']").tooltip();
				$("time.timeago").timeago();
				$('.starrr').on('starrr:change', function(e, value){
					$(this).parent().find("label").html(value);
				});
			});

			$(document).ready(function(){
				$(document).mousemove(function(e){
					TweenLite.to($('body'), .5,{ css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}
					});
				});
			});
		</script>
	</body>
</html>
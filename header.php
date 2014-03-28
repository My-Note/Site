<?php 
    $page_active = basename($_SERVER['PHP_SELF']);
    if ($page_active == "profile.php") {
        $back_page = "../";
    } else $back_page ="";
?>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Classificação de fotos">
            <meta name="author" content="Miguel Cerejo">
            <link rel="shortcut icon" href="http://my-note.net63.net/favicon.png">

    <!-- Meta Tags -->
        <!-- Discoverability -->
            <meta property="place:location:latitude" content="13.062616"/>
            <meta property="place:location:longitude" content="80.229508"/>
            <meta property="business:contact_data:street_address" content="ESTG"/>
            <meta property="business:contact_data:locality" content="Leiria"/>
            <meta property="business:contact_data:postal_code" content="2480-010"/>
            <meta property="business:contact_data:country_name" content="Portugal"/>
            <meta property="business:contact_data:email" content="cotact@mail.com"/>
            <meta property="business:contact_data:phone_number" content="+918337818"/>
            <meta property="business:contact_data:website" content="http://My-note.com"/>
        <!-- Google Plus -->
            <meta itemprop="name" content="My-Note"/>
            <meta itemprop="description" content="Vê e vota nas fotografias, status e muito que mais gostas"/>
            <meta itemprop="image" content="http://my-note.net63.net/logo.png"/>
        <!-- Twitter -->
            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@M1guel_cc">
            <meta name="twitter:title" content="My-Note">
            <meta name="twitter:description" content="Vê e vota nas fotografias, status e muito do que mais gostas">
            <meta name="twitter:creator" content="@M1guel_cc">
            <meta name="twitter:image:src" content="http://my-note.net63.net/logo.png">
            <meta name="twitter:domain" content="http://my-note.net63.net">
            <meta name="twitter:app:name:iphone" content="">
            <meta name="twitter:app:name:ipad" content="">
            <meta name="twitter:app:name:googleplay" content="">
            <meta name="twitter:app:url:iphone" content="">
            <meta name="twitter:app:url:ipad" content="">
            <meta name="twitter:app:url:googleplay" content="">
            <meta name="twitter:app:id:iphone" content="">
            <meta name="twitter:app:id:ipad" content="">
            <meta name="twitter:app:id:googleplay" content="">
         <!-- Facebook -->
            <meta property="og:type" content="profile"/> 
            <meta property="profile:first_name" content="Miguel"/> 
            <meta property="profile:last_name" content="Cerejo"/>
            <meta property="profile:username" content="m1gas"/>
            <meta property="og:title" content="My-note"/>
            <meta property="og:description" content="Vê e vota nas fotografias, status e muito que mais gostas"/>
            <meta property="og:image" content="http://my-note.net63.net/logo.png"/>
            <meta property="og:url" content="http://my-note.net63.net/"/>
            <meta property="og:site_name" content="My-note"/>
            <meta property="og:see_also" content="http://my-note.net63.net/"/>
            <meta property="fb:admins" content="m1gas"/>

    <!-- Bootstrap core CSS -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 7]>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->


	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	    <![endif]-->

	    <!-- Le styles -->
	<!-- GOOGLE FONT-->
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- /GOOGLE FONT-->

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo $back_page; ?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $back_page; ?>public/css/bootstrap-social.css" rel="stylesheet">
    <link href="<?php echo $back_page; ?>public/css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $back_page; ?>public/css/base.css" rel="stylesheet">
    <link href="<?php echo $back_page; ?>public/css/tabs.css" rel="stylesheet">
    <link href="<?php echo $back_page; ?>public/css/menu.css" rel="stylesheet">
    <?php 
        if ($page_active != "profile.php") { 
    ?>
    <link href="<?php echo $back_page; ?>public/css/home.css" rel="stylesheet">
    <?php
        }
        if ($page_active == "game.php") { 
    ?>
    <link href="<?php echo $back_page; ?>public/css/game.css" rel="stylesheet">
    <?php
        }
        if ($page_active == "message.php") { 
    ?>
    <link href="<?php echo $back_page; ?>public/css/message.css" rel="stylesheet">
    <?php
        }
    ?>
    <link href="<?php echo $back_page; ?>public/css/chat.css" rel="stylesheet">

	<!-- GOOGLE FONT-->
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- /GOOGLE FONT-->

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <link href="../public/css/bootstrap.css" rel="stylesheet">
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		if (!window.jQuery) {
			var jq = document.createElement('script'); jq.type = 'text/javascript';
			// Path to jquery.js file, eg. Google hosted version
			jq.src = '../public/js/jquery-1.10.2.min.js';
			document.getElementsByTagName('head')[0].appendChild(jq);
		}
	</script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="../public/js/bootstrap.min.js"></script>

<style type="text/css">
	.user-details {position: relative; padding: 0;background: #EAEAEA;}
	.user-details .user-image {position: relative;  z-index: 1; width: 100%; text-align: center;}
	.user-image img { clear: both; margin: auto; position: relative;}

	.user-details .user-info-block {width: 100%; position: absolute; top: 55px; background: rgb(255, 255, 255); z-index: 0; padding-top: 35px;}
	.user-info-block .user-heading {width: 100%; text-align: center; margin: 10px 0 0;}
	.user-info-block .navigation {float: left; width: 100%; margin: 0; padding: 0; list-style: none; border-bottom: 1px solid #428BCA; border-top: 1px solid #428BCA;}
	.navigation li {float: left; margin: 0; padding: 0;}
	.navigation li a {padding: 20px 30px; float: left;}
	.navigation li.active a {background: #428BCA; color: #fff;}
	.user-info-block .user-body {float: left; padding: 5%; width: 90%;}
	.user-body .tab-content > div {float: left; width: 100%;}
	.user-body .tab-content h4 {width: 100%; margin: 10px 0; color: #333;}
</style>

	<div class="row">
		<div class="col-sm-4 col-md-4 user-details">
            <div class="user-image">
                <img src="http://www.gravatar.com/avatar/2ab7b2009d27ec37bffee791819a090c?s=100&d=mm&r=g" alt="Karan Singh Sisodia" title="Karan Singh Sisodia" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Karan Singh Sisodia</h3>
                    <span class="help-block">Chandigarh, IN</span>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#events">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Account Information</h4>
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4>Settings</h4>
                        </div>
                        <div id="email" class="tab-pane">
                            <h4>Send Message</h4>
                        </div>
                        <div id="events" class="tab-pane">
                            <h4>Events</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

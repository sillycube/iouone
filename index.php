<?php
include_once 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $lang['PAGE_DESC']; ?>">
    <meta name="author" content="Benny Chan @ 30/3/2016">
    <link rel="icon" href="img/favicon.ico">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
	
	<!-- Custom lightbox style @ http://bootsnipp.com/snippets/featured/bootstrap-lightbox -->
	<link href="css/lightbox.css" rel="stylesheet">
	
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width: 350px;}
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>

	<!-- Google Font -->
	<!--<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>-->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

		  <div class="masthead clearfix inner">
				
			<div class="col-xs-6 col-md-4" style="padding-left:0px">
				<h3 ><img class="logo" src="img/white_logo2_200w.png"/></h3>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-8">
				<nav>
					<ul class="nav masthead-nav">
						<li><a href="?lang=en" style="font-family: Lane, sans-serif; font-size: 17px; font-weight:bold"><img src="img/uk-flag.png"/ class="flag-space">English</a></li>
						<li><a href="?lang=hk"><img src="img/hk-flag.png" class="flag-space"/>繁體中文</a></li>
					</ul>
				</nav>
			</div>
			<!-- <nav>
				<ul class="nav masthead-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Features</a></li>
				<li><a href="#">Contact</a></li>
				</ul>
			</nav>-->
		  </div>
				
          <div class="home-content cover container">
			  <!-- <div class="inner cover"> -->
			  <div class="col-md-6">
				<h1 class="cover-heading"><?php echo $lang['HEADER_TITLE']; ?></h1>
				<p class="cover-content"><?php echo $lang['HEADER_CONTENT']; ?></p>
				<p class="cover-content">
				  <a href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target="#lightbox"><?php echo $lang['BTN_SIGNUP']; ?></a>
				</p>
			  </div>
			  
			  <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
					<div class="modal-content">
						<div class="modal-body">
							
							<!-- Begin MailChimp Signup Form -->
						
							<div id="mc_embed_signup">
								<form action="//sillycube.us8.list-manage.com/subscribe/post?u=e5f1e717c1aa6c78d87eed4f9&amp;id=f61bf50403" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div id="mc_embed_signup_scroll">
										<h2 style="color: #000000">Subscribe to our mailing list</h2>
										<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
										<div class="mc-field-group">
											<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
										</label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
										</div>
										<div class="mc-field-group">
											<label for="mce-FNAME">First Name </label>
											<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
										</div>
										<div class="mc-field-group">
											<label for="mce-LNAME">Last Name </label>
											<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e5f1e717c1aa6c78d87eed4f9_f61bf50403" tabindex="-1" value=""></div>
										<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
									</div>
								</form>
							</div>
							<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

								<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
			  
			  <div id="myCarousel" class="col-md-6 carousel slide" data-ride="carousel" data-interval="6000">
				  <!-- slide background -->
				  <img width="300" src="img/single-iphone.png"/>
				  
				  <!-- Indicators -->
				  <!-- <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
				  </ol> -->

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="img/8.png" alt="IOU One - Mobile UI 1">
					  <!-- <div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					  </div> -->
					</div>

					<div class="item">
					  <img src="img/9.png" alt="IOU One - Mobile UI 2">
					  <!-- <div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					  </div> -->
					</div>
				  </div>
			  </div>
		  </div>

          <div class="mastfoot">
            <div class="inner">
              <p>2016 © Built by <a href="http://en.bennychan.me">Benny Chan</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Custom lightbox js plugin -->
	<script src="js/lightbox.js"></script>
	
  </body>
</html>

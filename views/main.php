<?
include 'checksession.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Landing Zero Free Bootstrap Theme with Video</title>
	<meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="Codeply">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<!--top nav bar -->
	<nav id="topNav" class="navbar navbar-default navbar-fixed-top affix">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="main.html"><i class="ion-ios-analytics-outline"></i> l3ING ME </a>
			</div>
			<div class="navbar-collapse collapse" id="bs-navbar">
				<ul class="nav navbar-nav">
					<li class="">
						<a class="page-scroll" href="#one">Intro</a>
					</li>
					<li class="">
						<a class="page-scroll" href="#two">Highlights</a>
					</li>
					<li class="active">
						<a class="page-scroll" href="#three">Gallery</a>
					</li>
					<li class="">
						<a class="page-scroll" href="#four">Features</a>
					</li>
					<li>
						<a class="page-scroll" href="#last">Contact</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">About</a>
					</li>
					<li>
						<a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#user">Welcome <?=$sess_username?> !!</a>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end top nav bar -->
	
	<header id="first">
		<div class="header-content">
			<div class="inner">
				<h1 class="cursive wow flipInX" style="visibility: visible; animation-name: flipInX;"><a href="https://www.google.com/?thailand">Welcome to thailand</a> </h1>
				<h4>Thailand is so beatiful!!</h4>
				<hr>
				<a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Toggle Video</a> &nbsp;
				<a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
			</div>
		</div>
		<video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg"
		id="video-background" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
			<!--<source src="mp4/See You Again ft. Charlie Puth.mp4" type="video/mp4">See You Again ft. Charlie Puth-->
			<source src="mp4/Traffic-blurred2.mp4" type="video/mp4">
		</video>
	</header>
	<section class="bg-primary" id="one">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
					<h2 class="margin-top-0 text-primary">Built On The Bootstrap Grid</h2>
					<br>
					<p class="text-faded">
						Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid
						sizes enable you create responsive layouts that behave accordingly on different devices.
					</p>
					<a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<section id="two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="margin-top-0 text-primary">Flexible Layouts</h2>
					<hr class="primary">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"></i>
						<h3>Responsive</h3>
						<p class="text-muted">Your site looks good everywhere</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"></i>
						<h3>Customizable</h3>
						<p class="text-muted">Easy to theme and customize with SASS</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="feature">
						<i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"></i>
						<h3>Consistent</h3>
						<p class="text-muted">A mature, well-tested, stable codebase</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="three" class="no-padding">
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-lg-4 col-sm-6">
					<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1430916273432-273c2db881a0%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3Df047e8284d2fdc1df0fd57a5d294614d">
						<img src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1430916273432-273c2db881a0%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3Df047e8284d2fdc1df0fd57a5d294614d"
						class="img-responsive" alt="Image 1">
						<div class="gallery-box-caption">
							<div class="gallery-box-content">
								<div>
									<i class="icon-lg ion-ios-search"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/getrefe/regular/tumblr_nqune4OGHl1slhhf0o1_1280.jpg">
						<img src="//splashbase.s3.amazonaws.com/getrefe/regular/tumblr_nqune4OGHl1slhhf0o1_1280.jpg" class="img-responsive" alt="Image 2">
						<div class="gallery-box-caption">
							<div class="gallery-box-content">
								<div>
									<i class="icon-lg ion-ios-search"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4">
						<img src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4"
						class="img-responsive" alt="Image 3">
						<div class="gallery-box-caption">
							<div class="gallery-box-content">
								<div>
									<i class="icon-lg ion-ios-search"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://www.bing.com/az/hprichbg/rb/XinjiangLake_ROW12263475614_1920x1080.jpg">
						<img src="http://www.bing.com/az/hprichbg/rb/XinjiangLake_ROW12263475614_1920x1080.jpg"
						class="img-responsive" alt="Image 4">
						<div class="gallery-box-caption">
							<div class="gallery-box-content">
								<div>
									<i class="icon-lg ion-ios-search"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://www.bing.com/az/hprichbg/rb/CorfeCastle_ROW10757969593_1920x1080.jpg">
						<img src="http://www.bing.com/az/hprichbg/rb/CorfeCastle_ROW10757969593_1920x1080.jpg"
						class="img-responsive" alt="Image 5">
						<div class="gallery-box-caption">
							<div class="gallery-box-content">
								<div>
									<i class="icon-lg ion-ios-search"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://www.bing.com/az/hprichbg/rb/LoyKrathong_ROW10792230370_1920x1080.jpg">
						<img src="http://www.bing.com/az/hprichbg/rb/LoyKrathong_ROW10792230370_1920x1080.jpg"
						class="img-responsive" alt="Image 6">
						<div class="gallery-box-caption">
							<div class="gallery-box-content">
								<div>
									<i class="icon-lg ion-ios-search"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid" id="four">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<h2 class="text-center text-primary">Features</h2>
				<hr>
				<div class="media wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
					<h3>Simple</h3>
					<div class="media-body media-middle">
						<p>What could be easier? Get started fast with this starter theme.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg ion-ios-bolt-outline"></i>
					</div>
				</div>
				<hr>
				<div class="media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<h3>Free</h3>
					<div class="media-left">
						<i class="icon-lg ion-ios-cloud-download-outline"></i>
					</div>
					<div class="media-body media-middle">
						<p>Yes, please. Grab it for yourself, and make something awesome.</p>
					</div>
				</div>
				<hr>
				<div class="media wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
					<h3>Unique</h3>
					<div class="media-body media-middle">
						<p>Because you don't want your site, to look like a Bootstrap site.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg ion-ios-snowy"></i>
					</div>
				</div>
				<hr>
				<div class="media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<h3>Popular</h3>
					<div class="media-left">
						<i class="icon-lg ion-ios-heart-outline"></i>
					</div>
					<div class="media-body media-middle">
						<p>There's good reason why Bootstrap is the most used frontend framework.</p>
					</div>
				</div>
				<hr>
				<div class="media wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
					<h3>Tested</h3>
					<div class="media-body media-middle">
						<p>Bootstrap is mature and stable codebase that provides consistency.</p>
					</div>
					<div class="media-right">
						<i class="icon-lg ion-ios-flask-outline"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<aside class="bg-dark">
		<div class="container text-center">
			<div class="call-to-action">
				<h2 class="text-primary">Get Started</h2>
				<a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext" class="btn btn-default btn-lg wow flipInX"
				style="visibility: hidden; animation-name: none;">Free Download</a>
			</div>
			<br>
			<hr>
			<br>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6>
						<div class="col-sm-3 col-xs-6 text-center">
							<i class="icon-lg ion-social-html5-outline" title="html 5"></i>
						</div>
						<div class="col-sm-3 col-xs-6 text-center">
							<i class="icon-lg ion-social-sass" title="sass"></i>
						</div>
						<div class="col-sm-3 col-xs-6 text-center">
							<i class="icon-lg ion-social-javascript-outline" title="javascript"></i>
						</div>
						<div class="col-sm-3 col-xs-6 text-center">
							<i class="icon-lg ion-social-css3-outline" title="css 3"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<section id="last">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="margin-top-0 wow fadeIn" style="visibility: hidden; animation-name: none;">Get in Touch</h2>
					<hr class="primary">
					<p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
				</div>
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<form class="contact-form row">
						<div class="col-md-4">
							<label></label>
							<input type="text" class="form-control" placeholder="Name">
						</div>
						<div class="col-md-4">
							<label></label>
							<input type="text" class="form-control" placeholder="Email">
						</div>
						<div class="col-md-4">
							<label></label>
							<input type="text" class="form-control" placeholder="Phone">
						</div>
						<div class="col-md-12">
							<label></label>
							<textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
						</div>
						<div class="col-md-4 col-md-offset-4">
							<label></label>
							<button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-3 column">
					<h4>Information</h4>
					<ul class="list-unstyled">
						<li><a href="">Products</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">Benefits</a></li>
						<li><a href="">Developers</a></li>
					</ul>
				</div>
				<div class="col-xs-6 col-sm-3 column">
					<h4>About</h4>
					<ul class="list-unstyled">
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 column">
					<h4>Stay Posted</h4>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
						</div>
					</form>
				</div>
				<div class="col-xs-12 col-sm-3 text-right">
					<h4>Follow</h4>
					<ul class="list-inline">
						<li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
						<li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
						<li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
					</ul>
				</div>
			</div>
			<br>
			<span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
		</div>
	</footer>
	<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive">
					<p>
						<br>
						<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2 class="text-center">Landing Zero Theme</h2>
					<h5 class="text-center">
        		    A free, responsive landing page theme built by BootstrapZero.
        		</h5>
					<p class="text-justify">
						This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling. There are
						vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin.
						There is also a gallery with modals that work nicely to showcase your work portfolio. Other features include a contact
						form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
					</p>
					<p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
					<br>
					<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
				</div>
			</div>
		</div>
	</div>
	<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<h2 class="text-center">Nice Job!</h2>
					<p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
					<p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
					<br>
					<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!--scripts loaded here from cdn for performance -->
	<script async="" src="js/analytics.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/scripts.js"></script>
	<script async="" type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','js/analytics.js','ga');
      ga('create', 'UA-46791600-1', 'auto');
      ga('send', 'pageview');
	</script>

</body>

</html>
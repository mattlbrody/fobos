<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#3ed2a7">
	
	<link rel="shortcut icon" href="../../favicon.png" />
	
	<title>FOBOS Science</title>
	
	<link rel="stylesheet" href="../css/theme-vendors.min.css" />
	<link rel="stylesheet" href="../css/theme.min.css" />
	<link rel="stylesheet" href="../css/themes/digital-agency.css" />
	
	<!-- Head Libs -->
	<script async src="../vendors/modernizr.min.js"></script>
	
</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="minimal" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
    <?php
        $userName 		= $_POST['name'];
        $userEmail	 	= $_POST['email'];
        $userMessage 		= $_POST['message'];
        $to 			= "mattlbrody@gmail.com";
        $subject 		= "Email from FOBOS contact page";
        $body 			= "Information Submitted:";
        $body .= "\r\n Name: " . $userName;
        $body .= "\r\n Email: " . $userEmail;
        $body .= "\r\n Message: " . $userMessage;
        mail($to, $subject, $body);
    ?>
	<div id="wrap">
		
		<header class="main-header main-header-overlay">
			
			<div class="mainbar-wrap">
				<div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
				<div class="container-fluid mainbar-container">
					<div class="mainbar">
						<div class="row mainbar-row align-items-lg-stretch px-4">
							
							<div class="col pr-5">
								<div class="navbar-header">
									<a class="navbar-brand" href="index.html" rel="home">
										<span class="navbar-brand-inner">
											<img class="mobile-logo-default" src="../img/FOBOS_FINAL_LOGO.png" alt="Ave HTML Template">
											<img class="logo-default" src="../img/FOBOS_FINAL_LOGO.png" alt="Ave HTML Template">
										</span>
									</a>
									<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>
										</span>
									</button>
								</div><!-- /.navbar-header -->
							</div><!-- /.col -->
							
							<div class="col">
								
								<div class="collapse navbar-collapse" id="main-header-collapse">
									
									<ul id="primary-nav" class="main-nav main-nav-hover-underline-1 nav align-items-lg-stretch justify-content-lg-center" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">
										
										<li>
											<a href="../../index.html">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Home</span>
												</span>
											</a>
										</li>
										<li>
											<a href="../../science.html">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Science</span>
												</span>
											</a>
										</li>
										<li>
											<a href="../../instrument.html">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Instrument</span>
												</span>
											</a>
										</li>
										<li>
											<a href="../../community.html">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Community</span>
												</span>
											</a>
										</li>
										<li class="is-active">
											<a href="../../contact.html">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Contact</span>
												</span>
											</a>
										</li>
									
								</ul><!-- /#primary-nav  -->
								
							</div><!-- /#main-header-collapse -->
							
						</div><!-- /.col -->
					</div><!-- /.mainbar-row -->
				</div><!-- /.mainbar -->
			</div><!-- /.mainbar-container -->
		</div><!-- /.mainbar-wrap -->
		
	</header><!-- /.main-header -->
	
	<main class="content">
		
    <section 
      class="vc_row d-flex flex-wrap align-items-end"
			data-parallax="true"
			data-parallax-options='{"parallaxBG":true}'
			data-slideshow-bg="true"
      data-slideshow-options='{"delay":6000000,"imageArray":["../img/campus2.jpg"]}'
    >
			<div class="container">
				<div class="row">
					<div class="lqd-column col-md-10 col-md-offset-1 text-center mt-7" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":31,"translateZ":-108,"opacity":0},"animations":{"translateY":0,"translateZ":0,"opacity":1}}'>
						<header class="fancy-title">
							<h1 class="text-white lh-15 mb-20 mt-20"><span class="font-size-2-3x lh-1">FOBOS Contact</span></h1>
						</header>
					</div>
				</div>
			</div>
		</section>
    
    <section id="contact" class="vc_row pt-50 pb-50">
			<div class="container">
				<div class="row">

					<div class="lqd-column col-md-6">

						<h2 class="h3 mt-0 mb-1">Contact us</h2>
						<hr class="mb-40">

						<div class="row mb-20">

							<div class="lqd-column col-sm-6">

								<p class="font-size-16 text-primary">Address</p>
								<p class="font-size-15">UC Observatories<br>UC Santa Cruz<br>1156 High Street<br>Santa Cruz, CA 95064</p>
								
							</div><!-- /.col-sm-6 -->

							<div class="lqd-column col-sm-6">

								<p class="font-size-16 text-primary">Contact the FOBOS Leadership Team</p>
								<a class="font-size-15" href="community.html">Community Page</a>

							</div><!-- /.col-sm-6 -->

						</div><!-- /.row -->

						<div class="ld-gmap-container" style="height: 280px;">
							<div class="ld-gmap"></div><!-- /.ld-gmap -->
						</div><!-- /.ld-gmap-container -->

					</div><!-- /.col-md-6 -->

					<div class="lqd-column col-md-5 col-md-offset-1 text-center">

						<div class="lqd-column-inner border-athens-gray pt-40 pb-35 px-5">

							<h2 class="h3 mt-0 mb-1">Form Sumbitted!</h2>

						</div><!-- /.lqd-column-inner -->

					</div><!-- /.lqd-column col-md-5 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<section id="services" class="vc_row pt-20 pb-80">
			<div class="container">
				<div class="row d-flex flex-wrap align-items-center">

					<div class="lqd-column col-md-6 col-xs-12 pr-md-6">

						<header class="fancy-title">
							<h2 class="h3 mb-4">We invite you to participate in the development of FOBOS.</h2>
							<p class="font-size-17 lh-185">Please feel free to contact anyone on our leadership via e-mail, but you can also contact us via the apps below!  For a Slack or Confluence invitation, please contact Kyle Westfall (westfall@ucolick.org).</p>
						</header>

					</div><!-- /.lqd-column col-md-6 -->
					
					<div class="lqd-column col-md-6 col-xs-12">

							<header class="fancy-title participate">
								<h2 class="h3 mb-4">Participate</h2>
							</header>

							<div class="iconbox iconbox-inline iconbox-xs mb-25" data-plugin-options='{"color": "#ffc70a"}'>
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="fa fa-check"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<h3 class="font-size-18 font-weight-normal">Twitter:<br><a href="https://twitter.com/FobosKeck/" target="_blank">twitter.com/FobosKeck/</a></h3>
							</div><!-- /.iconbox -->

							<div class="iconbox iconbox-inline iconbox-xs mb-25" data-plugin-options='{"color": "#ffc70a"}'>
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="fa fa-check"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<h3 class="font-size-18 font-weight-normal">Slack:<br><a href="https://keck-fobos.slack.com" target="_blank">keck-fobos.slack.com</a></h3>
							</div><!-- /.iconbox -->

							<div class="iconbox iconbox-inline iconbox-xs mb-25" data-plugin-options='{"color": "#ffc70a"}'>
								<div class="iconbox-icon-wrap">
									<span class="iconbox-icon-container">
										<i class="fa fa-check"></i>
									</span>
								</div><!-- /.iconbox-icon-wrap -->
								<h3 class="font-size-18 font-weight-normal">Confluence:<br><a href="https://uco.atlassian.net/wiki/spaces/FOB/overview" target="_blank">uco.atlassian.net/wiki/spaces/FOB/overview</a></h3>
							</div><!-- /.iconbox -->

					</div><!-- /.lqd-column col-md-6 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

<script src="../vendors/jquery.min.js"></script>
<script src="../js/theme-vendors.js"></script>
<script src="../js/theme.min.js"></script>

</body>
</html>


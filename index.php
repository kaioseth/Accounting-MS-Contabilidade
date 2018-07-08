<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Accounting MS - Contabilidade</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Accounting MS - Mario Martins Contabilidade">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center">

		<!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href="#"><span>A</span>Accounting<span>.</span></a>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li class="active"><a href="#"><span>home</span></a></li>
				<li><a href="servicos.php"><span>serviços</span></a></li>
				<li><a href="principios.php"><span>princípios</span></a></li>
				<li><a href="contato.php"><span>contato</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menu</span>
			<span class="hamburger_icon"></span>
		</div>

	</header>

	<!-- Menu -->

	<div class="fs_menu_overlay"></div>
	<div class="fs_menu_container">
		<div class="fs_menu_shapes"><img src="images/menu_shapes.png" alt=""></div>
		<nav class="fs_menu_nav">
			<ul class="fs_menu_list">
				<li><a href="#"><span><span>H</span>Home</span></a></li>
				<li><a href="#"><span><span>S</span>Serviços</span></a></li>
				<li><a href="#"><span><span>E</span>Princípios</span></a></li>
				<li><a href="#"><span><span>C</span>Contato</span></a></li>
			</ul>
		</nav>
		<div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
			<ul class="fs_social">
				<li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
			</ul>
		</div>
	</div>

	<section id="initial">
		<?php include_once('home.php'); ?>
	</section>

	<section>
		<?php include_once('sobre.php'); ?>
	</section>

	<!-- Services -->
	<div class="services prlx_parent">
		<!-- artist: https://unsplash.com/@nativemello -->
		<div class="services_background prlx" style="background-image:url(images/services_background.jpg)"></div>
		<div class="services_shapes"><img src="images/services_shapes.png" alt=""></div>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/icon_1.svg" alt="">
					</div>
					<h3>modern design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/icon_2.svg" alt="">
					</div>
					<h3>easy to use</h3>
					<p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/icon_3.svg" alt="">
					</div>
					<h3>well documented</h3>
					<p>Adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/icon_4.svg" alt="">
					</div>
					<h3>smart structure</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/icon_5.svg" alt="">
					</div>
					<h3>elements</h3>
					<p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/icon_6.svg" alt="">
					</div>
					<h3>bold colors</h3>
					<p>Adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
				</div>

			</div>

			<div class="row">
				<div class="col text-center">
					<div class="button services_button">
						<a href="services.html" class="d-flex flex-row align-items-center justify-content-center">
							discover<img src="images/arrow_right.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Clients -->

	<div class="clients">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>our clients<span>z</span></h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, est libero olor sit amet, consectetur adipiscing eli mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis quam tincidun ante, ac consectetur diam neque eget quam. </p>
				</div>
				<div class="col-lg-6">
					<p>Amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, quam tincidunest libero olor sit amet, consectetur adipiscing eli mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis quam tincidun ante, ac cquam tincidunonsectetur diam neque eget quam.</p>
				</div>
			</div>

			<div class="row">
				<div class="col">
					
					<!-- Clients Slider -->

					<div class="clients_slider_container">
						<div class="owl-carousel owl-theme clients_slider">

							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="images/client_1.png" alt="">
							</div>

							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="images/client_2.png" alt="">
							</div>

							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="images/client_3.png" alt="">
							</div>

							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="images/client_4.png" alt="">
							</div>

							<!-- Slider Item -->
							<div class="owl-item clients_item">
								<img src="images/client_5.png" alt="">
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<!-- Contact -->

	<div class="contact prlx_parent">
		<!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
		<div class="contact_background prlx" style="background-image: url(images/contact_background.jpg);"></div>
		<div class="contact_shapes"><img src="images/contact_shape.png" alt=""></div>
		<div class="container">
			
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title contact_title">
					<h2>let's work together<span>z</span></h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center contact_text">
					<p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.</p>
					<div class="button contact_button">
						<a href="contact.html" class="d-flex flex-row align-items-center justify-content-center">contact<img src="images/arrow_right.svg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
				<div class="col-sm-6 cr text-sm-left text-center">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
				<div class="col-sm-6 text-sm-right text-center">
					<div class="footer_social_container">
						<ul class="footer_social">
							<li><a href="#"><i class="fab fa-pinterest trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-dribbble trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-behance trans_300"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/progressbar/progressbar.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trainer - Trainer, Mentor, Coach HTML Template</title>
	<meta name="description"
		content="Trainer - Trainer, Mentor, Coach HTML Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
	<meta name="keywords"
		content="coach, mentor, corporate, learning, speaker, marketer, marketing, personal coach, personal development, personal mentor, personal trainer, success, therapist, trainer">
	<meta name="author" content="rudhisasmito.com">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72"
		href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114"
		href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/css/vendor/bootstrap-dropdownhover.min.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

	<script type="text/javascript"
		src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.min.js"></script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="<?php echo get_template_directory_uri(); ?>/#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
	<div class="header header-1" style="background-color:#4d4c49;">
		<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">


				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1" style="color:white">
						<div class="icon">
							<div class="fa fa-envelope-o"></div>
						</div>
						<div class="body-content" style="color:white">
							<div class="heading">EMAIL </div>
							jeanpenelantoine@outlook.com
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1" style="color:white">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content" style="color:white">
							<div class="heading" style="color:white">CONTATO</div>
							+971 58 572 9927
						</div>
					</div>


				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar navbar-main">


			<div class="row ">

				<div class="navbar-header " style="background-color: #00698c;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>

				<a id="logo" class="navbar-brand logo-hide" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo3.jpeg"
						style="height:150px ;width:450px; padding-bottom: 25px; padding-right: 30px" alt="" />
				</a>

			</div>

			<div class="container container-nav">
				<nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
					data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
					<ul class="nav navbar-nav">
						<li><a href="/">HOME</a></li>

						<li><a href="/sobrenos">SOBRE NÓS</a></li>

						<li class="dropdown">
							<a href="<?php echo get_template_directory_uri(); ?>/#" class="dropdown-toggle"
								data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">CURSOS <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/cursos">LIFE COACH</a>
								</li>
								<li>
									<a href="/cursos">MASTER LIFE COACH</a>
								</li>
								<li>
									<a href="/cursos">COACHING RELACIONAMENTO</a>
								</li>
								<li>
									<a href="/cursos">MASTER COACHING RELACIONAMENTO</a>
								</li>
								<li>
									<a href="/cursos">BUSINESS COACHING</a>
								</li>
								<li>
									<a href="/cursos"> COACHING DE IDIOMAS AJ</a>
								</li>
								<li>
									<a href="/cursos">MARKETING COACHING </a>
								</li>

							</ul>
						</li>

						<li>
							<a href="/podcast">
								<img src="<?php echo get_template_directory_uri(); ?>/images/iconepodcast3.png"
									alt="Podcast"
									style="background-color: #212635; width: auto; height: 20px; vertical-align: middle; margin-right: 0px; ; border-radius: 4px;">
								PODCAST
							</a>
						</li>
						<li><a href="/contato">CONTATO</a></li>
						<li><a href="/login">PORTAL DO COACHEE</a></li>
					</ul>

				</nav>

			</div>
		</div>
	</div>

	</div>

	<script>
    function hideLogoOnSmallScreens() {
        var logo = document.getElementById('logo');
        if (window.innerWidth <= 1080) {
            logo.style.display = 'none';
        } else {
            logo.style.display = 'block';
        }
    }

    // Esconder logo ao carregar a página
    hideLogoOnSmallScreens();

    // Esconder logo ao redimensionar a tela
    window.onresize = function() {
        hideLogoOnSmallScreens();
    };
</script>

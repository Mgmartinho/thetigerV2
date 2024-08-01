<?php
get_header();
?>

<!-- LOAD PAGE -->
<div class="animationload">
	<div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>


<!-- BANNER -->
<div class="section banner-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="title-page">CURSOS</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/">HOME</a></li>
				<li class="active">CURSOS</li>
			</ol>
		</div>
	</div>
</div>

<!--CURSOS -->
<div class="section section-border">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">

				<div class="row row-4-reset">
					<div class="col-sm-3 col-md-3">
						<!-- BOX 1 -->
						<div class="feature-box-8">
							<div class="media">
								<img src="<?php echo get_template_directory_uri(); ?>/images/lifecoach.png" alt="rud"
									class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-1" class="title">Life Coach</a>
								<a class="btn btn-warning" href="/courses-single-1">
									Comprar Agora
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<!-- BOX 2 -->
						<div class="feature-box-8">
							<div class="media">
								<img src="<?php echo get_template_directory_uri(); ?>/images/masterlifecoach.png"
									alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-2" class="title">Master Life Coaching</a>
								<a class="btn btn-warning" href="/courses-single-2">
									Comprar Agora
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<!-- BOX 3 -->
						<div class="feature-box-8">
							<div class="media">
								<img src="<?php echo get_template_directory_uri(); ?>/images/coachingrelacionamento.png"
									alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-3" class="title">Coaching Relacionamento</a>
								<a class="btn btn-warning" href="/courses-single-3">
									Comprar Agora
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<!-- BOX 4 -->
						<div class="feature-box-8">
							<div class="media">
								<img src="<?php echo get_template_directory_uri(); ?>/images/mastercoachingrelacionamento.png"
									alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-4" class="title">Master Coaching Relacionamento</a>
								<a class="btn btn-warning" href="/courses-single-4">
									Comprar Agora
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	


		<div class="row justify-content-center align-items-center text-center" 
			style="display: flex !important; justify-content: center !important; align-items: center !important; text-align: center !important;">
			<div class="col-sm-3 col-md-3">
				<!-- BOX 5 -->
				<div class="feature-box-8">
					<div class="media">
					<img src="<?php echo get_template_directory_uri(); ?>/images/businesscoaching.png" alt="rud"
					class="img-responsive ">
					</div>
					<div class="body">
						<a href="/courses-single-5" class="title">Business Coaching </a>
						<a class="btn btn-warning" href="/courses-single-5">
							Comprar Agora
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<!-- box-6 -->
				<div class="feature-box-8">
					<div class="media">
						<img src="<?php echo get_template_directory_uri(); ?>/images/idiomasaj.png" alt="rud"
							class="img-responsive " style="border-radius: 50%; object-fit: cover; height: 250px">
					</div>
					<div class="body">
						<a href="/courses-single-6" class="title">Coaching de Idiomas AJ </a>
						<a class="btn btn-warning" href="/courses-single-6">
							Comprar Agora
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<!-- BOX 7 -->
				<div class="feature-box-8">
					<div class="media">
						<img src="<?php echo get_template_directory_uri(); ?>/images/marketingcoaching.png"
							alt="rud" class="img-responsive">
					</div>
					<div class="body">
						<a href="/courses-single-7" class="title">Marketing Coaching </a>
						<a class="btn btn-warning" href="/courses-single-7">
							Comprar Agora
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- FECHAMENTO DE CURSOS -->
<!-- APPOINTMENT -->
<div class="section bg-overlay-3">
	<div class="container">

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="wrap-book">
					<div class="row">
						<div class="col-sm-7 col-md-7">
							<div
								style="background-image: url('https://www.pepperweb.com.br/wp-content/uploads/2019/09/tire-duvidas-seus-clientes.jpg'); background-size: cover; background-position: center; width: 600px; height: 600px;">
							</div>


						</div>
						<div class="col-sm-5 col-md-5">
							<div class="wrap-form">
								<h2 class="reset-section-heading" style="margin-top: 20px;">TIRE SUAS DUVIDAS
									CONOSCO
								</h2>
								<?php echo do_shortcode('[contact-form-7 id="a1a10a8" title="FORMULARIO DE CONTATO"]'); ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
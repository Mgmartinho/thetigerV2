<?php get_header(); ?>
<!-- BANNER -->
<div class="section banner-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="title-page">CONTATO</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">HOME</a></li>
				<li class="active">CONTATO</li>
			</ol>
		</div>
	</div>
</div>

<!-- CONTENT -->
<div class="section contact">
	<div class="container">
		<div class="row">


			<div class="clearfix"></div>
			<div class="col-sm-6 col-md-6">

				<div class="row">
					<div class="col-sm-10 col-md-10">
						<h2 class="section-heading">
							DETALHES DE CONTATO
						</h2>
						<ul class="list-info">
							<li><!-- Contato Brasil -->
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">
									<img src="<?php echo get_template_directory_uri(); ?>/images/br.webp"
										alt="Brazil Flag" width="20" height="14"> Rua
									Bomsucesso, 1118 - Tatuapé, São Paulo, SP, Brazil, 03305-000
								</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text">Telefone : (11) 3360-2566 <br>
									WhatsApp : 01781648101
								</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text">jeanpenelantonie@outlook.com</div>
							</li>
							<hr>
							<br>
							<li><!-- Contato Estados Unidos -->
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">
									<img src="<?php echo get_template_directory_uri(); ?>/images/us.webp" alt="USA Flag"
										width="20" height="14"> 1841 North
									Winds Dr Salem, <br>
									NC 27127
								</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text">Phone : +1336 995 9931 <br>
								</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text">jeanpenelantonie@outlook.com</div>
							</li>
							<hr>

							<li><!-- Contato Dubai -->
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">
									<img src="<?php echo get_template_directory_uri(); ?>/images/ae.webp" alt="UAE Flag"
										width="20" height="14"> DUBAI (United
									Arab Emirates) <br>
									Marina Plaza - 112229
								</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text">Phone : +971585729927 <br>
								</div>
								
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text">jeanpenelantonie@outlook.com</div>
							</li>
						</ul>
					</div>

					<div class="col-sm-10 col-md-10">
						<p class="pline">
							Ligue para nós ou faça uma visita a qualquer momento; nos empenhamos para responder todas as
							consultas dentro de 24 horas nos dias úteis.
							<br>
							<br> Estamos abertos das 8h às 17h durante os dias da semana.
						</p>
					</div>
				</div>

			</div>
			<div class="col-sm-6 col-md-6">
				<div class="content">
					<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
						<div class="form-group">
							<input type="text" class="form-control" id="p_name" placeholder="Nome Completo..."
								required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="p_email" placeholder="Email..." required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="p_subject" placeholder="Assunto...">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<textarea id="p_message" class="form-control" rows="6"
								placeholder="Escreva Sua Menagem"></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<div id="success"></div>
							<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
						</div>
					</form>

					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/ajteacher.jpeg"
							alt="Imagem do Professor" class=" rounded-2 ">
					</div>


					<div class="margin-bottom-50"></div>
					<p><em>Nota: "Transforme seus desafios em oportunidades. A cada passo, você está mais perto de
							alcançar seus objetivos."</em></p>
				</div>
			</div>

		</div>

	</div>
</div>

<?php get_footer(); ?>
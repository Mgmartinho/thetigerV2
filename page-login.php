<?php get_header(); ?>
<!-- BANNER -->
<div class="section banner-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="title-page">PORTAL DO ALUNO</div>
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
							Acesse aqui o portal do aluno
						</h2>
						<ul class="list-info">
							<li>
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">Rua Bomsucesso, 1118 - Tatuapé, São Paulo, SP, Brazil, 03305-000
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
							<!-- <li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li> -->
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
					<h2 class="section-heading">
							Login
						</h2>
					<!-- <form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true"> -->
					<form action="https://tigeruniversalcoaching.com/portaldoaluno" class="form-contact" id="loginportal" method="post" data-toggle="validator" novalidate="true">

						<div class="form-group">
							<input type="email" class="form-control" id="p_email" name="p_email"  placeholder="Digite o seu e-mail" required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="p_password" name="p_password" placeholder="Digite a sua senha" required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<div id="success"></div>
							<button type="submit" class="btn btn-primary">ENTRAR</button>
						</div>
					</form>
					<div class="margin-bottom-50"></div>
					<p><em>Nota: "Transforme seus desafios em oportunidades. A cada passo, você está mais perto de
							alcançar seus objetivos."</em></p>
				</div>
			</div>

		</div>

	</div>
</div>

<?php get_footer(); ?>
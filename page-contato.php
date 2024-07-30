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


		<div class="panel-group panel-faq" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="spacer-50"></div>
			<h4 class="title">PERGUNTAS FREQUENTES (FAQs)</h4>
			<div class="panel panel-default">
				<div class="panel-heading active" role="tab" id="heading1">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
							aria-expanded="true" aria-controls="collapse1" class="">
							Quais tipos de cursos de coaching vocês oferecem?
						</a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1"
					aria-expanded="true">
					<div class="panel-body">
						<p>Oferecemos uma ampla variedade de cursos de coaching, incluindo coaching de relacionamento
							para casais e solteiros, business coaching, life coaching, desenvolvimento pessoal, coaching
							motivacional e muito mais.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading2">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
							href="#collapse2" aria-expanded="false" aria-controls="collapse2">
							Os cursos são adequados para iniciantes?
						</a>
					</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2"
					aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>Sim, nossos cursos são projetados para todos os níveis, desde iniciantes até profissionais
							experientes que desejam aprimorar suas habilidades.</p>

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading3">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
							href="#collapse3" aria-expanded="false" aria-controls="collapse3">
							Como posso me inscrever em um curso?
						</a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3"
					aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>Você pode se inscrever diretamente através do nosso site, preenchendo o formulário de
							inscrição e efetuando o pagamento online.</p>

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading4">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
							href="#collapse4" aria-expanded="false" aria-controls="collapse4">
							Qual é a duração dos cursos?
						</a>
					</h4>
				</div>
				<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4"
					aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>A duração dos cursos varia dependendo do programa escolhido, mas geralmente duram entre 4 a
							12 semanas.</p>

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading5">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
							href="#collapse5" aria-expanded="false" aria-controls="collapse5">
							Os cursos são online ou presenciais?
						</a>
					</h4>
				</div>
				<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5"
					aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>Atualmente, todos os nossos cursos são oferecidos online para garantir maior flexibilidade e
							acessibilidade para nossos coachees.</p>

					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading6">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
							aria-expanded="true" aria-controls="collapse1" class="">
							Receberei um certificado após a conclusão do curso?
						</a>
					</h4>
				</div>
				<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6"
					aria-expanded="true">
					<div class="panel-body">
						<p>Sim, todos os coachees que concluírem com sucesso nossos cursos receberão um certificado de
							conclusão.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading7">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7"
							aria-expanded="true" aria-controls="collapse7" class="">
							Quais são os requisitos para participar dos cursos?
						</a>
					</h4>
				</div>
				<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7"
					aria-expanded="true">
					<div class="panel-body">
						<p>Não há requisitos específicos para participar. Nossos cursos são abertos a todos que desejam
							aprender e se desenvolver pessoal e profissionalmente.</p>
					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading8">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8"
							aria-expanded="true" aria-controls="collapse1" class="">
							Os cursos incluem materiais de estudo?
						</a>
					</h4>
				</div>
				<div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8"
					aria-expanded="true">
					<div class="panel-body">
						<p>Sim, todos os cursos incluem materiais de estudo abrangentes, como apostilas, vídeos,
							exercícios práticos e mais.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading9">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9"
							aria-expanded="true" aria-controls="collapse7" class="">
							Posso interagir com o coach durante o curso?
						</a>
					</h4>
				</div>
				<div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9"
					aria-expanded="true">
					<div class="panel-body">
						<p>Sim, oferecemos sessões de Q&A ao vivo e fóruns de discussão onde você pode interagir
							diretamente com os coaches e outros coachees.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading10">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10"
							aria-expanded="true" aria-controls="collapse10" class="">
							Vocês oferecem suporte após a conclusão do curso?
						</a>
					</h4>
				</div>
				<div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10"
					aria-expanded="true">
					<div class="panel-body">
						<p>Sim, oferecemos suporte contínuo para nossos ex-coachees, incluindo acesso a recursos
							adicionais e oportunidades de networking com outros profissionais.</p>
					</div>
				</div>
			</div>

		</div>


	</div>
</div> <!-- Fechamento bloco de foto e envio de duvidas -->

<!-- inico duvidas frequentes -->


<?php get_footer(); ?>
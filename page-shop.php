<?php
get_header();
?>

<style>
	/* Reset básico */
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	

	/* Estilos do cabeçalho */
	.header {
		text-align: center;
		background-color: #FF6F61;
		padding: 20px;
		color: white;
	}

	.header h1 {
		font-size: 2.5rem;
	}

	.header p {
		font-size: 1.2rem;
	}

	/* Seção de cursos */
	.course-section {
		margin-top: 40px;
	}

	.course-section h2 {
		text-align: center;
		margin-bottom: 20px;
	}

	.course-list {
		display: flex;
		flex-wrap: wrap;
		gap: 20px;
	}

	.course-item {
		background-color: white;
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		padding: 20px;
		flex: 1 1 calc(50% - 20px);
		min-width: 300px;
	}

	.course-item h3 {
		color: #FF6F61;
		margin-bottom: 10px;
	}

	/* Seção "Por que escolher" */
	.why-choose-section {
		margin-top: 40px;
	}

	.why-choose-section h2 {
		text-align: center;
		margin-bottom: 20px;
	}

	.why-choose-section ul {
		list-style-type: disc;
		margin-left: 40px;
	}

	/* Botão de chamada para ação */
	.cta-button {
		display: inline-block;
		background-color: #FF6F61;
		color: white;
		padding: 10px 20px;
		border-radius: 5px;
		text-decoration: none;
		text-align: center;
	}

	.cta-button:hover {
		background-color: #ff4a36;
	}

	/* Responsividade */
	@media (max-width: 768px) {
		.course-list {
			flex-direction: column;
		}
	}
</style>
<!-- LOAD PAGE -->
<div class="animationload">
	<div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="<?php echo get_template_directory_uri(); ?>/#0" class="cd-top cd-is-visible cd-fade-out">Top</a>


<!-- BANNER -->
<div class="section banner-page">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-md-12 col-sm-6">
				<div class="title-page" style="display: flex; align-items: center;">
					<span>SHOP</span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/shopping.png" alt="rud"
						style="width: 40px; height: 40px; margin-left: 10px; padding-bottom:4px"
						class="img-responsive media">
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">

				<li><a href="<?php echo get_template_directory_uri(); ?>//">HOME</a></li>
				<li class="active">E-books</li>
			</ol>
		</div>
	</div>
</div>


<div class="section section-border">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">

				<h2 class="header">
					<h1>Bem-vindo ao Tiger Shop</h1>
					<p>Transforme sua vida com nossos cursos exclusivos no Tiger Shop. Aqui, você encontra uma vasta
						seleção de programas de desenvolvimento pessoal, financeiro e digital, projetados para levar
						você ao próximo nível.</p>
				</h2>

				<section class="course-section">
					<h2>Descubra Nossos Cursos:</h2>

					<div class="course-list">
						<div class="course-item">
							<h3>1. Coaching e Desenvolvimento Pessoal</h3>
							<p>Desbloqueie seu potencial com técnicas comprovadas para crescimento pessoal e
								profissional.</p>
							<p>Melhore suas habilidades de comunicação, liderança e inteligência emocional.</p>
						</div>

						<div class="course-item">
							<h3>2. Finanças e Investimentos</h3>
							<p>Domine a arte de gerenciar suas finanças e construir uma base financeira sólida.</p>
							<p>Explore estratégias de investimento para aumentar seu patrimônio e garantir um futuro
								próspero.</p>
						</div>

						<div class="course-item">
							<h3>3. Mundo Digital</h3>
							<p>Navegue pelo universo digital com nossos cursos de marketing digital, e-commerce e gestão
								de mídias sociais.</p>
							<p>Aprenda a criar e expandir sua presença online, alcançando novos públicos e aumentando
								sua influência.</p>
						</div>

						<div class="course-item">
							<h3>4. Como se Tornar um Milionário</h3>
							<p>Adote a mentalidade dos milionários com nossos cursos especializados que revelam os
								segredos do sucesso financeiro.</p>
							<p>Descubra métodos práticos para aumentar sua renda, poupar e investir com sabedoria.</p>
						</div>

						<div class="course-item">
							<h3>5. Mentalidade e Autoconfiança</h3>
							<p>Desenvolva um mindset vencedor e aumente sua autoconfiança com estratégias comprovadas.
							</p>
							<p>Fortaleça sua resiliência e conquiste seus objetivos com uma mentalidade positiva.</p>
						</div>

						<div class="course-item">
							<h3>6. Nomadismo Digital</h3>
							<p>Viva e trabalhe em qualquer lugar do mundo como um nômade digital.</p>
							<p>Descubra ferramentas e técnicas para manter sua produtividade e equilíbrio enquanto
								explora novos destinos.</p>
						</div>

						<div class="course-item">
							<h3>7. Coaching Empresarial</h3>
							<p>Aprenda a orientar e motivar equipes para alcançar metas empresariais.</p>
							<p>Desenvolva habilidades de liderança e estratégias de crescimento para negócios de todos
								os tamanhos.</p>
						</div>

						<div class="course-item">
							<h3>8. Como Montar um Curso de Coaching de 6 Dígitos</h3>
							<p>Crie e lance seu próprio curso de coaching altamente lucrativo.</p>
							<p>Aprenda desde a criação de conteúdo até estratégias de marketing e vendas eficazes.</p>
						</div>

						<div class="course-item">
							<h3>9. Planejamentos e Lançamentos</h3>
							<p>Planeje e execute lançamentos de produtos e serviços com precisão.</p>
							<p>Aprenda técnicas de follow-up por e-mail para manter e converter leads.</p>
						</div>

						<div class="course-item">
							<h3>10. Autocuidado e Bem-estar</h3>
							<p>Encontre equilíbrio e bem-estar em sua vida pessoal e profissional.</p>
							<p>Explore práticas de autocuidado para manter sua saúde física e mental em dia.</p>
						</div>

						<div class="course-item">
							<h3>11. Programas de Coaching em Grupo de Alta Classe</h3>
							<p>Participe de programas de coaching em grupo exclusivos e transformadores.</p>
							<p>Compartilhe experiências e aprenda com outros profissionais de alta performance.</p>
						</div>

						<div class="course-item">
							<h3>12. Superando Bloqueios Financeiros</h3>
							<p>Identifique e supere os bloqueios que impedem seu sucesso financeiro.</p>
							<p>Desenvolva uma mentalidade de abundância e prosperidade.</p>
						</div>

						<div class="course-item">
							<h3>13. Como Escrever um Livro</h3>
							<p>Transforme suas ideias em um livro publicado.</p>
							<p>Aprenda o processo de escrita, edição e publicação com especialistas da área.</p>
						</div>

						<div class="course-item">
							<h3>14. Mentalidade de CEO</h3>
							<p>Adote a mentalidade e as estratégias dos CEOs de sucesso.</p>
							<p>Aprenda a tomar decisões estratégicas e liderar com confiança.</p>
						</div>

						<div class="course-item">
							<h3>15. Estilo de Vida Nômade Digital</h3>
							<p>Viva uma vida de liberdade e aventura enquanto trabalha remotamente.</p>
							<p>Descubra como equilibrar trabalho e lazer em qualquer lugar do mundo.</p>
						</div>

						<div class="course-item">
							<h3>16. Liberdade e Muito Mais</h3>
							<p>Explore uma ampla gama de cursos e recursos para alcançar a liberdade financeira e
								pessoal.</p>
							<p>Descubra novas oportunidades e transforme sua vida com o conhecimento certo.</p>
						</div>
					</div>
				</section>

				<section class="why-choose-section">
					<h2>Por Que Escolher o Tiger Shop?</h2>
					<ul>
						<li>Conteúdo de Qualidade: Nossos cursos são ministrados por especialistas renomados, com uma
							abordagem prática e direta.</li>
						<li>Flexibilidade: Estude no seu próprio ritmo, a qualquer hora e em qualquer lugar.</li>
						<li>Certificação: Receba certificados de conclusão que atestam suas novas habilidades e
							conhecimentos, valorizando seu currículo.</li>
					</ul>
				</section>

				<section class="footer">
					<p>No Tiger Shop, acreditamos que o conhecimento é a chave para a liberdade e o sucesso. Dê o
						primeiro passo em direção à sua melhor versão e transforme seus sonhos em realidade.</p>
					<h2 href="#" class="cta-button text-align:center text-center">Acesse Agora e Comece Sua Jornada de Sucesso!</h2>
				</section>


				<div class="row row-4-reset text-center mt-5">
					<div class="col-sm-2 col-md-3">
						<!-- BOX 1 -->
						<div class="feature-box-8">
							<div class="media">
								<img src="<?php echo get_template_directory_uri(); ?>/images/coachingidiomas.jpeg"
									alt="rud" class="img-responsive h-25 w-auto">
							</div>
							<div class="body">
								<a href="https://pay.hotmart.com/L12667439I" class="title">Coahching de Idiomas AJ</a>
								<a class="btn btn-warning" href="https://pay.hotmart.com/L12667439I">
									Comprar Agora
								</a>
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
<?php
get_header();


// Inclua o arquivo wp-load.php para ter acesso às funções do WordPress
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$creds = array(
		'user_login'    => $_POST['p_email'],
		'user_password' => $_POST['p_password'],
		'remember'      => true
	);

	// Tenta fazer o login
	$user = wp_signon($creds, false);

	if (is_wp_error($user)) {
		// Captura a mensagem de erro
		$error_message = $user->get_error_message();
		// Codifica a mensagem de erro para incluir na URL
		$error_message = urlencode($error_message);
		// Se houver um erro, redireciona de volta para a página de login com uma mensagem de erro
		wp_redirect('https://tigeruniversalcoaching.com/page-login.php?login=failed&error=' . $error_message);
		exit;
	} else {

		// Verifica se o usuário está logado
		if (is_user_logged_in()) {
			// Obtém o usuário atual
			$current_user = wp_get_current_user();
			// Obtém o nome de usuário
			$username = $current_user->user_login;
			$display_name = $current_user->display_name;

			// Exibe o nome de usuário
			// $name = "$username";
		} else {
			echo "Nenhum usuário está logado.";
			wp_redirect('https://tigeruniversalcoaching.com/');
		}

		// Se o login for bem-sucedido, redireciona para a página desejada
		// wp_redirect('https://tigeruniversalcoaching.com/portaldoaluno');
		// exit;
	}
}


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
				<div class="title-page">Olá <?php echo $display_name; ?> Seja Bem Vindo </div>
			</div>
		</div>
	</div>
</div>

<!-- VOCE TERA ACESSO A -->
<div class="section section-border">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="section-heading">
				Ferramentas Portal do Aluno 
				</h2>
			</div>
			<div class="col-sm-12 col-md-12">
				<div class="row tes">
					<!-- Item 1 -->
					<div class="col-sm-3 col-md-3">
						<div class="box-icon-3">
							<div class="icon">
								<div class="fa fa-leaf fa-2x"></div>
							</div>
							<h5 class="heading"><a href="/cursos">CERTIFICADOS</a></h5>
							<div class="body-content">
								<i class="fa fa-circle-o"></i>
								<p>
									<br>
									<a href="/cursos">Aguardando Liberação do Mentor</a>
								</p>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-3 col-md-3">
						<div class="box-icon-3">
							<div class="icon">
								<div class="fa fa-graduation-cap fa-2x"></div>
							</div>
							<h5 class="heading"><a href="/cursos">GRUPO DE ESTUDOS </a></h5>
							<div class="body-content">
								<i class="fa fa-circle-o"></i>
								<p><br>
									<a href="/cursos">Aguardando Liberação do Mentor</a>
								</p>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>
					<!-- Item 3 -->
					<!-- <div class="col-sm-3 col-md-3">
						<div class="box-icon-3">
							<div class="icon">
								<div class="fa fa-heart fa-2x"></div>
							</div>
							<h5 class="heading"><a href="/cursos">PORTAL DO ALUNO </a></h5>
							<div class="body-content">
								<i class="fa fa-circle-o"></i>
								<p><br>
									<a href="/cursos">MAIS INFORMAÇÕES</a>
								</p>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div> -->
					<!-- Item 4 -->
					<div class="col-sm-3 col-md-3">
						<div class="box-icon-3">
							<div class="icon">
								<div class="fa fa-group fa-2x"></div>
							</div>
							<h5 class="heading"><a href="/cursos">EBOOK'S GRATUITOS </a></h5>
							<div class="body-content">
								<i class="fa fa-circle-o"></i>
								<p><br>
									<a href="https://tigeruniversalcoaching.com.linkupcommunity.com/wp-content/themes/MAINFILE/HTML/images/ebook_tiger.pdf" target="_blank">E-book Tiger</a>
								</p>
							</div>
						</div>
						<div class="spacer-30"></div>
					</div>

				</div>
				<!-- <div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="spacer-50"></div>
						<div class="text-center">
							<a href="/login" class="btn btn-primary" title="LEARN MORE">PORTAL DO ALUNO</a>
						</div>
					</div>
				</div> -->
			</div>

		</div>
	</div>
</div>
<!-- FECHAMENTO CERTIFICADOS -->
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/lifecoach.png" alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-1" class="title">Life Coach</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/masterlifecoach.png" alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-2" class="title">Master Life Coaching</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/coachingrelacionamento.png" alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-3" class="title">Coaching Relacionamento</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
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
								<img src="<?php echo get_template_directory_uri(); ?>/images/mastercoachingrelacionamento.png" alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<a href="/courses-single-4" class="title">Master Coaching Relacionamento</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
								<a class="btn btn-warning" href="/courses-single-4">
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
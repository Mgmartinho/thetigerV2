<?php /* Template Name: Página de Login */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-container mt-5">
                        <h2 class="mb-3">Login</h2>

                        <!-- Formulário de Login -->
                        <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
                            <div class="form-group">
                                <label for="user_login">Nome de usuário ou email:</label>
                                <input type="text" name="log" id="user_login" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label for="user_pass">Senha:</label>
                                <input type="password" name="pwd" id="user_pass" class="form-control" value="" />
                            </div>
                            <input type="submit" value="Login" id="wp-submit" class="btn btn-primary" />
                            <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url() ); ?>" />
                        </form>

                        <!-- Link para página de registro -->
                        <p class="mt-3">Não tem uma conta? <a href="<?php echo esc_url( site_url( 'wp-login.php?action=register' ) ); ?>">Cadastre-se aqui</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

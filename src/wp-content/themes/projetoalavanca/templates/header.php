<header class="banner">
    <div class="container clearfix">
        <a href="index.html" id="logo">
            <img src="/wp-content/themes/projetoalavanca/assets/images/logo.png" alt="Logo">
        </a>

        <nav class="nav-primary">
            <ul>
                <li><a class="brand" href="<?= esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Voluntários</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Fotos</a></li>
                <li><a href="#">Campanhas</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#" class="featured-button">Doar</a></li>
            </ul>
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>
        </nav>
    </div><!-- end container -->

    <div id="hero">
        <div class="container clearfix">
            <div id="hero-title">
                <h1>Projeto Alavanca</h1>
                <h2>Realizando Sonhos</h2>


                <div id="call-to-action">
                    <a href="#" class="btn btn-large">Conheça o projeto</a>
                    <a href="#" class="btn btn-secondary">Seja Voluntário</a>
                </div><!-- end call-to-action -->
            </div><!-- end hero-title -->
        </div><!-- end container -->
    </div><!-- end hero -->


</header>


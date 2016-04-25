<header class="banner">
  <div class="container">
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
        <li><a href="#">Doar</a></li>
      </ul>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>

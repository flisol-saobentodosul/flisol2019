<div class="menu-content">
  <div id="content-logo-link">
    <a href="<?php echo get_permalink(34); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/flisol-logo.jpeg" alt="">
    </a>
    <a href="<?php echo get_permalink(26); ?>" class="link-button">
      Inscreva-se
    </a>
  </div>
  <?php wp_nav_menu( array( 'menu' => 'principal' ) ); ?>
</div>
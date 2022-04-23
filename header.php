<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138051023-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-138051023-1');
	</script>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:title" content="<?php bloginfo('name'); if(get_permalink() != get_home_url() . '/'){echo ' | ';} is_home() ? bloginfo('description') : wp_title(''); ?>" />
  <meta name="og:description" content="">
  <meta name="og:keywords" content="">
  <title><?php bloginfo('name'); if(get_permalink() != get_home_url() . '/'){echo ' | ';} is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-2.2.3.min.js"></script>
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>
<body> <!-- body -->
<div id="corpo"> <!-- #corpo -->
  <nav id="responsive-menu">
    <div id="content-responsive-menu">
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      <?php wp_nav_menu( array( 'menu' => 'responsive' ) ); ?>
     </div>
      <div id="responsive-logo">
        <a href="<?php echo get_permalink(34); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/images/flisol-logo.jpeg" alt="">
        </a>
      </div>
    </div>
  </nav>
  <div class="row"> <!-- Row Body  -->
    <div class="col-lg-3" id="menu-box">  <!-- column of menu -->
      <div id="header">
        <?php 
          /* Adicionando arquivo de Menu */
          include_once('menu.php'); 
        ?>
      </div> <!-- ./column of menu -->
    </div>
    <div class="col-lg-9" id="body-resp"> <!-- Column of pages -->


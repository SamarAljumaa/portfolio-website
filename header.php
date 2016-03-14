<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="wrapper clearfix">
    <div class="headerNav">
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php the_field('logo_image', 'option'); ?>" alt="">
        </a>
      </div>
      <h1>
        <!-- <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a> -->
      </h1>
      <div class="navMenu">
        <div id="menuBurger" class="mobileMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div> <!-- /.wrapper -->    
  </div>
  <div class="mainNav">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div>
  <div class="overlayMenu">
     <div class="wrapper">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
     </div>
  </div>   
</header><!--/.header-->


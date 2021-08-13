<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wrdiy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

<!-- Favicons -->
<link href="<?php bloginfo('stylesheet_directory') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('stylesheet_directory') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php bloginfo('stylesheet_directory') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php bloginfo('stylesheet_directory') ?>/assets/css/style.css" rel="stylesheet">	

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wrdiy' ); ?></a>

	<header id="masthead" class="site-header">
	
	  <!-- ======= Navbar ======= -->
	  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="<?php echo esc_url( home_url('/')); ?>" rel="home">Home</a></li>
            <li><a href="<?php echo esc_url( home_url('/')); ?>about-me">About Me</a></li>
          </ul>
        </div>
        <div class="col-md-6 d-none d-md-block  mr-auto">
          <div class="d-flex">
            <div>
            <?php dynamic_sidebar('Primary');?>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <!-- <h3>Hire Me</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
            officiisexplicabo inventore. <br> <a href="#">myemail@gmail.com</a></p> -->
        </div>
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Wood Rather DIY</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>
	
	</header><!-- #masthead -->

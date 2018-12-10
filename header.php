<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a11yMTL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('template_url'); ?>/css/freelancer.min.css" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'a11ymtl' ); ?></a>

	<header id="masthead" class="site-header masthead bg-primary text-white text-center">
		<div class="site-branding container">
		<img class="img-fluid mb-5 d-block mx-auto" src="#" alt="">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title text-uppercase mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title h1 text-uppercase mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$a11ymtl_description = get_bloginfo( 'description', 'display' );
			if ( $a11ymtl_description || is_customize_preview() ) :
				?>
				<p class="h2 site-description font-weight-light mb-0"><?php echo $a11ymtl_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
			<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo( 'name' ); ?></a>
			
			<button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<?php esc_html_e( 'Primary Menu', 'a11ymtl' ); ?>
          <i class="fas fa-bars"></i>
        </button>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarResponsive',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

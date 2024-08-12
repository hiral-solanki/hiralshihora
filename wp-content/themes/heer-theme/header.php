<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heer-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta content="Experienced Web Developer making webs in php, mysql, wordpress, angular etc." name="description">
  <meta content="Developer, Web Developer, PHP Developer, Back-End Developer, Front-End Developer, E-Commerce, Angular, Wordpress, PHP, MYSQL, HTML, CSS, JQUERY, AJAX" name="keywords">

	  <!-- Favicons -->
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //wp_body_open(); ?>
<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center <?php is_front_page() ? 'header-transparent':'' ;?>">
		<div class="container d-flex align-items-center justify-content-between">
		<div class="logo">
			<?php
		  the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$heer_theme_description = get_bloginfo( 'description', 'display' );
			if ( $heer_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $heer_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="navbar" class="navbar">
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'heer-theme' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'Primary',
					'container' => false,
					'add_link_class' => 'nav-link scrollto',
					'add_link_class_active' => 'nav-link scrollto active'
	   
				)
			);
			?>
        <i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->
	</header><!-- #Header -->

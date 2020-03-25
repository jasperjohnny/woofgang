<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wgcw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-FWQLX98GHL"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-FWQLX98GHL'); </script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d1a32b2739.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="">
	<a class="skip-link screen-reader-text d-none" href="#content"><?php esc_html_e( 'Skip to content', 'wgcw' ); ?></a>

	<header id="masthead" class="site-header bg-pink white">

		<nav class="navbar navbar-expand-sm navbar-light bg-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="d-sm-none"><a href="tel:8132009200"><i class="fas fa-phone"></i> 813.200.9200</a></div>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'navbarNav',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
				<div class="d-none d-sm-inline-block"><a href="tel:8132009200"><i class="fas fa-phone"></i> 813.200.9200</a>
					<a class="ml-2" target="_blank" href="https://www.instagram.com/wgbcarrollwood/" title="Connect on Insta"><i class="fab fa-instagram pink" aria-hidden="true" style="font-size: 1.4rem">&nbsp;</i></a>
					<a class="" target="_blank" href="https://www.facebook.com/WGBCarrollwood/" title="Connect on Facebook"><i class="fab fa-facebook pink" aria-hidden="true" style="font-size: 1.4rem">&nbsp;</i></a>
				</div>
			</div>
		</nav>
	</header>

	<div id="content" class="site-content">

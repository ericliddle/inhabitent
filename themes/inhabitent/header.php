<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<link href=<?php echo get_template_directory_uri() . '/build/css/style.min.css' ?> rel="stylesheet">
			<title>Inhabitent - Just Another Hipster Camping Gear Site</title>
		
		<?php wp_head(); ?>

		</head>
		<body <?php body_class(); ?>>
			<div id="page" class="hfeed site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class = "navigation-bar">
				
				
				
				<nav id="site-navigation" class="main-navigation" role="navigation">
			<img id= "tent-logo" src=<?php echo get_template_directory_uri() . "/images/inhabitent-logo-tent-white.svg" ?> alt="">
				<div class="nav-flex-item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					
				</a>
				</div>
				
				<div class="nav-flex-item">
				<button class="menu-toggle"  aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<i class="fa fa-search" aria-hidden="true"><?php get_search_form( $echo = true )?></i>

				</div>
	
				</nav>
			
			</header>
				</div>
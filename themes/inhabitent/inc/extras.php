<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// Changing logo and the URL on the login logo

function inhabitent_login_logo() {
     echo '<style type="text/css">                                                                   
       #login  h1 a { 
		background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
        background-size: 300px 53px !important;
		width: 300px ;
		height: 53px ;
		}
		#login .button.button-primary {
			background-color: #248A83;
		}                        
     </style>';
}
add_action('login_head', 'inhabitent_login_logo');

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );

/**
* Customeize the titel attribute for the login logo link.$_COOKIE*
* @return string
*/


/**
* Filter the Product Post type Archive
*/

function inhabitent_login_title() {
	return 'Inhabitent';
}

add_filter( 'login_headertitle', 'inhabitent_login_title' );

		function inhabitent_my_home_category( $query ) {
			if(
				( is_post_type_archive(array('product') ) || $query->is_tax('product-type'))
			&& !is_admin() 
			&& $query->is_main_query() 
			) {
				$query->set( 'posts_per_page', 16);
				$query->set('orderby','title');
				$query->set( 'order', ASC);
			} 
		} 
	
		add_action( 'pre_get_posts', 'inhabitent_my_home_category' );

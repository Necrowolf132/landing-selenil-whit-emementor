<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 * 
 */
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	if(is_page_template("wee-template-full-sin-header.php")){
		wp_enqueue_script("js-my-child", get_stylesheet_directory_uri() . "/js/js-my-child.js", array("jquery"), false, true);
		
		/*
		De esta manera carga en el resto de partes siempre u cuando mantenga el editado de elementor 
		 */
		wp_enqueue_style( 'Font-lato', get_stylesheet_directory_uri() . '/css/fonts/lato.css', ['child-style', 'elementor-post-7'], $version);
		wp_enqueue_style( 'my-child-style', get_stylesheet_directory_uri() . '/css/my-child-style.css', ['child-style', 'elementor-post-7','Font-lato'], $version);
		
		/*
		De esta manera carga en la vista de edicion de elementor mis librarias perzonalizadas 
		 */
		
		wp_enqueue_style( 'Font-lato2', get_stylesheet_directory_uri() . '/css/fonts/lato.css', ['child-style', 'editor-preview', 'oceanwp-elementor-preview'], $version) ;
		wp_enqueue_style( 'my-child-editor-style', get_stylesheet_directory_uri() . '/css/my-child-style.css', ['child-style', 'editor-preview', 'oceanwp-elementor-preview','Font-lato2'], $version) ;
	}

}
/*add_action( 'wp_print_scripts', 'show_handles_css_js' );
function show_handles_css_js() {
	global $wp_scripts, $wp_styles;
	
	echo "Script Handles: <br>";
	foreach( $wp_scripts->queue as $handle ) :
	echo $handle . '<br>';
	endforeach;
	
	echo "<br>Styles Handles: <br>";
	foreach( $wp_styles->queue as $handle ) :
	echo $handle . '<br>';
	endforeach;
	echo "esto de ultimo->>>>>>";
	var_dump($_GET);
	die('fin');
	}*/
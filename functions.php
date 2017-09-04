<?php 

function theme_support() {

	add_theme_support('post-thumbnails');

	add_theme_support('post-formats', [
		'aside', 'gallery', 'link'
	]);

	register_nav_menus([
		'header' => __('Header Menu'), // header menu 
		'footer' => __('Footer Menu') // footer menu
	]);
}

function register_theme_ressources() {
	wp_enqueue_style(
		'style',
		get_stylesheet_uri()
	);
}

// load ressources into the
add_action('wp_enqueue_scripts', 'register_theme_ressources');

// setup various support for theme
add_action('after_setup_theme', 'theme_support');

/**
 * register widget locations
 */
/**
* registering widget locations
* @param  [type] $name [description]
* @param  [type] $id   [description]
* @return [type]       [description]
*/
function register_theme_widget($name, $id)
{
	register_sidebar([
		'name' => $name,
		'id' => $id
	]);
}

/**
 * add theme support for widgets
 */
function add_widget_support()
{
	register_theme_widget('Sidebar', 'sidebar1');
	register_theme_widget('Footer area 1', 'footer1');
	register_theme_widget('Footer area 2', 'footer2');
	register_theme_widget('Footer area 3', 'footer3');
	register_theme_widget('Footer area 4', 'footer4');
}

// load widgets
add_action('widgets_init', 'add_widget_support');

function load_components($components = []) {
	if(is_null($components)) {
		echo '<pre>Components not found</pre>';
	}

	foreach($components as $component){

		require('components/' . $component . '.php');

	}
}

function debug($data){
	echo "<pre>";
		var_dump($data);
	echo "</pre>"; 
}


 ?>
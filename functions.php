<?php

add_image_size('home', 960, 450, true);

add_theme_support('post-thumbnails');

function talentplaats_scripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('emergence', get_template_directory_uri() . '/js/emergence.min.js', array(), '1.0.0', false);
	wp_enqueue_script('bootjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
	wp_enqueue_script('readmore', get_template_directory_uri() . '/js/readmore.min.js', array(), '1.0.0', false);
	wp_enqueue_script('slickslider', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
	wp_enqueue_script('niceselect', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), '1.0.0', true);

	wp_enqueue_style('bootcss', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('niceselectcss', get_template_directory_uri() . '/css/nice-select.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'talentplaats_scripts');


// Register menu's

function register_my_menus()
{
	register_nav_menus(
		array(
			'main_menu' => __('Hoofd Menu')
		)
	);
}
add_action('init', 'register_my_menus');


function nav_replace_vacansies($item_output, $item)
{
	if ('Vacatures' == $item->title) {
		ob_start();
		get_template_part( 'template-parts/vac-count' );
		return ob_get_clean();
	}
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'nav_replace_vacansies', 10, 2);

// Add option page

acf_add_options_page(array(

	'page_title' 	=> 'Website informatie',
	'menu_title' 	=> 'Logo & Opties',
	'menu_slug' 	=> 'website-informatie',
	'capability' 	=> 'edit_posts',
	'icon_url' => 'dashicons-universal-access-alt',
	'position' => 3

));

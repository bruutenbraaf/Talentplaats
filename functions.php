<?php

add_image_size('home', 960, 450, true);

add_theme_support('post-thumbnails');

function talentplaats_scripts()
{
	wp_enqueue_script('jquery');
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
//* Remove type tag from script and style
add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('autoptimize_html_after_minify', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle = '')
{
	return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
}

add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start()
{
	ob_start("prefix_output_callback");
}

add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end()
{
	ob_end_flush();
}

function prefix_output_callback($buffer)
{
	return preg_replace("%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer);
}

add_filter('style_loader_tag',  'clean_style_tag');
add_filter('script_loader_tag', 'clean_script_tag');

/**
 * Clean up output of stylesheet <link> tags
 */
function clean_style_tag($input)
{
	preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);
	if (empty($matches[2])) {
		return $input;
	}
	// Only display media if it is meaningful
	$media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';

	return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}

/**
 * Clean up output of <script> tags
 */
function clean_script_tag($input)
{
	$input = str_replace("type='text/javascript' ", '', $input);

	return str_replace("'", '"', $input);
}

// Register menu's

function register_my_menus()
{
	register_nav_menus(
		array(
			'main_menu' => __('Hoofd Menu'),
			'mega_menu' => __('Mega Menu'),
			'mobile_menu' => __('Mobile Menu'),
			'socket_menu' => __('Socket Menu'),
		)
	);
}
add_action('init', 'register_my_menus');


function my_acf_init()
{

	acf_update_setting('google_api_key', 'AIzaSyBwjs5yVQERqyM-MUa52sJa1a7jeBHiEes');
}

add_action('acf/init', 'my_acf_init');


function nav_replace_vacansies($item_output, $item)
{
	if ('Vacatures' == $item->title) {
		ob_start();
		get_template_part('template-parts/vac-count');
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

function excerpt($limit)
{
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
	return $excerpt;
}


function arphabet_widgets_init()
{

	register_sidebar(array(
		'name'          => 'Footer een',
		'id'            => 'footer_een',
	));

	register_sidebar(array(
		'name'          => 'Footer twee',
		'id'            => 'footer_twee',
	));

	register_sidebar(array(
		'name'          => 'Footer drie',
		'id'            => 'footer_drie',
	));
}

add_action('widgets_init', 'arphabet_widgets_init');


function option_page_posttypes()
{
	$args  = array('public'   => true, '_builtin' => false);
	$excluded_post_types = array('reviews', 'nieuws', 'vakgebieden');
	$custom_post_types = get_post_types($args);
	foreach ($custom_post_types as $custom_post_type) {
		if (in_array($custom_post_type, $excluded_post_types)) { } else {
			if (function_exists('acf_add_options_page')) {

				$formated_string = str_replace('_', "-", $custom_post_type);

				acf_add_options_sub_page(array(
					'page_title'     => 'overzicht options ' . $formated_string . '',
					'menu_title'    => 'overzicht options ' . $formated_string . '',
					'parent_slug'    => 'edit.php?post_type=' . $custom_post_type . '',
				));

				$prefix = str_replace("_", "-", $custom_post_type);
				$acf_pre = 'acf-options-overzicht-options-';
				$compiled_acf = $acf_pre .= $prefix;

				acf_add_local_field_group(array(
					'key' => 'overzicht_options_' . $custom_post_type . '',
					'title' => 'overzicht options ' . $formated_string . '',
					'fields' => array(
						array(
							'key' => '' . $custom_post_type . '_overzicht_title',
							'label' => 'Overzicht titel',
							'name' => '' . $custom_post_type . '_overzicht_title',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "header" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_intro',
							'label' => 'Overzicht intro',
							'name' => '' . $custom_post_type . '_overzicht_intro',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "header" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_afbeelding',
							'label' => 'Overzicht afbeelding',
							'name' => '' . $custom_post_type . '_overzicht_afbeelding',
							'type' => 'image',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "header" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_titlecontent',
							'label' => 'Overzicht titel content',
							'name' => '' . $custom_post_type . '_overzicht_titlecontent',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "content" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_introcontent',
							'label' => 'Overzicht intro',
							'name' => '' . $custom_post_type . '_overzicht_introcontent',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "content" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_seo',
							'label' => 'Overzicht SEO tekst',
							'name' => '' . $custom_post_type . '_overzicht_seo',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond onder de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_vacatures',
							'label' => 'Toon vacatures?',
							'name' => '' . $custom_post_type . '_overzicht_vacatures',
							'type' => 'true_false',
							'ui' => 1,
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond onder de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_vacturetitel',
							'label' => 'Tekst boven vacatures',
							'name' => '' . $custom_post_type . '_overzicht_vacturetitel',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond onder de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => $compiled_acf,
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
				));
			}
		}
	}
}
add_action('init', 'option_page_posttypes');


function option_page_posttypes_two()
{
	$args  = array('public'   => true, '_builtin' => false);
	$excluded_post_types = array('reviews', 'vakgebieden', 'opleidingen');
	$custom_post_types = get_post_types($args);
	foreach ($custom_post_types as $custom_post_type) {
		if (in_array($custom_post_type, $excluded_post_types)) { } else {
			if (function_exists('acf_add_options_page')) {

				$formated_string = str_replace('_', "-", $custom_post_type);

				acf_add_options_sub_page(array(
					'page_title'     => 'overzicht options ' . $formated_string . '',
					'menu_title'    => 'overzicht options ' . $formated_string . '',
					'parent_slug'    => 'edit.php?post_type=' . $custom_post_type . '',
				));

				$prefix = str_replace("_", "-", $custom_post_type);
				$acf_pre = 'acf-options-overzicht-options-';
				$compiled_acf = $acf_pre .= $prefix;

				acf_add_local_field_group(array(
					'key' => 'overzicht_options_' . $custom_post_type . '',
					'title' => 'overzicht options ' . $formated_string . '',
					'fields' => array(
						array(
							'key' => '' . $custom_post_type . '_overzicht_intro',
							'label' => 'Overzicht intro',
							'name' => '' . $custom_post_type . '_overzicht_intro',
							'type' => 'wysiwyg',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "header" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => '' . $custom_post_type . '_overzicht_afbeelding',
							'label' => 'Overzicht afbeelding',
							'name' => '' . $custom_post_type . '_overzicht_afbeelding',
							'type' => 'image',
							'prefix' => '',
							'instructions' => 'Dit veld wordt getoond in de "header" van de pagina.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => $compiled_acf,
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
				));
			}
		}
	}
}
add_action('init', 'option_page_posttypes_two');

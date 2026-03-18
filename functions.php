<?php
/**
 * Theme setup and asset loading.
 *
 * @package booqi-classic
 */

if (! defined('BOOQI_CLASSIC_VERSION')) {
	define('BOOQI_CLASSIC_VERSION', '1.0.0');
}

function booqi_classic_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'booqi-classic'),
			'footer'  => __('Footer Menu', 'booqi-classic'),
		)
	);
}
add_action('after_setup_theme', 'booqi_classic_setup');

function booqi_classic_assets() {
	wp_enqueue_style('booqi-classic-main', get_template_directory_uri() . '/assets/css/main.css', array(), BOOQI_CLASSIC_VERSION);
	wp_enqueue_script('booqi-classic-main', get_template_directory_uri() . '/assets/js/main.js', array(), BOOQI_CLASSIC_VERSION, true);
}
add_action('wp_enqueue_scripts', 'booqi_classic_assets');

function booqi_classic_primary_fallback_menu() {
	$fallback_links = array(
		array(
			'label' => __('Features', 'booqi-classic'),
			'url'   => home_url('/features/'),
		),
		array(
			'label' => __('Industries', 'booqi-classic'),
			'url'   => home_url('/industry/'),
		),
		array(
			'label' => __('About Us', 'booqi-classic'),
			'url'   => home_url('/about-us/'),
		),
		array(
			'label' => __('Blog', 'booqi-classic'),
			'url'   => home_url('/blog/'),
		),
		array(
			'label' => __('Contact', 'booqi-classic'),
			'url'   => home_url('/contact/'),
		),
	);

	echo '<ul id="primary-menu" class="menu primary-menu">';

	foreach ($fallback_links as $fallback_link) {
		echo '<li><a href="' . esc_url($fallback_link['url']) . '">' . esc_html($fallback_link['label']) . '</a></li>';
	}

	echo '</ul>';
}

function booqi_classic_footer_primary_links() {
	$menu = wp_nav_menu(
		array(
			'theme_location' => 'footer',
			'container'      => false,
			'fallback_cb'    => false,
			'menu_class'     => 'footer-links',
			'echo'           => false,
		)
	);

	if ($menu) {
		echo $menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		return;
	}

	$fallback_links = array(
		array(
			'label' => __('Features', 'booqi-classic'),
			'url'   => home_url('/features/'),
		),
		array(
			'label' => __('Pricing', 'booqi-classic'),
			'url'   => home_url('/#pricing'),
		),
		array(
			'label' => __('FAQ', 'booqi-classic'),
			'url'   => home_url('/#faq'),
		),
		array(
			'label' => __('About Us', 'booqi-classic'),
			'url'   => home_url('/about-us/'),
		),
		array(
			'label' => __('Blog', 'booqi-classic'),
			'url'   => home_url('/blog/'),
		),
	);

	echo '<ul class="footer-links">';

	foreach ($fallback_links as $fallback_link) {
		echo '<li><a href="' . esc_url($fallback_link['url']) . '">' . esc_html($fallback_link['label']) . '</a></li>';
	}

	echo '</ul>';
}

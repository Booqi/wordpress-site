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
	echo '<ul id="primary-menu" class="menu primary-menu">';
	echo '<li><a href="' . esc_url(home_url('/features/')) . '">' . esc_html__('Features', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/industry/')) . '">' . esc_html__('Industries', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/about-us/')) . '">' . esc_html__('About Us', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/blog/')) . '">' . esc_html__('Blog', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/contact/')) . '">' . esc_html__('Contact', 'booqi-classic') . '</a></li>';
	echo '</ul>';
}


function booqi_classic_get_page_url_by_path($paths, $fallback = '/') {
	foreach ((array) $paths as $path) {
		$page = get_page_by_path(trim($path, '/'));

		if ($page && isset($page->ID)) {
			return get_permalink($page->ID);
		}
	}

	return home_url($fallback);
}

function booqi_classic_get_privacy_policy_page_url() {
	$privacy_policy_url = function_exists('get_privacy_policy_url') ? get_privacy_policy_url() : '';

	if ($privacy_policy_url) {
		return $privacy_policy_url;
	}

	return booqi_classic_get_page_url_by_path(
		array(
			'privacy-cookie-policy',
			'privacy-and-cookie-policy',
			'privacy-policy',
		),
		'/privacy-policy/'
	);
}

function booqi_classic_get_terms_page_url() {
	return booqi_classic_get_page_url_by_path(
		array('terms-and-conditions'),
		'/terms-and-conditions/'
	);
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

	echo '<ul class="footer-links">';
	echo '<li><a href="' . esc_url(home_url('/features/')) . '">' . esc_html__('Features', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/#pricing')) . '">' . esc_html__('Pricing', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/about-us/')) . '">' . esc_html__('About Us', 'booqi-classic') . '</a></li>';
	echo '<li><a href="' . esc_url(home_url('/blog/')) . '">' . esc_html__('Blog', 'booqi-classic') . '</a></li>';
	echo '</ul>';
}

<?php
/**
 * Theme setup and asset loading.
 *
 * @package booqi-v2
 */

if (! defined('BOOQI_V2_VERSION')) {
	define('BOOQI_V2_VERSION', '1.0.0');
}

/**
 * Configure theme supports and menu locations.
 */
function booqi_v2_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'booqi-v2'),
			'footer'  => __('Footer Menu', 'booqi-v2'),
		)
	);
}
add_action('after_setup_theme', 'booqi_v2_setup');

/**
 * Enqueue shared theme assets.
 */
function booqi_v2_assets() {
	wp_enqueue_style('booqi-v2-main', get_template_directory_uri() . '/assets/css/main.css', array(), BOOQI_V2_VERSION);
	wp_enqueue_script('booqi-v2-main', get_template_directory_uri() . '/assets/js/main.js', array(), BOOQI_V2_VERSION, true);
}
add_action('wp_enqueue_scripts', 'booqi_v2_assets');

/**
 * Render a small fallback menu when no menu is assigned.
 */
function booqi_v2_primary_fallback_menu() {
	$fallback_links = array(
		array(
			'label' => __('Features', 'booqi-v2'),
			'url'   => home_url('/features/'),
		),
		array(
			'label' => __('Industries', 'booqi-v2'),
			'url'   => home_url('/industry/'),
		),
		array(
			'label' => __('About Us', 'booqi-v2'),
			'url'   => home_url('/about-us/'),
		),
		array(
			'label' => __('Contact', 'booqi-v2'),
			'url'   => home_url('/contact/'),
		),
	);

	echo '<ul id="primary-menu" class="menu primary-menu">';

	foreach ($fallback_links as $fallback_link) {
		echo '<li><a href="' . esc_url($fallback_link['url']) . '">' . esc_html($fallback_link['label']) . '</a></li>';
	}

	echo '</ul>';
}

/**
 * Render footer navigation with a minimal fallback.
 */
function booqi_v2_footer_fallback_menu() {
	$menu = wp_nav_menu(
		array(
			'theme_location' => 'footer',
			'container'      => false,
			'fallback_cb'    => false,
			'menu_class'     => 'menu footer-menu',
			'echo'           => false,
		)
	);

	if ($menu) {
		echo $menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		return;
	}

	$fallback_links = array(
		array(
			'label' => __('Privacy Policy', 'booqi-v2'),
			'url'   => home_url('/privacy-policy/'),
		),
		array(
			'label' => __('Terms & Conditions', 'booqi-v2'),
			'url'   => home_url('/terms-and-conditions/'),
		),
	);

	echo '<ul class="menu footer-menu">';

	foreach ($fallback_links as $fallback_link) {
		echo '<li><a href="' . esc_url($fallback_link['url']) . '">' . esc_html($fallback_link['label']) . '</a></li>';
	}

	echo '</ul>';
}

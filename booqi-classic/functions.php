<?php
/**
 * Theme setup for Booqi Classic.
 *
 * @package BooqiClassic
 */

if ( ! defined( 'BOOQI_CLASSIC_VERSION' ) ) {
	define( 'BOOQI_CLASSIC_VERSION', '0.1.0' );
}

/**
 * Registers theme supports and navigation menus.
 *
 * @return void
 */
function booqi_classic_setup() {
	load_theme_textdomain( 'booqi-classic', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 48, 'width' => 180, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/main.css' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'booqi-classic' ),
			'footer'  => __( 'Footer Menu', 'booqi-classic' ),
		)
	);
}
add_action( 'after_setup_theme', 'booqi_classic_setup' );

/**
 * Enqueues front-end assets.
 *
 * @return void
 */
function booqi_classic_enqueue_assets() {
	$theme = wp_get_theme();
	$version = $theme->get( 'Version' ) ? $theme->get( 'Version' ) : BOOQI_CLASSIC_VERSION;

	wp_enqueue_style( 'booqi-classic-main', get_template_directory_uri() . '/assets/css/main.css', array(), $version );
	wp_enqueue_script( 'booqi-classic-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'booqi_classic_enqueue_assets' );

/**
 * Filters menu link attributes for header CTA treatment.
 *
 * @param array    $atts Link attributes.
 * @param WP_Post  $item Menu item data object.
 * @param stdClass $args Menu rendering arguments.
 * @return array
 */
function booqi_classic_nav_link_attributes( $atts, $item, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$classes = empty( $atts['class'] ) ? '' : $atts['class'] . ' ';
		$atts['class'] = trim( $classes . 'site-nav__link' );
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'booqi_classic_nav_link_attributes', 10, 3 );

/**
 * Adds a body class for pages using the front page template.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function booqi_classic_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-booqi-front-page';
	}

	return $classes;
}
add_filter( 'body_class', 'booqi_classic_body_classes' );


/**
 * Fallback menu for the primary header navigation.
 *
 * @return void
 */
function booqi_classic_primary_menu_fallback() {
	?>
	<ul class="site-nav__list">
		<li><a class="site-nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'booqi-classic' ); ?></a></li>
		<li><a class="site-nav__link" href="<?php echo esc_url( home_url( '/features' ) ); ?>"><?php esc_html_e( 'Features', 'booqi-classic' ); ?></a></li>
		<li><a class="site-nav__link" href="<?php echo esc_url( home_url( '/pricing' ) ); ?>"><?php esc_html_e( 'Pricing', 'booqi-classic' ); ?></a></li>
	</ul>
	<?php
}

/**
 * Fallback menu for the footer navigation.
 *
 * @return void
 */
function booqi_classic_footer_menu_fallback() {
	?>
	<ul class="site-footer__menu">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'booqi-classic' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php esc_html_e( 'About', 'booqi-classic' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'booqi-classic' ); ?></a></li>
	</ul>
	<?php
}

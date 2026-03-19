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
			'primary'        => __( 'Primary Menu', 'booqi-classic' ),
			'footer_company' => __( 'Footer Company Menu', 'booqi-classic' ),
			'footer_useful'  => __( 'Footer Useful Links Menu', 'booqi-classic' ),
			'footer_legal'   => __( 'Footer Legal Menu', 'booqi-classic' ),
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
 * Filters menu link attributes for header and footer presentation.
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
 * Returns fallback items for the mirrored primary navigation.
 *
 * @return array<int, array<string, string>>
 */
function booqi_classic_get_primary_menu_items() {
	return array(
		array(
			'label' => __( 'Features', 'booqi-classic' ),
			'url'   => home_url( '/features' ),
		),
		array(
			'label' => __( 'Industries', 'booqi-classic' ),
			'url'   => home_url( '/industry' ),
		),
		array(
			'label' => __( 'About Us', 'booqi-classic' ),
			'url'   => home_url( '/about-us' ),
		),
		array(
			'label' => __( 'Blog', 'booqi-classic' ),
			'url'   => home_url( '/blog' ),
		),
		array(
			'label' => __( 'Contact', 'booqi-classic' ),
			'url'   => home_url( '/contact' ),
		),
	);
}

/**
 * Returns fallback items for the mirrored footer company links.
 *
 * @return array<int, array<string, string>>
 */
function booqi_classic_get_footer_company_menu_items() {
	return array(
		array(
			'label' => __( 'Features', 'booqi-classic' ),
			'url'   => home_url( '/features' ),
		),
		array(
			'label' => __( 'Pricing', 'booqi-classic' ),
			'url'   => home_url( '/#pricing' ),
		),
		array(
			'label' => __( 'FAQ', 'booqi-classic' ),
			'url'   => home_url( '/#faq' ),
		),
		array(
			'label' => __( 'About Us', 'booqi-classic' ),
			'url'   => home_url( '/about-us' ),
		),
		array(
			'label' => __( 'Blog', 'booqi-classic' ),
			'url'   => home_url( '/blog' ),
		),
	);
}

/**
 * Returns fallback items for the mirrored footer utility links.
 *
 * @return array<int, array<string, string>>
 */
function booqi_classic_get_footer_useful_menu_items() {
	return array(
		array(
			'label'  => __( 'Support', 'booqi-classic' ),
			'url'    => 'https://support.booqi.me/nl/',
			'target' => '_blank',
		),
		array(
			'label'  => __( 'Helpcentrum', 'booqi-classic' ),
			'url'    => 'https://support.booqi.me/nl/',
			'target' => '_blank',
		),
		array(
			'label'  => __( 'API Documentatie', 'booqi-classic' ),
			'url'    => 'https://booqi.docs.apiary.io/#',
			'target' => '_blank',
		),
		array(
			'label'  => __( 'Roadmap', 'booqi-classic' ),
			'url'    => 'https://trello.com/b/Nsg2PG9M/booqime',
			'target' => '_blank',
		),
		array(
			'label'  => __( 'Status page', 'booqi-classic' ),
			'url'    => 'https://status.booqi.app/',
			'target' => '_blank',
		),
	);
}

/**
 * Returns fallback items for the mirrored footer legal links.
 *
 * @return array<int, array<string, string>>
 */
function booqi_classic_get_footer_legal_menu_items() {
	return array(
		array(
			'label' => __( 'Privacy & Cookie Policy', 'booqi-classic' ),
			'url'   => home_url( '/privacy-cookie-policy' ),
		),
		array(
			'label' => __( 'General Terms & Conditions', 'booqi-classic' ),
			'url'   => home_url( '/terms-and-conditions' ),
		),
	);
}

/**
 * Renders a fallback menu list.
 *
 * @param string $menu_class List class name.
 * @param array  $items      Menu items.
 * @return void
 */
function booqi_classic_render_fallback_menu( $menu_class, $items ) {
	if ( empty( $items ) || ! is_array( $items ) ) {
		return;
	}
	?>
	<ul class="<?php echo esc_attr( $menu_class ); ?>">
		<?php foreach ( $items as $item ) : ?>
			<?php
			$target = empty( $item['target'] ) ? '' : $item['target'];
			$rel    = $target ? 'noreferrer noopener' : '';
			?>
			<li>
				<a href="<?php echo esc_url( $item['url'] ); ?>"<?php echo $target ? ' target="' . esc_attr( $target ) . '" rel="' . esc_attr( $rel ) . '"' : ''; ?>>
					<?php echo esc_html( $item['label'] ); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php
}

/**
 * Fallback menu for the primary header navigation.
 *
 * @return void
 */
function booqi_classic_primary_menu_fallback( $args = array() ) {
	booqi_classic_render_fallback_menu( 'site-nav__list', booqi_classic_get_primary_menu_items() );
}

/**
 * Fallback menu for the footer company navigation.
 *
 * @return void
 */
function booqi_classic_footer_company_menu_fallback( $args = array() ) {
	booqi_classic_render_fallback_menu( 'site-footer__menu', booqi_classic_get_footer_company_menu_items() );
}

/**
 * Fallback menu for the footer useful links navigation.
 *
 * @return void
 */
function booqi_classic_footer_useful_menu_fallback( $args = array() ) {
	booqi_classic_render_fallback_menu( 'site-footer__menu', booqi_classic_get_footer_useful_menu_items() );
}

/**
 * Fallback menu for the footer legal navigation.
 *
 * @return void
 */
function booqi_classic_footer_legal_menu_fallback( $args = array() ) {
	booqi_classic_render_fallback_menu( 'site-footer__legal', booqi_classic_get_footer_legal_menu_items() );
}

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
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' ) ? $theme->get( 'Version' ) : BOOQI_CLASSIC_VERSION;

	wp_enqueue_style( 'booqi-classic-main', get_template_directory_uri() . '/assets/css/main.css', array(), $version );
	wp_enqueue_script( 'booqi-classic-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'booqi_classic_enqueue_assets' );

/**
 * Returns a theme asset URI for a relative path inside the assets directory.
 *
 * @param string $path Relative asset path.
 * @return string
 */
function booqi_classic_get_asset_uri( $path ) {
	return trailingslashit( get_template_directory_uri() ) . ltrim( 'assets/' . $path, '/' );
}

/**
 * Returns a theme image asset URI for a relative path inside assets/images.
 *
 * @param string $path Relative image asset path.
 * @return string
 */
function booqi_classic_get_image_uri( $path ) {
	return booqi_classic_get_asset_uri( 'images/' . ltrim( $path, '/' ) );
}

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
		$classes       = empty( $atts['class'] ) ? '' : $atts['class'] . ' ';
		$atts['class'] = trim( $classes . 'site-nav__link' );
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'booqi_classic_nav_link_attributes', 10, 3 );

/**
 * Adds contextual body classes.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function booqi_classic_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-booqi-front-page';
	}

	if ( is_home() || is_archive() || is_singular( 'post' ) ) {
		$classes[] = 'is-booqi-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'booqi_classic_body_classes' );

/**
 * Gets the permalink for the first matching page slug, or a safe fallback URL.
 *
 * @param array|string $slugs         Candidate page slugs.
 * @param string       $fallback_path Fallback path relative to the site root.
 * @return string
 */
function booqi_classic_get_page_url( $slugs, $fallback_path = '/' ) {
	$slugs = (array) $slugs;

	foreach ( $slugs as $slug ) {
		$page = get_page_by_path( $slug );

		if ( $page instanceof WP_Post ) {
			return get_permalink( $page );
		}
	}

	return home_url( $fallback_path );
}

/**
 * Gets the marketing blog archive URL.
 *
 * @return string
 */
function booqi_classic_get_blog_url() {
	$page_for_posts = (int) get_option( 'page_for_posts' );

	if ( $page_for_posts ) {
		return get_permalink( $page_for_posts );
	}

	return booqi_classic_get_page_url( array( 'blog' ), '/blog' );
}

/**
 * Determines whether the current view matches a set of fallback menu targets.
 *
 * @param array|string $matches Match rules.
 * @return bool
 */
function booqi_classic_is_matching_view( $matches ) {
	$matches = (array) $matches;

	foreach ( $matches as $match ) {
		switch ( $match ) {
			case 'home':
				if ( is_front_page() ) {
					return true;
				}
				break;
			case 'blog':
				if ( is_home() || is_archive() || is_singular( 'post' ) || is_page( 'blog' ) ) {
					return true;
				}
				break;
			default:
				if ( is_page( $match ) ) {
					return true;
				}
		}
	}

	return false;
}

/**
 * Returns fallback items for the mirrored primary navigation.
 *
 * @return array<int, array<string, mixed>>
 */
function booqi_classic_get_primary_menu_items() {
	return array(
		array(
			'label' => __( 'Features', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'features' ), '/features' ),
			'match' => array( 'features' ),
		),
		array(
			'label' => __( 'Industries', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'industry' ), '/industry' ),
			'match' => array( 'industry', 'theme-parks', 'theme-parks-and-recreational-facilities', 'zoos', 'museums', 'musea', 'swimming-pools' ),
		),
		array(
			'label' => __( 'About Us', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'about-us' ), '/about-us' ),
			'match' => array( 'about-us' ),
		),
		array(
			'label' => __( 'Blog', 'booqi-classic' ),
			'url'   => booqi_classic_get_blog_url(),
			'match' => array( 'blog' ),
		),
		array(
			'label' => __( 'Contact', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'contact' ), '/contact' ),
			'match' => array( 'contact' ),
		),
	);
}

/**
 * Returns fallback items for the mirrored footer company links.
 *
 * @return array<int, array<string, mixed>>
 */
function booqi_classic_get_footer_company_menu_items() {
	return array(
		array(
			'label' => __( 'Features', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'features' ), '/features' ),
			'match' => array( 'features' ),
		),
		array(
			'label' => __( 'Pricing', 'booqi-classic' ),
			'url'   => home_url( '/#pricing' ),
			'match' => array( 'home' ),
		),
		array(
			'label' => __( 'Industries', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'industry' ), '/industry' ),
			'match' => array( 'industry', 'theme-parks', 'theme-parks-and-recreational-facilities', 'zoos', 'museums', 'musea', 'swimming-pools' ),
		),
		array(
			'label' => __( 'About Us', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'about-us' ), '/about-us' ),
			'match' => array( 'about-us' ),
		),
		array(
			'label' => __( 'Blog', 'booqi-classic' ),
			'url'   => booqi_classic_get_blog_url(),
			'match' => array( 'blog' ),
		),
	);
}

/**
 * Returns fallback items for the mirrored footer utility links.
 *
 * @return array<int, array<string, mixed>>
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
 * @return array<int, array<string, mixed>>
 */
function booqi_classic_get_footer_legal_menu_items() {
	return array(
		array(
			'label' => __( 'Privacy & Cookie Policy', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'privacy-cookie-policy' ), '/privacy-cookie-policy' ),
		),
		array(
			'label' => __( 'General Terms & Conditions', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'terms-and-conditions' ), '/terms-and-conditions' ),
			'match' => array( 'terms-and-conditions' ),
		),
	);
}

/**
 * Builds shared CTA actions for marketing sections.
 *
 * @return array<int, array<string, string>>
 */
function booqi_classic_get_primary_cta_actions() {
	return array(
		array(
			'label' => __( 'Book a Demo', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' ),
		),
		array(
			'label' => __( 'Contact Sales', 'booqi-classic' ),
			'url'   => booqi_classic_get_page_url( array( 'contact' ), '/contact' ),
			'class' => 'button--ghost',
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
			$target   = empty( $item['target'] ) ? '' : $item['target'];
			$rel      = $target ? 'noreferrer noopener' : '';
			$li_class = '';

			if ( ! empty( $item['match'] ) && booqi_classic_is_matching_view( $item['match'] ) ) {
				$li_class = ' class="current_page_item"';
			}
			?>
			<li<?php echo $li_class; ?>>
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

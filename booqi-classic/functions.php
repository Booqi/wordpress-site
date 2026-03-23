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
 * Returns the public-facing brand name, falling back to a translatable default.
 *
 * @return string
 */
function booqi_classic_get_brand_name() {
	$brand_name = get_bloginfo( 'name' );

	if ( is_string( $brand_name ) && '' !== trim( $brand_name ) ) {
		return $brand_name;
	}

	return __( 'Booqi.me', 'booqi-classic' );
}

/**
 * Returns future-friendly homepage content arrays used by the front-page template.
 *
 * Keeping the copy in one place makes it easier to replace later with translatable
 * fields, options, or Polylang-managed values without restructuring templates.
 *
 * @return array<string, array<int, array<string, mixed>>>
 */
function booqi_classic_get_homepage_content() {
	return array(
		'hero_stats' => array(
			array(
				'label' => __( 'Revenue', 'booqi-classic' ),
				'value' => __( '€ 12,480', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Sales Today', 'booqi-classic' ),
				'value' => __( '184 orders', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Tickets', 'booqi-classic' ),
				'value' => __( '2,416', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Subscriptions', 'booqi-classic' ),
				'value' => __( '318 active', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Upsells', 'booqi-classic' ),
				'value' => __( '34 today', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Vouchers', 'booqi-classic' ),
				'value' => __( '96 redeemed', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Visitors', 'booqi-classic' ),
				'value' => __( '1,284 expected', 'booqi-classic' ),
			),
			array(
				'label' => __( 'Check-ins', 'booqi-classic' ),
				'value' => __( '742 scanned', 'booqi-classic' ),
			),
		),
		'client_logos' => array(
			array(
				'name' => 'Walibi Holland',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-walibi-holland.svg' ),
			),
			array(
				'name' => 'DierenPark Amersfoort',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-dierenpark-amersfoort.svg' ),
			),
			array(
				'name' => 'BillyBird',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-billybird.svg' ),
			),
			array(
				'name' => 'Autoworld',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-autoworld.svg' ),
			),
			array(
				'name' => 'Plopsa',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-plopsa.svg' ),
			),
			array(
				'name' => 'Dierenrijk',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-dierenrijk.svg' ),
			),
			array(
				'name' => 'Slagharen',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-slagharen.svg' ),
			),
			array(
				'name' => 'Attractiepark Toverland',
				'src'  => booqi_classic_get_image_uri( 'logos/logo-toverland.svg' ),
			),
		),
		'feature_spotlight_items' => array(
			array(
				'number' => '01.',
				'title'  => __( 'Easily sell subscriptions and year passes to your customers', 'booqi-classic' ),
			),
			array(
				'number' => '02.',
				'title'  => __( 'Integrate your hardware with ease', 'booqi-classic' ),
			),
			array(
				'number' => '03.',
				'title'  => __( 'Add dynamic pricing to enhance sales', 'booqi-classic' ),
			),
			array(
				'number' => '04.',
				'title'  => __( 'Connect with your favourite tools', 'booqi-classic' ),
			),
		),
		'industry_cards' => array(
			array(
				'title'       => __( 'Theme Parks', 'booqi-classic' ),
				'description' => __( 'Keep every gate, upsell, and season-pass moment connected in one ticketing flow.', 'booqi-classic' ),
				'url'         => booqi_classic_get_page_url( array( 'theme-parks', 'theme-parks-and-recreational-facilities' ), '/theme-parks' ),
				'accent'      => 'theme-park',
				'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-theme-parks.svg' ),
			),
			array(
				'title'       => __( 'Zoo\'s', 'booqi-classic' ),
				'description' => __( 'Handle day tickets, member access, and flexible visitor planning for animal parks.', 'booqi-classic' ),
				'url'         => booqi_classic_get_page_url( array( 'zoos' ), '/zoos' ),
				'accent'      => 'zoo',
				'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-zoos.svg' ),
			),
			array(
				'title'       => __( 'Musea', 'booqi-classic' ),
				'description' => __( 'Launch exhibitions, timed entry, and cultural events with clear visitor control.', 'booqi-classic' ),
				'url'         => booqi_classic_get_page_url( array( 'museums', 'musea' ), '/museums' ),
				'accent'      => 'museum',
				'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-museums.svg' ),
			),
			array(
				'title'       => __( 'Swimming Pools', 'booqi-classic' ),
				'description' => __( 'Balance busy swim sessions, lessons, and recurring bookings from one dashboard.', 'booqi-classic' ),
				'url'         => booqi_classic_get_page_url( array( 'swimming-pools' ), '/swimming-pools' ),
				'accent'      => 'pool',
				'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-swimming-pools.svg' ),
			),
		),
		'proof_cards' => array(
			array(
				'title'       => __( 'Rigid cloud infrastructure', 'booqi-classic' ),
				'description' => __( 'Your data is securely stored in datacenters in the Netherlands and Germany. Our server architecture has resulted in at least 99.9% uptime over the last months.', 'booqi-classic' ),
				'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-cloud-infrastructure.svg' ),
			),
			array(
				'title'       => __( 'Continuous improvement', 'booqi-classic' ),
				'description' => __( 'Our software solution is always evolving. We strive to give you the tools needed to quickly adapt to changes in the market.', 'booqi-classic' ),
				'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-continuous-improvement.svg' ),
			),
			array(
				'title'       => __( 'Easy to use Dashboard', 'booqi-classic' ),
				'description' => __( 'With our software, you have full control over your sales offers. Decide for yourself which products you want to offer and customise your range entirely according to your wishes.', 'booqi-classic' ),
				'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-dashboard-control.svg' ),
			),
			array(
				'title'       => __( 'Onboarding, training and support', 'booqi-classic' ),
				'description' => __( 'Our team is ready! Our support desk is available seven days a week to assist you with any inquiries or issues you may encounter. Additionally, we provide a comprehensive support library filled with self-help articles for your convenience.', 'booqi-classic' ),
				'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-support-training.svg' ),
			),
		),
		'pricing_tiers' => array(
			array(
				'name'         => __( 'Starter', 'booqi-classic' ),
				'eyebrow'      => __( 'Free', 'booqi-classic' ),
				'price'        => __( 'Free for €1.000 monthly turnover', 'booqi-classic' ),
				'highlight'    => false,
				'button_label' => __( 'Create Free Account', 'booqi-classic' ),
				'button_url'   => booqi_classic_get_page_url( array( 'pricing' ), '/pricing' ),
				'features'     => array(
					__( 'Start selling online tickets right away', 'booqi-classic' ),
					__( 'Access to essential features', 'booqi-classic' ),
					__( 'No offline sales', 'booqi-classic' ),
					__( 'No onboarding package', 'booqi-classic' ),
					__( 'No support', 'booqi-classic' ),
				),
			),
			array(
				'name'         => __( 'Pro', 'booqi-classic' ),
				'eyebrow'      => __( 'Get all features', 'booqi-classic' ),
				'price'        => __( 'Request your price', 'booqi-classic' ),
				'highlight'    => true,
				'button_label' => __( 'Request Demo', 'booqi-classic' ),
				'button_url'   => booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' ),
				'features'     => array(
					__( 'All platform features', 'booqi-classic' ),
					__( 'Access to essential features', 'booqi-classic' ),
					__( 'Connect your hardware', 'booqi-classic' ),
					__( 'Training and onboarding package', 'booqi-classic' ),
					__( 'Support over phone, chat and e-mail', 'booqi-classic' ),
				),
			),
		),
		'faq_items' => array(
			array(
				'question' => __( 'How long does it take to set up my ticket shop with Booqi.me?', 'booqi-classic' ),
				'answer'   => __( 'We provide a fully functional ticket shop immediately. The setup process, guided by our team, can have you live within a week, depending on your pace and the number of products.', 'booqi-classic' ),
				'open'     => true,
			),
			array(
				'question' => __( 'Can I test the platform before committing?', 'booqi-classic' ),
				'answer'   => __( 'Yes. Booqi’s Starter plan lets you begin with the core online ticketing flow before deciding when you are ready for the broader Pro setup.', 'booqi-classic' ),
			),
			array(
				'question' => __( 'What are the costs associated with Booqi.me?', 'booqi-classic' ),
				'answer'   => __( 'Starter is free for up to €1.000 monthly turnover, while Pro pricing is tailored to your venue setup, hardware needs, and support requirements.', 'booqi-classic' ),
			),
			array(
				'question' => __( 'Do you offer customer support?', 'booqi-classic' ),
				'answer'   => __( 'Yes. Booqi provides onboarding, training, and ongoing support, with the Pro plan covering phone, chat, and e-mail support.', 'booqi-classic' ),
			),
			array(
				'question' => __( 'Is the system user-friendly?', 'booqi-classic' ),
				'answer'   => __( 'The platform is built so teams can manage products, pricing, and visitor flows from one easy-to-use dashboard without technical complexity.', 'booqi-classic' ),
			),
			array(
				'question' => __( 'Can Booqi.me integrate with my existing systems?', 'booqi-classic' ),
				'answer'   => __( 'Yes. Booqi supports hardware connections and favourite-tool integrations so your ticketing setup fits your current operation.', 'booqi-classic' ),
			),
		),
	);
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
 * Gets the demo request flow URL.
 *
 * @return string
 */
function booqi_classic_get_demo_url() {
	return booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' );
}

/**
 * Gets the free-account signup flow URL.
 *
 * @return string
 */
function booqi_classic_get_create_account_url() {
	return booqi_classic_get_page_url( array( 'create-account' ), '/create-account' );
}

/**
 * Gets the features page URL.
 *
 * @return string
 */
function booqi_classic_get_features_url() {
	return booqi_classic_get_page_url( array( 'features' ), '/features' );
}

/**
 * Gets the industries overview URL.
 *
 * @return string
 */
function booqi_classic_get_industry_url() {
	return booqi_classic_get_page_url( array( 'industry' ), '/industry' );
}

/**
 * Gets the contact page URL.
 *
 * @return string
 */
function booqi_classic_get_contact_url() {
	return booqi_classic_get_page_url( array( 'contact' ), '/contact' );
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
			'url'   => booqi_classic_get_features_url(),
			'match' => array( 'features' ),
		),
		array(
			'label' => __( 'Industries', 'booqi-classic' ),
			'url'   => booqi_classic_get_industry_url(),
			'match' => array( 'industry', 'theme-parks', 'theme-parks-and-recreational-facilities', 'zoos', 'museums', 'musea', 'swimming-pools' ),
		),
		array(
			'label' => __( 'Blog', 'booqi-classic' ),
			'url'   => booqi_classic_get_blog_url(),
			'match' => array( 'blog' ),
		),
		array(
			'label' => __( 'Contact', 'booqi-classic' ),
			'url'   => booqi_classic_get_contact_url(),
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
			'url'   => booqi_classic_get_features_url(),
			'match' => array( 'features' ),
		),
		array(
			'label' => __( 'Pricing', 'booqi-classic' ),
			'url'   => home_url( '/#pricing' ),
			'match' => array( 'home' ),
		),
		array(
			'label' => __( 'FAQ', 'booqi-classic' ),
			'url'   => home_url( '/#faq' ),
			'match' => array( 'home' ),
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
			'url'    => 'https://support.booqi.me/',
			'target' => '_blank',
		),
		array(
			'label'  => __( 'Helpcentrum', 'booqi-classic' ),
			'url'    => 'https://support.booqi.me/',
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
			'label' => __( 'Request demo', 'booqi-classic' ),
			'url'   => booqi_classic_get_demo_url(),
		),
		array(
			'label' => __( 'Contact', 'booqi-classic' ),
			'url'   => booqi_classic_get_contact_url(),
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

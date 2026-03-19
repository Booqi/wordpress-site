<?php
/**
 * The site header.
 *
 * @package BooqiClassic
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$booqi_header_links = array(
	array(
		'label' => __( 'Features', 'booqi-classic' ),
		'url'   => home_url( '/features' ),
	),
	array(
		'label' => __( 'Industries', 'booqi-classic' ),
		'url'   => home_url( '/industry' ),
	),
	array(
		'label' => __( 'About us', 'booqi-classic' ),
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
?>
<a class="screen-reader-text skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'booqi-classic' ); ?></a>
<div class="site-shell">
	<header class="site-header">
		<div class="site-container">
			<div class="site-header__inner">
				<div class="site-branding">
					<a class="site-branding__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<span class="site-branding__mark" aria-hidden="true">
							<?php if ( has_custom_logo() ) : ?>
								<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'site-branding__logo-image' ) ); ?>
							<?php else : ?>
								<span class="site-branding__glyph"></span>
							<?php endif; ?>
						</span>
						<span class="site-branding__wordmark site-branding__wordmark--logo">
							<span class="site-branding__title">Booqi.me</span>
						</span>
					</a>
				</div>

				<button class="site-header__toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
					<span class="site-header__toggle-bar" aria-hidden="true"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'booqi-classic' ); ?></span>
				</button>

				<nav id="site-navigation" class="site-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'booqi-classic' ); ?>">
					<ul class="site-nav__list">
						<?php foreach ( $booqi_header_links as $booqi_header_link ) : ?>
							<li>
								<a class="site-nav__link" href="<?php echo esc_url( $booqi_header_link['url'] ); ?>">
									<?php echo esc_html( $booqi_header_link['label'] ); ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
					<div class="site-nav__actions">
						<a class="button button--small" href="<?php echo esc_url( home_url( '/book-demo' ) ); ?>"><?php esc_html_e( 'Request Demo', 'booqi-classic' ); ?></a>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<main id="main-content" class="site-main">

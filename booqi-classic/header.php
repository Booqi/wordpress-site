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
<a class="screen-reader-text skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'booqi-classic' ); ?></a>
<div class="site-shell">
	<header class="site-header">
		<div class="site-container">
			<div class="site-header__inner">
				<div class="site-branding">
					<a class="site-branding__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<?php if ( has_custom_logo() ) : ?>
							<span class="site-branding__mark" aria-hidden="true">
								<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'site-branding__logo-image' ) ); ?>
							</span>
							<span class="site-branding__wordmark site-branding__wordmark--logo">
								<span class="site-branding__title">Booqi.me</span>
							</span>
						<?php else : ?>
							<img class="site-branding__wordmark-image" src="<?php echo esc_url( booqi_classic_get_image_uri( 'brand/booqi-wordmark.svg' ) ); ?>" alt="<?php esc_attr_e( 'Booqi.me', 'booqi-classic' ); ?>">
						<?php endif; ?>
					</a>
				</div>

				<button class="site-header__toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
					<span class="site-header__toggle-bar" aria-hidden="true"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'booqi-classic' ); ?></span>
				</button>

				<nav id="site-navigation" class="site-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'booqi-classic' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container'      => false,
							'menu_class'     => 'site-nav__list',
							'fallback_cb'    => 'booqi_classic_primary_menu_fallback',
						)
					);
					?>
					<div class="site-nav__actions">
						<a class="button button--small" href="<?php echo esc_url( booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' ) ); ?>"><?php esc_html_e( 'Book a Demo', 'booqi-classic' ); ?></a>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<main id="main-content" class="site-main">

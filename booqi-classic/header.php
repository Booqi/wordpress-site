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
		<div class="site-header__inner site-container">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-branding__logo"><?php the_custom_logo(); ?></div>
				<?php endif; ?>
				<a class="site-branding__wordmark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="site-branding__eyebrow"><?php esc_html_e( 'Booqi', 'booqi-classic' ); ?></span>
					<span class="site-branding__title"><?php bloginfo( 'name' ); ?></span>
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
				<a class="button button--small" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Book demo', 'booqi-classic' ); ?></a>
			</nav>
		</div>
	</header>
	<main id="main-content" class="site-main">

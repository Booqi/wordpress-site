<?php
/**
 * Header template.
 *
 * @package booqi-v2
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container site-header__inner">
		<a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Homepage', 'booqi-v2'); ?>">
			<span class="site-branding__name"><?php bloginfo('name'); ?></span>
		</a>

		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
			<span class="screen-reader-text"><?php esc_html_e('Toggle navigation', 'booqi-v2'); ?></span>
			<span aria-hidden="true">☰</span>
		</button>

		<div class="site-header__nav-shell">
			<nav id="site-navigation" class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'booqi-v2'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'menu primary-menu',
						'container'      => false,
						'depth'          => 1,
						'fallback_cb'    => 'booqi_v2_primary_fallback_menu',
					)
				);
				?>
			</nav>
		</div>
	</div>
</header>
<main id="content" class="site-main">

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
	<div class="container header-inner">
		<a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Homepage', 'booqi-v2'); ?>">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-booqi.svg'); ?>" alt="Booqi.me" width="130" height="32">
		</a>
		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation" aria-label="<?php esc_attr_e('Toggle navigation', 'booqi-v2'); ?>">
			<span class="menu-toggle-box" aria-hidden="true">
				<span class="menu-toggle-line"></span>
				<span class="menu-toggle-line"></span>
			</span>
			<span class="screen-reader-text"><?php esc_html_e('Menu', 'booqi-v2'); ?></span>
		</button>
		<div class="primary-nav-shell">
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
			<div class="header-actions">
				<a class="button button-outline" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request Demo', 'booqi-v2'); ?></a>
			</div>
		</div>
	</div>
</header>
<main id="content" class="site-main">

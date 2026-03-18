<?php
/**
 * Header template.
 *
 * @package booqi-classic
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
		<a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Homepage', 'booqi-classic'); ?>">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-booqi.svg'); ?>" alt="Booqi.me" width="130" height="32">
		</a>
		<button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu"><?php esc_html_e('Menu', 'booqi-classic'); ?></button>
		<nav class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'booqi-classic'); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => 'booqi_classic_primary_fallback_menu',
				)
			);
			?>
		</nav>
		<div class="header-actions">
			<a class="button button-outline" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request Demo', 'booqi-classic'); ?></a>
		</div>
	</div>
</header>
<main id="content" class="site-main">

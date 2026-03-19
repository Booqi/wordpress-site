<?php
/**
 * Front page template.
 *
 * @package booqi-v2
 */

get_header();
?>
<section class="hero-shell">
	<div class="container hero-shell__inner">
		<p class="eyebrow"><?php esc_html_e('Theme foundation', 'booqi-v2'); ?></p>
		<h1><?php bloginfo('name'); ?></h1>
		<p class="hero-shell__lead"><?php esc_html_e('This sparse homepage template is ready for the Booqi redesign work: shell, navigation, footer, and design tokens only.', 'booqi-v2'); ?></p>
		<div class="hero-shell__actions">
			<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request demo', 'booqi-v2'); ?></a>
			<a class="button button--ghost" href="<?php echo esc_url(home_url('/features/')); ?>"><?php esc_html_e('View features', 'booqi-v2'); ?></a>
		</div>
	</div>
</section>
<?php
get_footer();

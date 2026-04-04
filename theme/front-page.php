<?php
/**
 * Front page template.
 *
 * @package WPSite2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main class="wp-site2-main">
	<div class="wp-site2-container wp-site2-flow">
		<section class="wp-site2-hero">
			<p class="wp-site2-eyebrow"><?php esc_html_e( 'Home', 'wp-site2' ); ?></p>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<p><?php bloginfo( 'description' ); ?></p>
		</section>

		<section>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				}
			}
			?>
		</section>
	</div>
</main>
<?php
get_footer();

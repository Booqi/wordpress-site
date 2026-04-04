<?php
/**
 * About Us page template.
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
		<header class="wp-site2-page-header">
			<p class="wp-site2-eyebrow"><?php esc_html_e( 'Company', 'wp-site2' ); ?></p>
			<h1><?php esc_html_e( 'About Us', 'wp-site2' ); ?></h1>
		</header>
		<?php
		while ( have_posts() ) {
			the_post();
			the_content();
		}
		?>
	</div>
</main>
<?php
get_footer();

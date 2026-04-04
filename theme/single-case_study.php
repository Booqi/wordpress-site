<?php
/**
 * Case Study single template.
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
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'wp-site2-entry' ); ?>>
				<p class="wp-site2-eyebrow"><?php esc_html_e( 'Case Study', 'wp-site2' ); ?></p>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
</main>
<?php
get_footer();

<?php
/**
 * Page template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section">
	<div class="site-container site-reading-width">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card page-card' ); ?>>
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'Page', 'booqi-classic' ); ?></p>
					<h1 class="page-card__title"><?php the_title(); ?></h1>
				</header>
				<div class="page-card__content entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();

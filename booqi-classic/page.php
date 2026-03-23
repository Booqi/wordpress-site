<?php
/**
 * Page template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section" aria-labelledby="page-title">
	<div class="site-container site-reading-width">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card page-card' ); ?>>
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'Page', 'booqi-classic' ); ?></p>
					<h1 id="page-title" class="page-card__title"><?php the_title(); ?></h1>
				</header>
				<div class="page-card__content entry-content">
					<?php if ( trim( get_the_content() ) ) : ?>
						<?php the_content(); ?>
					<?php else : ?>
						<p><?php esc_html_e( 'Add page content in WordPress and it will render here using the shared Booqi content styling.', 'booqi-classic' ); ?></p>
					<?php endif; ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();

<?php
/**
 * Default template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section">
	<div class="site-container site-reading-width">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card entry-card' ); ?>>
					<header class="entry-card__header">
						<p class="section-tag"><?php esc_html_e( 'Latest entry', 'booqi-classic' ); ?></p>
						<h1 class="entry-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</header>
					<div class="entry-card__content entry-content">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<section class="content-card entry-card">
				<p class="section-tag"><?php esc_html_e( 'No content yet', 'booqi-classic' ); ?></p>
				<h1 class="entry-card__title"><?php esc_html_e( 'Your Booqi pages will render here', 'booqi-classic' ); ?></h1>
				<p><?php esc_html_e( 'Create pages and assign templates as the site buildout continues.', 'booqi-classic' ); ?></p>
			</section>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

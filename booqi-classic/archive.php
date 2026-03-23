<?php
/**
 * Archive template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--blog" aria-labelledby="archive-page-title">
	<div class="site-container site-reading-width">
		<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Archive', 'booqi-classic' ), 'accent' => true ) ); ?>
		<h1 id="archive-page-title" class="hero-title marketing-hero__title marketing-hero__title--compact"><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<div class="hero-text marketing-hero__text">', '</div>' ); ?>
	</div>
</section>

<section class="page-section page-section--light blog-archive-section" aria-label="<?php esc_attr_e( 'Archive posts', 'booqi-classic' ); ?>">
	<div class="site-container">
		<?php if ( have_posts() ) : ?>
			<div class="blog-archive-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/components/post-card' ); ?>
				<?php endwhile; ?>
			</div>
			<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Archive pagination', 'booqi-classic' ); ?>">
				<?php the_posts_pagination(); ?>
			</nav>
		<?php else : ?>
			<div class="content-card page-card page-card--empty">
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'No entries', 'booqi-classic' ); ?></p>
					<h2 class="page-card__title"><?php esc_html_e( 'There are no posts in this archive yet', 'booqi-classic' ); ?></h2>
				</header>
				<div class="page-card__content entry-content">
					<p><?php esc_html_e( 'Create or publish posts that match this archive to automatically fill the grid.', 'booqi-classic' ); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

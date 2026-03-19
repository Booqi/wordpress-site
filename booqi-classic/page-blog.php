<?php
/**
 * Blog landing page template.
 *
 * @package BooqiClassic
 */

$recent_posts = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 6,
		'ignore_sticky_posts' => true,
	)
);

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--blog">
	<div class="site-container">
		<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Blog', 'booqi-classic' ), 'accent' => true ) ); ?>
		<h1 class="hero-title marketing-hero__title"><?php esc_html_e( 'Insights for leisure ticketing and venue operations', 'booqi-classic' ); ?></h1>
		<p class="hero-text marketing-hero__text"><?php esc_html_e( 'Use this page as the primary marketing-facing blog archive landing. It highlights recent posts in a cleaner editorial layout while still supporting WordPress archives and single posts separately.', 'booqi-classic' ); ?></p>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container">
		<?php if ( $recent_posts->have_posts() ) : ?>
			<div class="blog-archive-grid">
				<?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card post-card' ); ?>>
						<a class="post-card__inner" href="<?php the_permalink(); ?>">
							<p class="post-meta"><?php echo esc_html( get_the_date() ); ?></p>
							<h2 class="post-card__title"><?php the_title(); ?></h2>
							<p class="post-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
							<span class="post-card__link"><?php esc_html_e( 'Read article', 'booqi-classic' ); ?></span>
						</a>
					</article>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<div class="content-card page-card">
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'No articles yet', 'booqi-classic' ); ?></p>
					<h2 class="page-card__title"><?php esc_html_e( 'Publish your first Booqi.me story', 'booqi-classic' ); ?></h2>
				</header>
				<div class="page-card__content entry-content">
					<p><?php esc_html_e( 'Once posts are available they will appear here automatically in the custom archive grid.', 'booqi-classic' ); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
wp_reset_postdata();
get_footer();

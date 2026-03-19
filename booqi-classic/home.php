<?php
/**
 * Posts index template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--blog">
	<div class="site-container">
		<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Blog archive', 'booqi-classic' ), 'accent' => true ) ); ?>
		<h1 class="hero-title marketing-hero__title"><?php echo esc_html( get_the_title( (int) get_option( 'page_for_posts' ) ) ?: __( 'Blog', 'booqi-classic' ) ); ?></h1>
		<p class="hero-text marketing-hero__text"><?php esc_html_e( 'The WordPress posts index now uses dedicated editorial styling for Booqi.me instead of the generic fallback template.', 'booqi-classic' ); ?></p>
	</div>
</section>

<section class="page-section page-section--light blog-archive-section">
	<div class="site-container">
		<?php if ( have_posts() ) : ?>
			<div class="blog-archive-grid">
				<?php while ( have_posts() ) : the_post(); ?>
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
			<div class="blog-pagination">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<div class="content-card page-card">
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'No posts yet', 'booqi-classic' ); ?></p>
					<h2 class="page-card__title"><?php esc_html_e( 'Publish your first article to populate the archive', 'booqi-classic' ); ?></h2>
				</header>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

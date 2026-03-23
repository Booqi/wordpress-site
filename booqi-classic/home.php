<?php
/**
 * Posts index template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--blog" aria-labelledby="posts-page-title">
	<div class="site-container">
		<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Blog archive', 'booqi-classic' ), 'accent' => true ) ); ?>
		<h1 id="posts-page-title" class="hero-title marketing-hero__title"><?php echo esc_html( get_the_title( (int) get_option( 'page_for_posts' ) ) ?: __( 'Blog', 'booqi-classic' ) ); ?></h1>
		<p class="hero-text marketing-hero__text"><?php esc_html_e( 'Browse the latest Booqi articles, product stories, and ticketing insights in the dedicated WordPress posts index.', 'booqi-classic' ); ?></p>
	</div>
</section>

<section class="page-section page-section--light blog-archive-section" aria-label="<?php esc_attr_e( 'Blog posts', 'booqi-classic' ); ?>">
	<div class="site-container">
		<?php if ( have_posts() ) : ?>
			<div class="blog-archive-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/components/post-card' ); ?>
				<?php endwhile; ?>
			</div>
			<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Blog pagination', 'booqi-classic' ); ?>">
				<?php the_posts_pagination(); ?>
			</nav>
		<?php else : ?>
			<div class="content-card page-card page-card--empty">
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'No posts yet', 'booqi-classic' ); ?></p>
					<h2 class="page-card__title"><?php esc_html_e( 'Publish your first article to populate the archive', 'booqi-classic' ); ?></h2>
				</header>
				<div class="page-card__content entry-content">
					<p><?php esc_html_e( 'Once the editorial team adds posts, this archive page will automatically populate with clean cards and pagination.', 'booqi-classic' ); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

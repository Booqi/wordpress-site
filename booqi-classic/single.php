<?php
/**
 * Single post template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--blog" aria-labelledby="single-post-title">
	<div class="site-container site-reading-width">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-article' ); ?>>
				<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Article', 'booqi-classic' ), 'accent' => true ) ); ?>
				<h1 id="single-post-title" class="hero-title marketing-hero__title marketing-hero__title--compact"><?php the_title(); ?></h1>
				<p class="post-meta post-meta--single"><?php echo esc_html( get_the_date() ); ?></p>
				<?php if ( has_excerpt() ) : ?>
					<p class="hero-text marketing-hero__text"><?php echo esc_html( get_the_excerpt() ); ?></p>
				<?php endif; ?>

				<div class="content-card page-card single-post-card">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="single-post-card__media">
							<?php the_post_thumbnail( 'large', array( 'class' => 'single-post-card__image' ) ); ?>
						</div>
					<?php endif; ?>
					<div class="page-card__content entry-content single-post-content">
						<?php if ( trim( get_the_content() ) ) : ?>
							<?php the_content(); ?>
						<?php else : ?>
							<p><?php esc_html_e( 'Add content to this post in WordPress to replace this fallback article message.', 'booqi-classic' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php
$related_posts = get_posts(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 3,
		'post__not_in'        => array( get_queried_object_id() ),
		'ignore_sticky_posts' => true,
	)
);

if ( ! empty( $related_posts ) ) :
	?>
	<section class="page-section page-section--light blog-archive-section" aria-labelledby="related-posts-title">
		<div class="site-container">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'More from the blog', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'Keep reading', 'booqi-classic' ), 'heading_id' => 'related-posts-title' ) ); ?>
			<div class="blog-archive-grid blog-archive-grid--compact">
				<?php foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'template-parts/components/post-card', null, array( 'show_link' => false ) ); ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php
get_footer();

<?php
/**
 * Single post template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--blog">
	<div class="site-container site-reading-width">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-article' ); ?>>
				<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Article', 'booqi-classic' ), 'accent' => true ) ); ?>
				<h1 class="hero-title marketing-hero__title marketing-hero__title--compact"><?php the_title(); ?></h1>
				<p class="post-meta post-meta--single"><?php echo esc_html( get_the_date() ); ?></p>
				<div class="content-card page-card single-post-card">
					<div class="page-card__content entry-content single-post-content">
						<?php the_content(); ?>
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
	<section class="page-section page-section--light blog-archive-section">
		<div class="site-container">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'More from the blog', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'Keep reading', 'booqi-classic' ) ) ); ?>
			<div class="blog-archive-grid blog-archive-grid--compact">
				<?php foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card post-card' ); ?>>
						<a class="post-card__inner" href="<?php the_permalink(); ?>">
							<p class="post-meta"><?php echo esc_html( get_the_date() ); ?></p>
							<h2 class="post-card__title"><?php the_title(); ?></h2>
							<p class="post-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
						</a>
					</article>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php
get_footer();

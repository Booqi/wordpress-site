<?php
/**
 * Shared archive overview layout for Blog and Case Studies.
 *
 * @package WPSite2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$eyebrow = isset( $args['eyebrow'] ) ? (string) $args['eyebrow'] : '';
$title   = isset( $args['title'] ) ? (string) $args['title'] : get_the_archive_title();
?>
<main class="wp-site2-main">
	<div class="wp-site2-container wp-site2-flow">
		<header class="wp-site2-page-header">
			<?php if ( $eyebrow ) : ?>
				<p class="wp-site2-eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
			<?php endif; ?>
			<h1><?php echo esc_html( $title ); ?></h1>
			<?php the_archive_description( '<p class="wp-site2-archive-description">', '</p>' ); ?>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="wp-site2-grid wp-site2-grid--2">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'wp-site2-card' ); ?>>
						<h2 class="wp-site2-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="wp-site2-card__excerpt"><?php the_excerpt(); ?></div>
					</article>
				<?php endwhile; ?>
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</div>
</main>

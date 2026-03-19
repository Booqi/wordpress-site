<?php
/**
 * Main template file.
 *
 * @package booqi-v2
 */

get_header();
?>
<section class="content-shell">
	<div class="container content-shell__inner">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class('entry-shell'); ?>>
					<h1 class="entry-shell__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e('No content found.', 'booqi-v2'); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

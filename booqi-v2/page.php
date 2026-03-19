<?php
/**
 * Page template.
 *
 * @package booqi-v2
 */

get_header();
?>
<section class="content-shell">
	<div class="container content-shell__inner">
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class('entry-shell'); ?>>
				<h1 class="entry-shell__title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();

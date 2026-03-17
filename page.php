<?php
/**
 * Page template.
 *
 * @package booqi-classic
 */

get_header();
?>
<section class="section">
	<div class="container content-narrow">
		<?php
		while (have_posts()) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();

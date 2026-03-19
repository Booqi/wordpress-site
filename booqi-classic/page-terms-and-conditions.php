<?php
/**
 * Terms and conditions page template.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--legal">
	<div class="site-container site-reading-width">
		<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Legal', 'booqi-classic' ), 'accent' => true ) ); ?>
		<h1 class="hero-title marketing-hero__title marketing-hero__title--compact"><?php esc_html_e( 'General Terms and Conditions', 'booqi-classic' ); ?></h1>
		<p class="hero-text marketing-hero__text"><?php esc_html_e( 'This page provides a dedicated legal layout for the Booqi.me terms instead of relying on the generic page template. Add or edit the formal legal copy from WordPress and it will inherit this readable structure.', 'booqi-classic' ); ?></p>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container site-reading-width">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card page-card legal-content' ); ?>>
				<header class="page-card__header">
					<p class="section-tag"><?php esc_html_e( 'Terms and conditions', 'booqi-classic' ); ?></p>
					<h2 class="page-card__title"><?php the_title(); ?></h2>
				</header>
				<div class="page-card__content entry-content legal-content__body">
					<?php if ( trim( get_the_content() ) ) : ?>
						<?php the_content(); ?>
					<?php else : ?>
						<p><?php esc_html_e( 'Add the final approved terms content in the WordPress editor and it will render here with improved spacing and typography.', 'booqi-classic' ); ?></p>
					<?php endif; ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();

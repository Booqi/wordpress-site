<?php
/**
 * Homepage logo strip section.
 *
 * @package BooqiClassic
 */

$logos = $args['logos'] ?? array();
?>
<section class="page-section homepage-logo-strip">
	<div class="site-container">
		<p class="homepage-logo-strip__title"><?php esc_html_e( 'Used by the world’s most incredible teams:', 'booqi-classic' ); ?></p>
		<ul class="homepage-logo-strip__list" aria-label="<?php esc_attr_e( 'Selected Booqi customers', 'booqi-classic' ); ?>">
			<?php foreach ( $logos as $logo ) : ?>
				<li class="homepage-logo-strip__item">
					<?php /* translators: %s: customer or partner brand name. */ ?>
					<img class="homepage-logo-strip__image" src="<?php echo esc_url( $logo['src'] ); ?>" alt="<?php echo esc_attr( sprintf( __( '%s logo', 'booqi-classic' ), $logo['name'] ) ); ?>" loading="lazy">
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

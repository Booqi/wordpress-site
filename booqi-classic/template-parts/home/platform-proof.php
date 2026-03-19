<?php
/**
 * Homepage platform proof section.
 *
 * @package BooqiClassic
 */

$cards = $args['cards'] ?? array();
?>
<section class="page-section homepage-proof">
	<div class="site-container stack-lg">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'container_class' => 'site-reading-width homepage-proof__heading',
				'alignment'       => 'centered',
				'badge'           => __( 'Why Booqi', 'booqi-classic' ),
				'badge_accent'    => true,
				'title'           => __( 'Focus on your sales and managing your customers and let us do the rest:', 'booqi-classic' ),
			)
		);
		?>
		<div class="homepage-proof__spotlight surface-panel">
			<div class="homepage-proof__spotlight-copy">
				<?php
				get_template_part(
					'template-parts/components/badge',
					null,
					array(
						'text'   => __( 'Platform proof', 'booqi-classic' ),
						'accent' => true,
					)
				);
				?>
				<h3><?php esc_html_e( 'Enhance every aspect of your business sales, ensuring satisfaction, loyalty, and unparalleled service. Thanks to AI of course.', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'Keep visitor demand, operational control, and customer relationships connected in one premium ticketing environment tailored to leisure venues.', 'booqi-classic' ); ?></p>
				<a class="button" href="<?php echo esc_url( booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' ) ); ?>"><?php esc_html_e( 'Request demo', 'booqi-classic' ); ?></a>
			</div>
			<div class="homepage-proof__spotlight-visual" aria-hidden="true">
				<div class="homepage-proof__spotlight-orbit homepage-proof__spotlight-orbit--one"></div>
				<div class="homepage-proof__spotlight-orbit homepage-proof__spotlight-orbit--two"></div>
				<div class="homepage-proof__spotlight-core"></div>
				<div class="homepage-proof__spotlight-mini homepage-proof__spotlight-mini--a"></div>
				<div class="homepage-proof__spotlight-mini homepage-proof__spotlight-mini--b"></div>
				<div class="homepage-proof__spotlight-mini homepage-proof__spotlight-mini--c"></div>
			</div>
		</div>
		<div class="homepage-proof__grid">
			<?php foreach ( $cards as $card ) : ?>
				<?php get_template_part( 'template-parts/components/stat-card', null, array( 'card_class' => 'homepage-proof__card', 'title' => $card['title'], 'text' => $card['description'] ) ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

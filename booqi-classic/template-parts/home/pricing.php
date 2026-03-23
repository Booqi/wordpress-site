<?php
/**
 * Homepage pricing section.
 *
 * @package BooqiClassic
 */

$tiers = $args['tiers'] ?? array();
?>
<section id="pricing" class="page-section page-section--light homepage-pricing" aria-labelledby="homepage-pricing-title">
	<div class="site-container stack-lg">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'container_class' => 'site-reading-width',
				'alignment'       => 'centered',
				'badge'           => __( 'Pricing', 'booqi-classic' ),
				'heading_id'      => 'homepage-pricing-title',
					'title'           => __( 'What we offer', 'booqi-classic' ),
				'description'     => __( 'Sell your tickets online and offline!', 'booqi-classic' ),
			)
		);
		?>
		<div class="homepage-pricing__grid">
			<?php foreach ( $tiers as $tier ) : ?>
				<?php
				$header = sprintf(
					'<div class="homepage-pricing__card-header"><p class="homepage-pricing__eyebrow">%1$s</p><h3>%2$s</h3><p class="homepage-pricing__price">%3$s</p></div>',
					esc_html( $tier['eyebrow'] ),
					esc_html( $tier['name'] ),
					esc_html( $tier['price'] )
				);

				$features = '<ul class="homepage-pricing__features">';
				foreach ( $tier['features'] as $feature ) {
					$features .= '<li>' . esc_html( $feature ) . '</li>';
				}
				$features .= '</ul>';
				$features .= '<a class="button" href="' . esc_url( $tier['button_url'] ) . '">' . esc_html( $tier['button_label'] ) . '</a>';

				get_template_part(
					'template-parts/components/content-card',
					null,
					array(
						'tag'           => 'article',
						'card_class'    => 'homepage-pricing__card' . ( ! empty( $tier['highlight'] ) ? ' homepage-pricing__card--highlight' : '' ),
						'title'         => $tier['name'],
						'render_title'  => false,
						'before_title'  => $header,
						'after_content' => $features,
					)
				);
				?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
/**
 * Homepage hero section.
 *
 * @package BooqiClassic
 */

$stats = $args['stats'] ?? array();
?>
<section id="hero" class="hero-section page-section page-section--hero homepage-hero" aria-labelledby="homepage-hero-title">
	<div class="site-container hero-grid homepage-hero__grid">
		<div class="hero-copy homepage-hero__copy">
			<?php
			get_template_part(
				'template-parts/components/badge',
				null,
				array(
					'text'   => __( 'Effortless ticketing', 'booqi-classic' ),
					'accent' => true,
				)
			);
			?>
			<h1 id="homepage-hero-title" class="hero-title"><?php esc_html_e( 'Enhance your ticketing experience', 'booqi-classic' ); ?></h1>
			<p class="hero-text"><?php esc_html_e( 'Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry. Find out why numerous locations choose us to arrange their entrance for them.', 'booqi-classic' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( booqi_classic_get_demo_url() ); ?>"><?php esc_html_e( 'Request demo', 'booqi-classic' ); ?></a>
			</div>
		</div>
		<div class="hero-panel surface-panel homepage-hero__visual" aria-label="<?php esc_attr_e( 'Booqi dashboard preview', 'booqi-classic' ); ?>">
			<div class="hero-panel__chrome">
				<span></span><span></span><span></span>
			</div>
			<div class="homepage-hero__board">
				<div class="homepage-hero__screen">
					<img class="homepage-hero__image" src="<?php echo esc_url( booqi_classic_get_image_uri( 'homepage/hero-dashboard.svg' ) ); ?>" alt="<?php esc_attr_e( 'Dashboard mockup with ticketing and revenue metrics.', 'booqi-classic' ); ?>">
				</div>
				<div class="homepage-hero__stats">
					<?php foreach ( $stats as $stat ) : ?>
						<?php
						get_template_part(
							'template-parts/components/stat-card',
							null,
							array(
								'card_class'  => 'homepage-hero__stat-card',
								'label'       => $stat['label'],
								'label_class' => 'homepage-hero__stat-label',
								'value'       => $stat['value'],
								'value_class' => 'homepage-hero__stat-value',
							)
						);
						?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

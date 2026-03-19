<?php
/**
 * Homepage hero section.
 *
 * @package BooqiClassic
 */

$stats = $args['stats'] ?? array();
?>
<section class="hero-section page-section page-section--hero homepage-hero">
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
			<h1 class="hero-title"><?php esc_html_e( 'Enhance your ticketing experience', 'booqi-classic' ); ?></h1>
			<p class="hero-text"><?php esc_html_e( 'Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry. Find out why numerous locations choose us to arrange their entrance for them.', 'booqi-classic' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' ) ); ?>"><?php esc_html_e( 'Request demo', 'booqi-classic' ); ?></a>
			</div>
		</div>
		<div class="hero-panel surface-panel homepage-hero__visual" aria-label="<?php esc_attr_e( 'Booqi dashboard preview', 'booqi-classic' ); ?>">
			<div class="hero-panel__chrome">
				<span></span><span></span><span></span>
			</div>
			<div class="homepage-hero__board">
				<div class="homepage-hero__screen">
					<div class="homepage-hero__screen-header">
						<span class="homepage-hero__screen-title"><?php esc_html_e( 'Ticket performance', 'booqi-classic' ); ?></span>
						<span class="homepage-hero__screen-pill"><?php esc_html_e( 'Live', 'booqi-classic' ); ?></span>
					</div>
					<div class="homepage-hero__chart" aria-hidden="true">
						<span></span><span></span><span></span><span></span><span></span>
					</div>
					<div class="homepage-hero__ring-row">
						<div class="homepage-hero__ring"></div>
						<div class="homepage-hero__screen-copy">
							<strong><?php esc_html_e( 'Visitor flow under control', 'booqi-classic' ); ?></strong>
							<p><?php esc_html_e( 'Track arrivals, upsells, subscriptions, and check-ins from one dashboard.', 'booqi-classic' ); ?></p>
						</div>
					</div>
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

<?php
/**
 * Homepage features spotlight section.
 *
 * @package BooqiClassic
 */

$items = $args['items'] ?? array();
?>
<section class="page-section page-section--light homepage-features-spotlight">
	<div class="site-container homepage-features-spotlight__grid">
		<div class="homepage-features-spotlight__media content-card">
			<div class="homepage-features-spotlight__canvas">
				<div class="homepage-features-spotlight__window"></div>
				<div class="homepage-features-spotlight__panel homepage-features-spotlight__panel--primary">
					<strong><?php esc_html_e( 'Online + onsite sales', 'booqi-classic' ); ?></strong>
					<span><?php esc_html_e( 'Tickets, passes, hardware, and integrations together.', 'booqi-classic' ); ?></span>
				</div>
				<div class="homepage-features-spotlight__panel homepage-features-spotlight__panel--secondary">
					<strong><?php esc_html_e( 'Dynamic pricing', 'booqi-classic' ); ?></strong>
					<span><?php esc_html_e( 'Adjust offers as demand changes.', 'booqi-classic' ); ?></span>
				</div>
			</div>
		</div>
		<div class="homepage-features-spotlight__content">
			<?php
			get_template_part(
				'template-parts/components/section-heading',
				null,
				array(
					'badge'       => __( 'Features', 'booqi-classic' ),
					'title'       => __( 'We have got what it takes!', 'booqi-classic' ),
					'description' => __( 'We provide an easy platform for your visitors. While giving you the possibility to manage and control with just a mouse click', 'booqi-classic' ),
				)
			);
			?>
			<ol class="homepage-features-spotlight__list">
				<?php foreach ( $items as $item ) : ?>
					<li class="homepage-features-spotlight__list-item">
						<span class="homepage-features-spotlight__number"><?php echo esc_html( $item['number'] ); ?></span>
						<span class="homepage-features-spotlight__item-title"><?php echo esc_html( $item['title'] ); ?></span>
					</li>
				<?php endforeach; ?>
			</ol>
			<a class="button" href="<?php echo esc_url( home_url( '/features' ) ); ?>"><?php esc_html_e( 'See all our features', 'booqi-classic' ); ?></a>
		</div>
	</div>
</section>

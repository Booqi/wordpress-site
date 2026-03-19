<?php
/**
 * Homepage industries section.
 *
 * @package BooqiClassic
 */

$cards = $args['cards'] ?? array();
?>
<section class="page-section page-section--light homepage-industries">
	<div class="site-container stack-lg">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'container_class' => 'site-reading-width',
				'badge'           => __( 'Industries', 'booqi-classic' ),
				'title'           => __( 'The right solution for your business needs', 'booqi-classic' ),
			)
		);
		?>
		<div class="homepage-industries__grid">
			<?php foreach ( $cards as $card ) : ?>
				<?php
				get_template_part(
					'template-parts/components/content-card',
					null,
					array(
						'card_class'      => 'homepage-industries__card homepage-industries__card--' . $card['accent'],
						'inner_class'     => 'homepage-industries__link',
						'link_url'        => $card['url'],
						'title'           => $card['title'],
						'text'            => $card['description'],
						'art_class'       => 'homepage-industries__art',
						'aria_hidden_art' => true,
					)
				);
				?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

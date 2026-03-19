<?php
/**
 * Homepage FAQ section.
 *
 * @package BooqiClassic
 */

$items = $args['items'] ?? array();
?>
<section class="page-section homepage-faq">
	<div class="site-container stack-lg">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'container_class' => 'site-reading-width',
				'alignment'       => 'centered',
				'badge'           => __( 'FAQ', 'booqi-classic' ),
				'badge_accent'    => true,
				'title'           => __( 'We have all the answers', 'booqi-classic' ),
			)
		);
		?>
		<div class="homepage-faq__list">
			<?php foreach ( $items as $item ) : ?>
				<details class="homepage-faq__item"<?php echo ! empty( $item['open'] ) ? ' open' : ''; ?>>
					<summary><?php echo esc_html( $item['question'] ); ?></summary>
					<div class="homepage-faq__answer">
						<p><?php echo esc_html( $item['answer'] ); ?></p>
					</div>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>

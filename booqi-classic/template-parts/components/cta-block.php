<?php
/**
 * Reusable CTA block component.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'section_class' => '',
	'card_class'    => '',
	'badge'         => '',
	'badge_accent'  => false,
	'title'         => '',
	'description'   => '',
	'actions'       => array(),
);

$args = wp_parse_args( $args ?? array(), $defaults );

if ( '' === $args['title'] ) {
	return;
}
?>
<section class="page-section cta-section <?php echo esc_attr( trim( $args['section_class'] ) ); ?>">
	<div class="site-container">
		<div class="cta-card surface-panel <?php echo esc_attr( trim( $args['card_class'] ) ); ?>">
			<div class="cta-card__copy">
				<?php
				get_template_part(
					'template-parts/components/badge',
					null,
					array(
						'text'   => $args['badge'],
						'accent' => $args['badge_accent'],
					)
				);
				?>
				<h2><?php echo esc_html( $args['title'] ); ?></h2>
				<?php if ( $args['description'] ) : ?>
					<p><?php echo esc_html( $args['description'] ); ?></p>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $args['actions'] ) ) : ?>
				<div class="cta-card__actions">
					<?php foreach ( $args['actions'] as $action ) : ?>
						<a class="button<?php echo ! empty( $action['class'] ) ? ' ' . esc_attr( $action['class'] ) : ''; ?>" href="<?php echo esc_url( $action['url'] ); ?>"><?php echo esc_html( $action['label'] ); ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

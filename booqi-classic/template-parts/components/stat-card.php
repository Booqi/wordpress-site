<?php
/**
 * Reusable stat/info card component.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'card_class'  => '',
	'label'       => '',
	'label_class' => 'stat-card__label',
	'value'       => '',
	'value_class' => 'stat-card__value',
	'meta'        => '',
	'meta_class'  => 'stat-card__meta',
	'title'       => '',
	'title_class' => '',
	'text'        => '',
	'text_class'  => '',
	'image_src'   => '',
	'image_alt'   => '',
	'image_class' => '',
	'image_loading' => 'lazy',
);

$args = wp_parse_args( $args ?? array(), $defaults );

if ( '' === $args['value'] && '' === $args['title'] ) {
	return;
}
?>
<article class="stat-card <?php echo esc_attr( trim( $args['card_class'] ) ); ?>">
	<?php if ( $args['image_src'] ) : ?>
		<div class="stat-card__media">
			<img class="<?php echo esc_attr( trim( 'stat-card__image ' . $args['image_class'] ) ); ?>" src="<?php echo esc_url( $args['image_src'] ); ?>" alt="<?php echo esc_attr( $args['image_alt'] ); ?>" loading="<?php echo esc_attr( $args['image_loading'] ); ?>">
		</div>
	<?php endif; ?>
	<?php if ( $args['label'] ) : ?>
		<p class="<?php echo esc_attr( $args['label_class'] ); ?>"><?php echo esc_html( $args['label'] ); ?></p>
	<?php endif; ?>
	<?php if ( $args['value'] ) : ?>
		<p class="<?php echo esc_attr( $args['value_class'] ); ?>"><?php echo esc_html( $args['value'] ); ?></p>
	<?php endif; ?>
	<?php if ( $args['title'] ) : ?>
		<h3<?php echo $args['title_class'] ? ' class="' . esc_attr( $args['title_class'] ) . '"' : ''; ?>><?php echo esc_html( $args['title'] ); ?></h3>
	<?php endif; ?>
	<?php if ( $args['meta'] ) : ?>
		<p class="<?php echo esc_attr( $args['meta_class'] ); ?>"><?php echo esc_html( $args['meta'] ); ?></p>
	<?php endif; ?>
	<?php if ( $args['text'] ) : ?>
		<p<?php echo $args['text_class'] ? ' class="' . esc_attr( $args['text_class'] ) . '"' : ''; ?>><?php echo esc_html( $args['text'] ); ?></p>
	<?php endif; ?>
</article>

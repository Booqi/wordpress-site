<?php
/**
 * Reusable section heading component.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'container_class' => '',
	'heading_class'   => '',
	'heading_id'      => '',
	'badge'           => '',
	'badge_accent'    => false,
	'title'           => '',
	'description'     => '',
	'alignment'       => '',
);

$args = wp_parse_args( $args ?? array(), $defaults );

if ( '' === $args['title'] ) {
	return;
}

$container_class = trim( 'section-heading ' . $args['container_class'] . ( 'centered' === $args['alignment'] ? ' section-heading--centered' : '' ) );
?>
<div class="<?php echo esc_attr( $container_class ); ?>">
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
	<h2<?php echo $args['heading_id'] ? ' id="' . esc_attr( $args['heading_id'] ) . '"' : ''; ?><?php echo $args['heading_class'] ? ' class="' . esc_attr( $args['heading_class'] ) . '"' : ''; ?>><?php echo esc_html( $args['title'] ); ?></h2>
	<?php if ( $args['description'] ) : ?>
		<p><?php echo esc_html( $args['description'] ); ?></p>
	<?php endif; ?>
</div>

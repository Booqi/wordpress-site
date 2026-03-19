<?php
/**
 * Reusable badge/tag component.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'tag'     => 'p',
	'text'    => '',
	'class'  => '',
	'accent' => false,
);

$args = wp_parse_args( $args ?? array(), $defaults );

if ( '' === $args['text'] ) {
	return;
}

$allowed_tags = array( 'p', 'span', 'div' );
$tag          = in_array( $args['tag'], $allowed_tags, true ) ? $args['tag'] : 'p';
$classes      = trim( 'section-tag' . ( $args['accent'] ? ' section-tag--accent' : '' ) . ' ' . $args['class'] );
?>
<<?php echo esc_html( $tag ); ?> class="<?php echo esc_attr( $classes ); ?>"><?php echo esc_html( $args['text'] ); ?></<?php echo esc_html( $tag ); ?>>

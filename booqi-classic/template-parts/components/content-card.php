<?php
/**
 * Reusable linked content card component.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'tag'            => 'article',
	'card_class'     => '',
	'inner_class'    => '',
	'link_url'       => '',
	'title'          => '',
	'render_title'   => true,
	'text'           => '',
	'before_title'   => '',
	'after_content'  => '',
	'aria_hidden_art'=> false,
	'art_class'      => '',
);

$args = wp_parse_args( $args ?? array(), $defaults );

if ( '' === $args['title'] && '' === $args['before_title'] ) {
	return;
}

$allowed_tags = array( 'article', 'div' );
$tag          = in_array( $args['tag'], $allowed_tags, true ) ? $args['tag'] : 'article';
$card_class   = trim( 'content-card ' . $args['card_class'] );
$inner_class  = trim( $args['inner_class'] );
?>
<<?php echo esc_html( $tag ); ?> class="<?php echo esc_attr( $card_class ); ?>">
	<?php if ( $args['link_url'] ) : ?>
		<a class="<?php echo esc_attr( $inner_class ); ?>" href="<?php echo esc_url( $args['link_url'] ); ?>">
	<?php elseif ( $inner_class ) : ?>
		<div class="<?php echo esc_attr( $inner_class ); ?>">
	<?php endif; ?>
		<?php if ( $args['art_class'] ) : ?>
			<div class="<?php echo esc_attr( $args['art_class'] ); ?>"<?php echo $args['aria_hidden_art'] ? ' aria-hidden="true"' : ''; ?>></div>
		<?php endif; ?>
		<?php if ( $args['before_title'] ) : ?>
			<?php echo wp_kses_post( $args['before_title'] ); ?>
		<?php endif; ?>
		<?php if ( $args['render_title'] && $args['title'] ) : ?>
			<h3><?php echo esc_html( $args['title'] ); ?></h3>
		<?php endif; ?>
		<?php if ( $args['text'] ) : ?>
			<p><?php echo esc_html( $args['text'] ); ?></p>
		<?php endif; ?>
		<?php if ( $args['after_content'] ) : ?>
			<?php echo wp_kses_post( $args['after_content'] ); ?>
		<?php endif; ?>
	<?php if ( $args['link_url'] ) : ?>
		</a>
	<?php elseif ( $inner_class ) : ?>
		</div>
	<?php endif; ?>
</<?php echo esc_html( $tag ); ?>>

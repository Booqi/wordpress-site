<?php
/**
 * Reusable post card component.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'post_id'    => get_the_ID(),
	'show_link'  => true,
	'show_date'  => true,
	'excerpt'    => '',
	'link_label' => __( 'Read article', 'booqi-classic' ),
);

$args    = wp_parse_args( $args ?? array(), $defaults );
$post_id = (int) $args['post_id'];

if ( ! $post_id ) {
	return;
}

$excerpt = $args['excerpt'];

if ( '' === trim( $excerpt ) ) {
	$excerpt = get_the_excerpt( $post_id );
}
?>
<article id="post-<?php echo esc_attr( $post_id ); ?>" <?php post_class( 'content-card post-card', $post_id ); ?>>
	<a class="post-card__inner" href="<?php echo esc_url( get_permalink( $post_id ) ); ?>">
		<?php if ( ! empty( $args['show_date'] ) ) : ?>
			<p class="post-meta"><?php echo esc_html( get_the_date( '', $post_id ) ); ?></p>
		<?php endif; ?>
		<h2 class="post-card__title"><?php echo esc_html( get_the_title( $post_id ) ); ?></h2>
		<?php if ( $excerpt ) : ?>
			<p class="post-card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
		<?php else : ?>
			<p class="post-card__excerpt"><?php esc_html_e( 'Add an excerpt or publish body copy to show a richer archive preview.', 'booqi-classic' ); ?></p>
		<?php endif; ?>
		<?php if ( ! empty( $args['show_link'] ) ) : ?>
			<span class="post-card__link"><?php echo esc_html( $args['link_label'] ); ?></span>
		<?php endif; ?>
	</a>
</article>

<?php
/**
 * Blog archive template.
 *
 * @package WPSite2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part(
	'template-parts/archive-overview',
	null,
	array(
		'eyebrow' => __( 'Insights', 'wp-site2' ),
		'title'   => post_type_archive_title( '', false ),
	)
);

get_footer();

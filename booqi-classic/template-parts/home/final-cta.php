<?php
/**
 * Homepage final CTA section.
 *
 * @package BooqiClassic
 */

get_template_part(
	'template-parts/components/cta-block',
	null,
	array(
		'section_class' => 'homepage-final-cta',
		'card_class'    => 'homepage-final-cta__card',
		'badge'         => __( 'Take the next step', 'booqi-classic' ),
		'badge_accent'  => true,
		'title'         => __( 'Take the Next Step with Booqi.me', 'booqi-classic' ),
		'description'   => __( 'Ready to transform your ticket sales? Request a demo today and discover how Booqi.me can elevate your business.', 'booqi-classic' ),
		'actions'       => array(
			array(
				'label' => __( 'Request demo', 'booqi-classic' ),
				'url'   => home_url( '/book-demo' ),
			),
		),
	)
);

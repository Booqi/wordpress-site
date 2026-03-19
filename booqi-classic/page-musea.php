<?php
/**
 * Museums page template.
 *
 * @package BooqiClassic
 */

get_header();
get_template_part(
	'template-parts/marketing/industry-page',
	null,
	array(
		'badge'            => __( 'Museums', 'booqi-classic' ),
		'title'            => __( 'Museums', 'booqi-classic' ),
		'description'      => __( 'Improve online presence, visitor engagement, and timed-entry operations with a ticketing flow that matches modern museum needs.', 'booqi-classic' ),
		'lead'             => __( 'The mirrored Booqi.me museum page frames the problem around engagement and digital visibility. This custom template keeps that intent while structuring it for reuse.', 'booqi-classic' ),
		'metrics'          => array(
			array( 'label' => __( 'Exhibitions', 'booqi-classic' ), 'value' => __( 'Launch-ready', 'booqi-classic' ), 'meta' => __( 'Create exhibit-specific products, bundles, and campaigns more quickly.', 'booqi-classic' ), 'highlight' => true ),
			array( 'label' => __( 'Timed entry', 'booqi-classic' ), 'value' => __( 'Balanced', 'booqi-classic' ), 'meta' => __( 'Spread attendance across the day while protecting the visitor experience.', 'booqi-classic' ) ),
			array( 'label' => __( 'Donors & members', 'booqi-classic' ), 'value' => __( 'Recognized', 'booqi-classic' ), 'meta' => __( 'Handle member access, renewals, and special-event privileges with less friction.', 'booqi-classic' ) ),
			array( 'label' => __( 'Content reach', 'booqi-classic' ), 'value' => __( 'Improved', 'booqi-classic' ), 'meta' => __( 'Turn exhibitions and events into compelling online offers that are easy to promote.', 'booqi-classic' ) ),
		),
		'challenges_title' => __( 'Are you dealing with limited presence and visitor engagement?', 'booqi-classic' ),
		'challenges'       => array(
			__( 'Museums need digital storefronts that communicate exhibitions clearly and convert visitors smoothly.', 'booqi-classic' ),
			__( 'Timed entry, group visits, and member access can become cumbersome when managed separately.', 'booqi-classic' ),
			__( 'Teams need better insight into attendance patterns and campaign performance.', 'booqi-classic' ),
		),
		'solutions_title'  => __( 'Experience enhanced online presence and engagement with Booqi.me', 'booqi-classic' ),
		'solutions'        => array(
			__( 'Present exhibitions, events, and add-ons through a cleaner online booking flow.', 'booqi-classic' ),
			__( 'Use product flexibility and timed entry to shape a better visitor journey.', 'booqi-classic' ),
			__( 'Track visitor behavior and demand trends to improve planning and marketing.', 'booqi-classic' ),
		),
		'platform_title'   => __( 'Why museums choose Booqi.me', 'booqi-classic' ),
		'platform_cards'   => array(
			array( 'kicker' => __( '01', 'booqi-classic' ), 'title' => __( 'All-in-One Ticketing System', 'booqi-classic' ), 'text' => __( 'Bring admission, events, memberships, and venue-specific offers into a single platform.', 'booqi-classic' ) ),
			array( 'kicker' => __( '02', 'booqi-classic' ), 'title' => __( 'Advanced Analytics', 'booqi-classic' ), 'text' => __( 'Understand attendance, campaign response, and exhibition demand more clearly.', 'booqi-classic' ) ),
			array( 'kicker' => __( '03', 'booqi-classic' ), 'title' => __( 'User-Friendly Interface', 'booqi-classic' ), 'text' => __( 'Empower museum teams to update products and visitor flows without technical overhead.', 'booqi-classic' ) ),
			array( 'kicker' => __( '04', 'booqi-classic' ), 'title' => __( 'Cost-Effective Solutions', 'booqi-classic' ), 'text' => __( 'Support high-quality visitor experiences while keeping administration more manageable.', 'booqi-classic' ) ),
		),
		'workflow_title'   => __( 'A stronger museum visitor journey', 'booqi-classic' ),
		'workflow_steps'   => array(
			array( 'title' => __( 'Merchandise your exhibitions clearly', 'booqi-classic' ), 'text' => __( 'Package exhibitions, tours, and special programs into offers that are easy to understand and buy.', 'booqi-classic' ) ),
			array( 'title' => __( 'Protect the on-site experience', 'booqi-classic' ), 'text' => __( 'Use time slots and product rules to manage peak periods and preserve gallery comfort.', 'booqi-classic' ) ),
			array( 'title' => __( 'Learn from demand over time', 'booqi-classic' ), 'text' => __( 'Use reporting to refine marketing, staffing, and exhibition planning.', 'booqi-classic' ) ),
		),
		'cta_title'        => __( 'Plan a museum-ready booking flow', 'booqi-classic' ),
		'cta_description'  => __( 'See how Booqi.me can support museums, cultural attractions, and exhibition-led venues.', 'booqi-classic' ),
	)
);
get_footer();

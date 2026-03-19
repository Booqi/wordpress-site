<?php
/**
 * Zoos page template.
 *
 * @package BooqiClassic
 */

get_header();
get_template_part(
	'template-parts/marketing/industry-page',
	null,
	array(
		'badge'            => __( 'Zoos', 'booqi-classic' ),
		'title'            => __( 'Zoos', 'booqi-classic' ),
		'description'      => __( 'Support day tickets, memberships, donations, and educational visits in one calmer, more efficient ticketing experience.', 'booqi-classic' ),
		'lead'             => __( 'The Booqi.me zoo page focuses on overcoming operational cost pressure and limited ticketing flexibility. This template gives that story a reusable structure.', 'booqi-classic' ),
		'metrics'          => array(
			array( 'label' => __( 'Memberships', 'booqi-classic' ), 'value' => __( 'Connected', 'booqi-classic' ), 'meta' => __( 'Renewals, perks, and recurring visitor data stay in one account system.', 'booqi-classic' ), 'highlight' => true ),
			array( 'label' => __( 'Capacity', 'booqi-classic' ), 'value' => __( 'Visible', 'booqi-classic' ), 'meta' => __( 'Plan busy weekends, school breaks, and special programs with better oversight.', 'booqi-classic' ) ),
			array( 'label' => __( 'Experiences', 'booqi-classic' ), 'value' => __( 'Packaged', 'booqi-classic' ), 'meta' => __( 'Bundle day admission with activities, events, and premium encounters.', 'booqi-classic' ) ),
			array( 'label' => __( 'Insights', 'booqi-classic' ), 'value' => __( 'Actionable', 'booqi-classic' ), 'meta' => __( 'See which audiences, products, and days are performing best.', 'booqi-classic' ) ),
		),
		'challenges_title' => __( 'Dealing with high operational costs and limited ticketing options?', 'booqi-classic' ),
		'challenges'       => array(
			__( 'Zoo operations often combine memberships, day tickets, events, and educational programming.', 'booqi-classic' ),
			__( 'Visitor planning needs can shift quickly across seasons, weather conditions, and school holidays.', 'booqi-classic' ),
			__( 'Teams need better data and fewer disconnected tools to manage revenue efficiently.', 'booqi-classic' ),
		),
		'solutions_title'  => __( 'Use a comprehensive ticketing system to your advantage with Booqi.me', 'booqi-classic' ),
		'solutions'        => array(
			__( 'Centralize ticketing, memberships, and add-ons in one flexible system.', 'booqi-classic' ),
			__( 'Use timed entry and demand planning when visitor peaks require extra control.', 'booqi-classic' ),
			__( 'Combine sales and analytics to improve both visitor experience and commercial performance.', 'booqi-classic' ),
		),
		'platform_title'   => __( 'Why zoos choose Booqi.me', 'booqi-classic' ),
		'platform_cards'   => array(
			array( 'kicker' => __( '01', 'booqi-classic' ), 'title' => __( 'All-in-One Ticketing System', 'booqi-classic' ), 'text' => __( 'Unify member access, day tickets, events, and extra products with one backend.', 'booqi-classic' ) ),
			array( 'kicker' => __( '02', 'booqi-classic' ), 'title' => __( 'Advanced Analytics', 'booqi-classic' ), 'text' => __( 'Understand attendance trends and membership behavior with clearer data.', 'booqi-classic' ) ),
			array( 'kicker' => __( '03', 'booqi-classic' ), 'title' => __( 'User-Friendly Interface', 'booqi-classic' ), 'text' => __( 'Make it easier for front-of-house and back-office teams to work from the same system.', 'booqi-classic' ) ),
			array( 'kicker' => __( '04', 'booqi-classic' ), 'title' => __( 'Cost-Effective Solutions', 'booqi-classic' ), 'text' => __( 'Reduce manual processes and improve how you package and sell visitor experiences.', 'booqi-classic' ) ),
		),
		'workflow_title'   => __( 'A better zoo sales and access workflow', 'booqi-classic' ),
		'workflow_steps'   => array(
			array( 'title' => __( 'Configure admissions and memberships', 'booqi-classic' ), 'text' => __( 'Launch ticket types, member benefits, donor packages, and event products in one place.', 'booqi-classic' ) ),
			array( 'title' => __( 'Guide guests into the right offers', 'booqi-classic' ), 'text' => __( 'Promote family bundles, add-ons, and seasonal experiences during the booking flow.', 'booqi-classic' ) ),
			array( 'title' => __( 'Monitor attendance with confidence', 'booqi-classic' ), 'text' => __( 'Use entry and reporting data to staff better and improve the on-site visit.', 'booqi-classic' ) ),
		),
		'cta_title'        => __( 'Explore a more flexible zoo ticketing setup', 'booqi-classic' ),
		'cta_description'  => __( 'Book a walkthrough to see how Booqi.me supports zoos, wildlife parks, and member-driven attractions.', 'booqi-classic' ),
	)
);
get_footer();

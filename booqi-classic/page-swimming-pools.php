<?php
/**
 * Swimming pools page template.
 *
 * @package BooqiClassic
 */

get_header();
get_template_part(
	'template-parts/marketing/industry-page',
	null,
	array(
		'badge'            => __( 'Swimming pools', 'booqi-classic' ),
		'title'            => __( 'Swimming Pools', 'booqi-classic' ),
		'description'      => __( 'Streamline ticketing, access control, session planning, and recurring visitor management for public and recreational pools.', 'booqi-classic' ),
		'lead'             => __( 'The mirrored Booqi.me swimming pools page focuses on inefficient ticketing and limited access control. This version gives the page a reusable marketing structure.', 'booqi-classic' ),
		'hero_image'       => booqi_classic_get_image_uri( 'industries/swimming-pools.svg' ),
		'hero_image_alt'   => __( 'Swimming pool illustration with lane lines and access ladder.', 'booqi-classic' ),
		'metrics'          => array(
			array( 'label' => __( 'Sessions', 'booqi-classic' ), 'value' => __( 'Scheduled', 'booqi-classic' ), 'meta' => __( 'Manage lane swims, family sessions, lessons, and special programs with clearer capacity control.', 'booqi-classic' ), 'highlight' => true ),
			array( 'label' => __( 'Recurring visitors', 'booqi-classic' ), 'value' => __( 'Supported', 'booqi-classic' ), 'meta' => __( 'Handle memberships, lesson blocks, and passes more consistently.', 'booqi-classic' ) ),
			array( 'label' => __( 'Access control', 'booqi-classic' ), 'value' => __( 'Connected', 'booqi-classic' ), 'meta' => __( 'Tie bookings to scanners or gates so entry stays smooth on busy days.', 'booqi-classic' ) ),
			array( 'label' => __( 'Operations', 'booqi-classic' ), 'value' => __( 'Simplified', 'booqi-classic' ), 'meta' => __( 'Reduce admin overhead for staff across admissions and session planning.', 'booqi-classic' ) ),
		),
		'challenges_title' => __( 'Tired of inefficient ticketing and limited access control?', 'booqi-classic' ),
		'challenges'       => array(
			__( 'Pools often juggle public swims, lessons, memberships, and seasonal demand in parallel.', 'booqi-classic' ),
			__( 'Capacity limits and access control matter more when sessions are time-bound.', 'booqi-classic' ),
			__( 'Staff need quick tools for admissions, changes, and repeat visitors without extra manual checks.', 'booqi-classic' ),
		),
		'solutions_title'  => __( 'Experience streamlined ticketing with Booqi.me', 'booqi-classic' ),
		'solutions'        => array(
			__( 'Configure time-based products for public sessions, classes, and recurring entry.', 'booqi-classic' ),
			__( 'Connect booking data with access systems to reduce friction at arrival.', 'booqi-classic' ),
			__( 'Use one dashboard for capacity planning, visitor management, and reporting.', 'booqi-classic' ),
		),
		'platform_title'   => __( 'Why swimming pools choose Booqi.me', 'booqi-classic' ),
		'platform_cards'   => array(
			array( 'kicker' => __( '01', 'booqi-classic' ), 'title' => __( 'All-in-One Ticketing System', 'booqi-classic' ), 'text' => __( 'Sell sessions, passes, memberships, and extras in one coordinated setup.', 'booqi-classic' ) ),
			array( 'kicker' => __( '02', 'booqi-classic' ), 'title' => __( 'Advanced Analytics', 'booqi-classic' ), 'text' => __( 'See attendance, occupancy, and demand patterns to plan pool schedules better.', 'booqi-classic' ) ),
			array( 'kicker' => __( '03', 'booqi-classic' ), 'title' => __( 'User-Friendly Interface', 'booqi-classic' ), 'text' => __( 'Keep front desk and back-office workflows manageable for staff.', 'booqi-classic' ) ),
			array( 'kicker' => __( '04', 'booqi-classic' ), 'title' => __( 'Cost-Effective Solutions', 'booqi-classic' ), 'text' => __( 'Improve access management and scheduling without adding operational complexity.', 'booqi-classic' ) ),
		),
		'workflow_title'   => __( 'A smoother pool booking and access workflow', 'booqi-classic' ),
		'workflow_steps'   => array(
			array( 'title' => __( 'Structure session-based products', 'booqi-classic' ), 'text' => __( 'Create offers for lane swimming, lessons, recreational sessions, and bundles with clear availability.', 'booqi-classic' ) ),
			array( 'title' => __( 'Keep access aligned with reservations', 'booqi-classic' ), 'text' => __( 'Use connected validation so only the right guests enter the right session at the right time.', 'booqi-classic' ) ),
			array( 'title' => __( 'Support repeat visitors better', 'booqi-classic' ), 'text' => __( 'Track member or pass-holder activity to improve communication and planning.', 'booqi-classic' ) ),
		),
		'cta_title'        => __( 'See Booqi.me in action for swimming pools', 'booqi-classic' ),
		'cta_description'  => __( 'We can show how the platform supports public pools, aquatic centers, and session-based leisure venues.', 'booqi-classic' ),
	)
);
get_footer();

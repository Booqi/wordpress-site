<?php
/**
 * Theme parks page template.
 *
 * @package BooqiClassic
 */

get_header();
get_template_part(
	'template-parts/marketing/industry-page',
	null,
	array(
		'badge'            => __( 'Theme parks', 'booqi-classic' ),
		'title'            => __( 'Theme Parks and Recreational Facilities', 'booqi-classic' ),
		'description'      => __( 'Replace complex ticketing and revenue management with one connected flow for admission, add-ons, memberships, and guest access.', 'booqi-classic' ),
		'lead'             => __( 'This structure follows the mirrored Booqi.me vertical page while giving the theme a cleaner reusable layout for theme parks and similar attractions.', 'booqi-classic' ),
		'metrics'          => array(
			array( 'label' => __( 'Peak days', 'booqi-classic' ), 'value' => __( 'Controlled', 'booqi-classic' ), 'meta' => __( 'Timed entry and demand-based pricing help reduce pressure at the gate.', 'booqi-classic' ), 'highlight' => true ),
			array( 'label' => __( 'Season passes', 'booqi-classic' ), 'value' => __( 'Unified', 'booqi-classic' ), 'meta' => __( 'Keep memberships, renewals, and loyalty offers aligned in one account flow.', 'booqi-classic' ) ),
			array( 'label' => __( 'Upsells', 'booqi-classic' ), 'value' => __( 'Expanded', 'booqi-classic' ), 'meta' => __( 'Add parking, food, lockers, and other extras before the guest even arrives.', 'booqi-classic' ) ),
			array( 'label' => __( 'Access', 'booqi-classic' ), 'value' => __( 'Reliable', 'booqi-classic' ), 'meta' => __( 'Support scanners, kiosks, and turnstiles for smoother arrivals.', 'booqi-classic' ) ),
		),
		'challenges_title' => __( 'Bid farewell to complex ticketing and revenue management', 'booqi-classic' ),
		'challenges'       => array(
			__( 'High-volume park days make queue management and timed admission difficult.', 'booqi-classic' ),
			__( 'Season passes, group offers, and upsells often live in disconnected systems.', 'booqi-classic' ),
			__( 'Operations teams need visibility into attendance and revenue without extra manual work.', 'booqi-classic' ),
		),
		'solutions_title'  => __( 'Experience integrated ticketing and revenue management with Booqi.me', 'booqi-classic' ),
		'solutions'        => array(
			__( 'Run online, point-of-sale, and partner sales from one platform.', 'booqi-classic' ),
			__( 'Create timed entry products and dynamic pricing rules for better day planning.', 'booqi-classic' ),
			__( 'Connect access hardware and reporting so teams can respond in real time.', 'booqi-classic' ),
		),
		'platform_title'   => __( 'Why theme parks choose Booqi.me', 'booqi-classic' ),
		'platform_cards'   => array(
			array( 'kicker' => __( '01', 'booqi-classic' ), 'title' => __( 'All-in-One Ticketing System', 'booqi-classic' ), 'text' => __( 'Bring admissions, memberships, and on-site purchases into a single operating flow.', 'booqi-classic' ) ),
			array( 'kicker' => __( '02', 'booqi-classic' ), 'title' => __( 'Advanced Analytics', 'booqi-classic' ), 'text' => __( 'Track attendance, channel mix, and revenue performance across the full visitor journey.', 'booqi-classic' ) ),
			array( 'kicker' => __( '03', 'booqi-classic' ), 'title' => __( 'User-Friendly Interface', 'booqi-classic' ), 'text' => __( 'Give commercial and operations teams a shared dashboard that remains practical on busy days.', 'booqi-classic' ) ),
			array( 'kicker' => __( '04', 'booqi-classic' ), 'title' => __( 'Cost-Effective Solutions', 'booqi-classic' ), 'text' => __( 'Reduce system fragmentation and manual workload while improving capacity usage.', 'booqi-classic' ) ),
		),
		'workflow_title'   => __( 'A cleaner park-day workflow from sale to gate', 'booqi-classic' ),
		'workflow_steps'   => array(
			array( 'title' => __( 'Configure demand-sensitive products', 'booqi-classic' ), 'text' => __( 'Set date-based products, packages, and price rules for weekdays, holidays, and special events.', 'booqi-classic' ) ),
			array( 'title' => __( 'Sell through every relevant channel', 'booqi-classic' ), 'text' => __( 'Offer the same commercial logic online, on-site, and via partners without duplicate administration.', 'booqi-classic' ) ),
			array( 'title' => __( 'Welcome guests with confidence', 'booqi-classic' ), 'text' => __( 'Validate tickets and passes quickly through connected scanning and access-control setups.', 'booqi-classic' ) ),
		),
		'cta_title'        => __( 'Plan a smarter theme park ticketing setup', 'booqi-classic' ),
		'cta_description'  => __( 'We can walk through the Booqi.me workflow for parks, recreational facilities, and high-volume seasonal venues.', 'booqi-classic' ),
	)
);
get_footer();

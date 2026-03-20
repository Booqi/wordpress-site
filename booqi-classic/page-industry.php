<?php
/**
 * Industry overview page template.
 *
 * @package BooqiClassic
 */

$industry_cards = array(
	array(
		'kicker'      => '01',
		'title'       => __( 'Theme Parks', 'booqi-classic' ),
		'text'        => __( 'Coordinate gates, peak days, upsells, and season passes in one dependable ticketing flow.', 'booqi-classic' ),
		'link_url'    => booqi_classic_get_page_url( array( 'theme-parks', 'theme-parks-and-recreational-facilities' ), '/theme-parks' ),
		'before_title'=> '<p class="feature-card__kicker">01</p>',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-theme-parks.svg' ),
	),
	array(
		'kicker'      => '02',
		'title'       => __( 'Zoos', 'booqi-classic' ),
		'text'        => __( 'Manage memberships, timed visits, events, and educational experiences with less operational friction.', 'booqi-classic' ),
		'link_url'    => booqi_classic_get_page_url( array( 'zoos' ), '/zoos' ),
		'before_title'=> '<p class="feature-card__kicker">02</p>',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-zoos.svg' ),
	),
	array(
		'kicker'      => '03',
		'title'       => __( 'Museums', 'booqi-classic' ),
		'text'        => __( 'Support exhibitions, donor experiences, group visits, and timed entry with a flexible platform.', 'booqi-classic' ),
		'link_url'    => booqi_classic_get_page_url( array( 'museums', 'musea' ), '/museums' ),
		'before_title'=> '<p class="feature-card__kicker">03</p>',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-museums.svg' ),
	),
	array(
		'kicker'      => '04',
		'title'       => __( 'Swimming Pools', 'booqi-classic' ),
		'text'        => __( 'Control lane sessions, lessons, recurring passes, and busy-day access from one dashboard.', 'booqi-classic' ),
		'link_url'    => booqi_classic_get_page_url( array( 'swimming-pools' ), '/swimming-pools' ),
		'before_title'=> '<p class="feature-card__kicker">04</p>',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-swimming-pools.svg' ),
	),
);

$capabilities = array(
	__( 'Adapt sales setup per venue, season, and visitor type.', 'booqi-classic' ),
	__( 'Keep customer experience consistent across the entire buying journey.', 'booqi-classic' ),
	__( 'Use analytics to improve operations and pricing decisions over time.', 'booqi-classic' ),
);

get_header();
?>
<section class="page-section page-section--hero marketing-hero">
	<div class="site-container">
		<div class="marketing-hero__grid hero-grid">
			<div class="hero-copy marketing-hero__copy">
				<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Industry solutions', 'booqi-classic' ), 'accent' => true ) ); ?>
				<h1 class="hero-title marketing-hero__title"><?php esc_html_e( 'The right solution for your business needs', 'booqi-classic' ); ?></h1>
				<p class="hero-text marketing-hero__text"><?php esc_html_e( 'Booqi.me’s primary market pages revolve around a shared promise: adaptable ticketing for different leisure venues without forcing every operation into the same mold.', 'booqi-classic' ); ?></p>
				<ul class="hero-highlights marketing-kicker-list">
					<?php foreach ( $capabilities as $capability ) : ?>
						<li><?php echo esc_html( $capability ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="surface-panel hero-panel marketing-hero__panel">
				<div class="hero-panel__chrome" aria-hidden="true"><span></span><span></span><span></span></div>
				<div class="hero-panel__body marketing-hero__visual-shell">
					<img class="marketing-hero__image marketing-hero__image--overview" src="<?php echo esc_url( booqi_classic_get_image_uri( 'pages/industry-overview-collage.svg' ) ); ?>" alt="<?php esc_attr_e( 'Overview collage representing theme parks, zoos, museums, and swimming pools.', 'booqi-classic' ); ?>">
					<?php foreach ( $industry_cards as $card ) : ?>
						<a class="stat-card marketing-industry-mini-card" href="<?php echo esc_url( $card['link_url'] ); ?>">
							<p class="stat-card__label"><?php echo esc_html( $card['kicker'] ); ?></p>
							<p class="stat-card__value marketing-industry-mini-card__title"><?php echo esc_html( $card['title'] ); ?></p>
							<p class="stat-card__meta"><?php echo esc_html( $card['text'] ); ?></p>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container">
		<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'Industries', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'Primary vertical pages for the Booqi.me marketing site', 'booqi-classic' ), 'description' => __( 'These templates give each key sector a dedicated structure instead of falling back to the generic page template. They can now be refined independently while keeping shared design patterns consistent.', 'booqi-classic' ), 'alignment' => 'centered' ) ); ?>
		<div class="feature-grid marketing-feature-grid industry-overview-grid">
			<?php foreach ( $industry_cards as $card ) : ?>
				<?php get_template_part( 'template-parts/components/content-card', null, array( 'card_class' => 'feature-card marketing-feature-card', 'link_url' => $card['link_url'], 'before_title' => $card['before_title'], 'title' => $card['title'], 'text' => $card['text'], 'art_class' => 'marketing-card__art', 'image_src' => $card['image_src'], 'image_alt' => $card['title'] ) ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_template_part(
	'template-parts/components/cta-block',
	null,
	array(
		'badge'        => __( 'Take the next step with Booqi.me', 'booqi-classic' ),
		'badge_accent' => true,
		'title'        => __( 'See which Booqi.me setup fits your venue best', 'booqi-classic' ),
		'description'  => __( 'Book a demo and we can walk through the workflow, pricing model, and operating needs for your industry.', 'booqi-classic' ),
		'actions'      => booqi_classic_get_primary_cta_actions(),
	)
);

get_footer();

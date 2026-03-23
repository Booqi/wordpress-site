<?php
/**
 * About page template.
 *
 * @package BooqiClassic
 */

$values = array(
	array(
		'kicker' => __( 'User Friendly', 'booqi-classic' ),
		'text'   => __( 'We keep the platform feature-rich while still approachable for day-to-day venue teams.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( 'Personal', 'booqi-classic' ),
		'text'   => __( 'We work closely with customers through named contacts who understand their venue and goals.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( 'Innovative', 'booqi-classic' ),
		'text'   => __( 'We continuously improve the product so clients can stay ahead of visitor and market expectations.', 'booqi-classic' ),
	),
);

$unique_points = array(
	__( 'Streamlined operations save time and reduce manual effort.', 'booqi-classic' ),
	__( 'A versatile product suite supports varied visitor needs and revenue models.', 'booqi-classic' ),
	__( 'Analytics provide practical insights for better decisions.', 'booqi-classic' ),
	__( 'Entry solutions like self-service kiosks and turnstiles improve the visitor journey.', 'booqi-classic' ),
	__( 'Support and training help teams get value from the platform faster.', 'booqi-classic' ),
);

get_header();
?>
<section class="page-section page-section--hero marketing-hero">
	<div class="site-container">
		<div class="marketing-hero__grid hero-grid">
			<div class="hero-copy marketing-hero__copy">
				<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'About us', 'booqi-classic' ), 'accent' => true ) ); ?>
				<h1 class="hero-title marketing-hero__title"><?php esc_html_e( 'Built to simplify leisure ticketing without losing the human touch', 'booqi-classic' ); ?></h1>
				<p class="hero-text marketing-hero__text"><?php esc_html_e( 'The mirrored About page centers on Booqi.me’s story, mission, values, and team. This custom template turns that into a maintainable narrative page for the core marketing site.', 'booqi-classic' ); ?></p>
			</div>
			<div class="surface-panel hero-panel marketing-hero__panel">
				<div class="hero-panel__chrome" aria-hidden="true"><span></span><span></span><span></span></div>
				<div class="hero-panel__body marketing-hero__visual-shell">
					<img class="marketing-hero__image" src="<?php echo esc_url( booqi_classic_get_image_uri( 'pages/about-team-illustration.svg' ) ); ?>" alt="<?php esc_attr_e( 'Abstract illustration of the Booqi team collaborating around a product dashboard.', 'booqi-classic' ); ?>">
				</div>
				<div class="hero-panel__body marketing-capability-stack">
					<section class="stat-card marketing-capability-card stat-card--highlight">
						<p class="stat-card__label"><?php esc_html_e( 'Our Story', 'booqi-classic' ); ?></p>
						<p class="stat-card__meta"><?php esc_html_e( 'Booqi.me helps venues manage ticket sales online and offline while improving visitor satisfaction and reducing waiting times.', 'booqi-classic' ); ?></p>
					</section>
					<section class="stat-card marketing-capability-card">
						<p class="stat-card__label"><?php esc_html_e( 'Our Mission', 'booqi-classic' ); ?></p>
						<p class="stat-card__meta"><?php esc_html_e( 'We aim to make ticketing and revenue management clearer, more adaptable, and easier to operate for leisure businesses.', 'booqi-classic' ); ?></p>
					</section>
					<section class="stat-card marketing-capability-card">
						<p class="stat-card__label"><?php esc_html_e( 'Our Team', 'booqi-classic' ); ?></p>
						<p class="stat-card__meta"><?php esc_html_e( 'Industry specialists, experienced developers, and support staff work together to keep the product practical and dependable.', 'booqi-classic' ); ?></p>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container">
		<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'Values', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'What shapes the Booqi.me approach', 'booqi-classic' ), 'alignment' => 'centered' ) ); ?>
		<div class="feature-grid marketing-feature-grid">
			<?php foreach ( $values as $value ) : ?>
				<?php get_template_part( 'template-parts/components/content-card', null, array( 'card_class' => 'feature-card marketing-feature-card', 'before_title' => '<p class="feature-card__kicker">' . esc_html( $value['kicker'] ) . '</p>', 'title' => $value['kicker'], 'text' => $value['text'] ) ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section marketing-section">
	<div class="site-container marketing-two-column">
		<div class="marketing-copy-card surface-panel">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'Our story', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'A product shaped by real venue operations', 'booqi-classic' ), 'description' => __( 'The original About page emphasizes product usability, strong customer relationships, and constant product refinement. This section captures that story with cleaner structure.', 'booqi-classic' ) ) ); ?>
		</div>
		<div class="marketing-copy-card content-card marketing-copy-card--light">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'What makes us unique', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'Practical advantages for clients and teams', 'booqi-classic' ) ) ); ?>
			<ul class="marketing-bullet-list marketing-bullet-list--dark">
				<?php foreach ( $unique_points as $point ) : ?>
					<li><?php echo esc_html( $point ); ?></li>
				<?php endforeach; ?>
			</ul>
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
		'title'        => __( 'Want to meet the team behind the platform?', 'booqi-classic' ),
		'description'  => __( 'Book a demo or get in touch to discuss how Booqi.me can support your venue.', 'booqi-classic' ),
		'actions'      => booqi_classic_get_primary_cta_actions(),
	)
);

get_footer();

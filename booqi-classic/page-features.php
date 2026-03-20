<?php
/**
 * Features page template.
 *
 * @package BooqiClassic
 */

$feature_cards = array(
	array(
		'kicker' => __( '01', 'booqi-classic' ),
		'title'  => __( 'Integrated Sales Management', 'booqi-classic' ),
		'text'   => __( 'Manage online ticketing, on-site sales, resellers, and partner channels from one centralized platform.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( '02', 'booqi-classic' ),
		'title'  => __( 'Versatile Product Suite', 'booqi-classic' ),
		'text'   => __( 'Configure tickets, time slots, memberships, vouchers, parking, bundles, and add-ons without rebuilding your sales flow.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( '03', 'booqi-classic' ),
		'title'  => __( 'User-Friendly Backend', 'booqi-classic' ),
		'text'   => __( 'Give teams an approachable dashboard for product setup, promotions, availability, and day-to-day venue operations.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( '04', 'booqi-classic' ),
		'title'  => __( 'Dynamic Pricing & Timed Entry', 'booqi-classic' ),
		'text'   => __( 'Match demand with pricing rules and capacity windows so you can improve attendance patterns and revenue quality.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( '05', 'booqi-classic' ),
		'title'  => __( 'Reporting & Analytics', 'booqi-classic' ),
		'text'   => __( 'Monitor turnover, attendance, channel performance, and visitor behavior with actionable dashboards and exportable data.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( '06', 'booqi-classic' ),
		'title'  => __( 'External Integrations', 'booqi-classic' ),
		'text'   => __( 'Connect POS hardware, scanners, turnstiles, CRMs, marketing systems, and finance tooling without fragmented workflows.', 'booqi-classic' ),
	),
		array(
		'kicker' => __( '07', 'booqi-classic' ),
		'title'  => __( 'Advanced Entry Solutions', 'booqi-classic' ),
		'text'   => __( 'Use self-service kiosks, scanners, and access-control setups that reduce queues while keeping entry reliable.', 'booqi-classic' ),
	),
	array(
		'kicker' => __( '08', 'booqi-classic' ),
		'title'  => __( 'Customer Support & Training', 'booqi-classic' ),
		'text'   => __( 'Roll out faster with onboarding, training, and ongoing support tailored to your venue and operating model.', 'booqi-classic' ),
	),
);

$capability_groups = array(
	array(
		'title' => __( 'Sell everywhere your guests expect', 'booqi-classic' ),
		'text'  => __( 'Booqi.me brings your web shop, box office, kiosk, reseller partners, and access flow together so commercial teams do not have to manage disconnected systems.', 'booqi-classic' ),
	),
	array(
		'title' => __( 'Launch promotions without friction', 'booqi-classic' ),
		'text'  => __( 'Create seasonal products, campaigns, discount codes, memberships, and upsells with enough flexibility for marketing teams and enough control for operations.', 'booqi-classic' ),
	),
	array(
		'title' => __( 'Keep operations clear for staff', 'booqi-classic' ),
		'text'  => __( 'The backend is structured so venue teams can manage pricing, capacities, and customer service quickly, even during busy periods.', 'booqi-classic' ),
	),
);

get_header();
?>
<section class="page-section page-section--hero marketing-hero">
	<div class="site-container">
		<div class="marketing-hero__grid hero-grid">
			<div class="hero-copy marketing-hero__copy">
				<?php
				get_template_part(
					'template-parts/components/badge',
					null,
					array(
						'text'   => __( 'Features', 'booqi-classic' ),
						'accent' => true,
					)
				);
				?>
				<h1 class="hero-title marketing-hero__title"><?php esc_html_e( 'Why choose Booqi.me?', 'booqi-classic' ); ?></h1>
				<p class="hero-text marketing-hero__text"><?php esc_html_e( 'Booqi.me gives leisure venues one flexible ticketing platform for sales, capacity, customer experience, and revenue management.', 'booqi-classic' ); ?></p>
				<ul class="hero-highlights marketing-kicker-list">
					<li><?php esc_html_e( 'Integrated sales across channels', 'booqi-classic' ); ?></li>
					<li><?php esc_html_e( 'Dynamic pricing and timed entry', 'booqi-classic' ); ?></li>
					<li><?php esc_html_e( 'Support for venue hardware and integrations', 'booqi-classic' ); ?></li>
				</ul>
				<div class="hero-actions">
					<?php foreach ( booqi_classic_get_primary_cta_actions() as $action ) : ?>
						<a class="button<?php echo ! empty( $action['class'] ) ? ' ' . esc_attr( $action['class'] ) : ''; ?>" href="<?php echo esc_url( $action['url'] ); ?>"><?php echo esc_html( $action['label'] ); ?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="surface-panel hero-panel marketing-hero__panel">
				<div class="hero-panel__chrome" aria-hidden="true"><span></span><span></span><span></span></div>
				<div class="hero-panel__body marketing-hero__visual-shell">
					<img class="marketing-hero__image" src="<?php echo esc_url( booqi_classic_get_image_uri( 'pages/features-hero-platform.svg' ) ); ?>" alt="<?php esc_attr_e( 'Platform illustration showing dashboards, integrations, and pricing cards.', 'booqi-classic' ); ?>">
				</div>
				<div class="hero-panel__body marketing-capability-stack">
					<?php foreach ( $capability_groups as $group ) : ?>
						<section class="stat-card marketing-capability-card">
							<h2><?php echo esc_html( $group['title'] ); ?></h2>
							<p class="stat-card__meta"><?php echo esc_html( $group['text'] ); ?></p>
						</section>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'badge'        => __( 'Revolutionize ticketing with Booqi.me', 'booqi-classic' ),
				'badge_accent' => true,
				'title'        => __( 'A comprehensive platform built around leisure venue operations', 'booqi-classic' ),
				'description'  => __( 'The mirrored Booqi.me features page focuses on giving venues one robust system for sales management, product flexibility, operations, analytics, and support. This template turns that into a cleaner reusable structure.', 'booqi-classic' ),
				'alignment'    => 'centered',
			)
		);
		?>
		<div class="feature-grid marketing-feature-grid">
			<?php foreach ( $feature_cards as $card ) : ?>
				<?php
				get_template_part(
					'template-parts/components/content-card',
					null,
					array(
						'card_class'   => 'feature-card marketing-feature-card',
						'before_title' => '<p class="feature-card__kicker">' . esc_html( $card['kicker'] ) . '</p>',
						'title'        => $card['title'],
						'text'         => $card['text'],
					)
				);
				?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section marketing-section">
	<div class="site-container marketing-two-column">
		<div class="marketing-copy-card surface-panel">
			<?php
			get_template_part(
				'template-parts/components/section-heading',
				null,
				array(
					'badge'        => __( 'Sales orchestration', 'booqi-classic' ),
					'badge_accent' => true,
					'title'        => __( 'Effortlessly manage sales across multiple channels', 'booqi-classic' ),
					'description'  => __( 'Mirror content emphasizes the ability to simplify day-to-day ticket sales while improving conversion and visibility across each commercial touchpoint.', 'booqi-classic' ),
				)
			);
			?>
			<ul class="marketing-bullet-list">
				<li><?php esc_html_e( 'Launch one source of truth for online, on-site, and partner sales.', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Keep products, promotions, and availability aligned across every channel.', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Support memberships, vouchers, parking, merchandise, and bundled offers in the same flow.', 'booqi-classic' ); ?></li>
			</ul>
		</div>
		<div class="marketing-copy-card content-card marketing-copy-card--light">
			<?php
			get_template_part(
				'template-parts/components/section-heading',
				null,
				array(
					'badge'        => __( 'Operational clarity', 'booqi-classic' ),
					'badge_accent' => true,
					'title'        => __( 'Turn visitor data into better decisions', 'booqi-classic' ),
					'description'  => __( 'Reporting, capacity controls, and connected operations help venues plan better and adapt faster during peak periods.', 'booqi-classic' ),
				)
			);
			?>
			<ul class="marketing-bullet-list marketing-bullet-list--dark">
				<li><?php esc_html_e( 'Track sales, attendance, and performance in one dashboard.', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Use time slots and pricing logic to spread demand more effectively.', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Integrate access systems so operations and guest experience stay connected.', 'booqi-classic' ); ?></li>
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
		'title'        => __( 'Ready to transform your ticket sales?', 'booqi-classic' ),
		'description'  => __( 'Request a demo to see how the Booqi.me feature set can support your venue, staff, and visitors.', 'booqi-classic' ),
		'actions'      => booqi_classic_get_primary_cta_actions(),
	)
);

get_footer();

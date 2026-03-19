<?php
/**
 * Front page template.
 *
 * @package BooqiClassic
 */

$hero_stats = array(
	array(
		'label' => __( 'Revenue', 'booqi-classic' ),
		'value' => __( '€ 12,480', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Sales Today', 'booqi-classic' ),
		'value' => __( '184 orders', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Tickets', 'booqi-classic' ),
		'value' => __( '2,416', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Subscriptions', 'booqi-classic' ),
		'value' => __( '318 active', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Upsells', 'booqi-classic' ),
		'value' => __( '34 today', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Vouchers', 'booqi-classic' ),
		'value' => __( '96 redeemed', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Visitors', 'booqi-classic' ),
		'value' => __( '1,284 expected', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Check-ins', 'booqi-classic' ),
		'value' => __( '742 scanned', 'booqi-classic' ),
	),
);

$client_logos = array(
	'Walibi Holland',
	'DierenPark Amersfoort',
	'BillyBird',
	'Autoworld',
	'Plopsa',
	'Dierenrijk',
	'Slagharen',
	'Attractiepark Toverland',
);

$feature_spotlight_items = array(
	array(
		'number' => '01.',
		'title'  => __( 'Easily sell subscriptions and year passes to your customers', 'booqi-classic' ),
	),
	array(
		'number' => '02.',
		'title'  => __( 'Integrate your hardware with ease', 'booqi-classic' ),
	),
	array(
		'number' => '03.',
		'title'  => __( 'Add dynamic pricing to enhance sales', 'booqi-classic' ),
	),
	array(
		'number' => '04.',
		'title'  => __( 'Connect with your favourite tools', 'booqi-classic' ),
	),
);

$industry_cards = array(
	array(
		'title'       => __( 'Theme Parks', 'booqi-classic' ),
		'description' => __( 'Keep every gate, upsell, and season-pass moment connected in one ticketing flow.', 'booqi-classic' ),
		'url'         => home_url( '/theme-parks' ),
		'accent'      => 'theme-park',
	),
	array(
		'title'       => __( 'Zoo\'s', 'booqi-classic' ),
		'description' => __( 'Handle day tickets, member access, and flexible visitor planning for animal parks.', 'booqi-classic' ),
		'url'         => home_url( '/zoos' ),
		'accent'      => 'zoo',
	),
	array(
		'title'       => __( 'Musea', 'booqi-classic' ),
		'description' => __( 'Launch exhibitions, timed entry, and cultural events with clear visitor control.', 'booqi-classic' ),
		'url'         => home_url( '/musea' ),
		'accent'      => 'museum',
	),
	array(
		'title'       => __( 'Swimming Pools', 'booqi-classic' ),
		'description' => __( 'Balance busy swim sessions, lessons, and recurring bookings from one dashboard.', 'booqi-classic' ),
		'url'         => home_url( '/swimming-pools' ),
		'accent'      => 'pool',
	),
);

$proof_cards = array(
	array(
		'title'       => __( 'Rigid cloud infrastructure', 'booqi-classic' ),
		'description' => __( 'Your data is securely stored in datacenters in the Netherlands and Germany. Our server architecture has resulted in at least 99.9% uptime over the last months.', 'booqi-classic' ),
	),
	array(
		'title'       => __( 'Continuous improvement', 'booqi-classic' ),
		'description' => __( 'Our software solution is always evolving. We strive to give you the tools needed to quickly adapt to changes in the market.', 'booqi-classic' ),
	),
	array(
		'title'       => __( 'Easy to use Dashboard', 'booqi-classic' ),
		'description' => __( 'With our software, you have full control over your sales offers. Decide for yourself which products you want to offer and customise your range entirely according to your wishes.', 'booqi-classic' ),
	),
	array(
		'title'       => __( 'Onboarding, training and support', 'booqi-classic' ),
		'description' => __( 'Our team is ready! Our support desk is available seven days a week to assist you with any inquiries or issues you may encounter. Additionally, we provide a comprehensive support library filled with self-help articles for your convenience.', 'booqi-classic' ),
	),
);

$pricing_tiers = array(
	array(
		'name'        => __( 'Starter', 'booqi-classic' ),
		'eyebrow'     => __( 'Free', 'booqi-classic' ),
		'price'       => __( 'Free for €1.000 monthly turnover', 'booqi-classic' ),
		'highlight'   => false,
		'button_label'=> __( 'Create Free Account', 'booqi-classic' ),
		'button_url'  => home_url( '/pricing' ),
		'features'    => array(
			__( 'Start selling online tickets right away', 'booqi-classic' ),
			__( 'Access to essential features', 'booqi-classic' ),
			__( 'No offline sales', 'booqi-classic' ),
			__( 'No onboarding package', 'booqi-classic' ),
			__( 'No support', 'booqi-classic' ),
		),
	),
	array(
		'name'        => __( 'Pro', 'booqi-classic' ),
		'eyebrow'     => __( 'Get all features', 'booqi-classic' ),
		'price'       => __( 'Request your price', 'booqi-classic' ),
		'highlight'   => true,
		'button_label'=> __( 'Request Demo', 'booqi-classic' ),
		'button_url'  => home_url( '/book-demo' ),
		'features'    => array(
			__( 'All platform features', 'booqi-classic' ),
			__( 'Access to essential features', 'booqi-classic' ),
			__( 'Connect your hardware', 'booqi-classic' ),
			__( 'Training and onboarding package', 'booqi-classic' ),
			__( 'Support over phone, chat and e-mail', 'booqi-classic' ),
		),
	),
);

$faq_items = array(
	array(
		'question' => __( 'How long does it take to set up my ticket shop with Booqi.me?', 'booqi-classic' ),
		'answer'   => __( 'We provide a fully functional ticket shop immediately. The setup process, guided by our team, can have you live within a week, depending on your pace and the number of products.', 'booqi-classic' ),
		'open'     => true,
	),
	array(
		'question' => __( 'Can I test the platform before committing?', 'booqi-classic' ),
		'answer'   => __( 'Yes. Booqi’s Starter plan lets you begin with the core online ticketing flow before deciding when you are ready for the broader Pro setup.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'What are the costs associated with Booqi.me?', 'booqi-classic' ),
		'answer'   => __( 'Starter is free for up to €1.000 monthly turnover, while Pro pricing is tailored to your venue setup, hardware needs, and support requirements.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'Do you offer customer support?', 'booqi-classic' ),
		'answer'   => __( 'Yes. Booqi provides onboarding, training, and ongoing support, with the Pro plan covering phone, chat, and e-mail support.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'Is the system user-friendly?', 'booqi-classic' ),
		'answer'   => __( 'The platform is built so teams can manage products, pricing, and visitor flows from one easy-to-use dashboard without technical complexity.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'Can Booqi.me integrate with my existing systems?', 'booqi-classic' ),
		'answer'   => __( 'Yes. Booqi supports hardware connections and favourite-tool integrations so your ticketing setup fits your current operation.', 'booqi-classic' ),
	),
);

get_header();
?>
<section class="hero-section page-section page-section--hero homepage-hero">
	<div class="site-container hero-grid homepage-hero__grid">
		<div class="hero-copy homepage-hero__copy">
			<p class="section-tag section-tag--accent"><?php esc_html_e( 'Effortless ticketing', 'booqi-classic' ); ?></p>
			<h1 class="hero-title"><?php esc_html_e( 'Enhance your ticketing experience', 'booqi-classic' ); ?></h1>
			<p class="hero-text"><?php esc_html_e( 'Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry. Find out why numerous locations choose us to arrange their entrance for them.', 'booqi-classic' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( home_url( '/book-demo' ) ); ?>"><?php esc_html_e( 'Request demo', 'booqi-classic' ); ?></a>
			</div>
		</div>
		<div class="hero-panel surface-panel homepage-hero__visual" aria-label="<?php esc_attr_e( 'Booqi dashboard preview', 'booqi-classic' ); ?>">
			<div class="hero-panel__chrome">
				<span></span><span></span><span></span>
			</div>
			<div class="homepage-hero__board">
				<div class="homepage-hero__screen">
					<div class="homepage-hero__screen-header">
						<span class="homepage-hero__screen-title"><?php esc_html_e( 'Ticket performance', 'booqi-classic' ); ?></span>
						<span class="homepage-hero__screen-pill"><?php esc_html_e( 'Live', 'booqi-classic' ); ?></span>
					</div>
					<div class="homepage-hero__chart" aria-hidden="true">
						<span></span><span></span><span></span><span></span><span></span>
					</div>
					<div class="homepage-hero__ring-row">
						<div class="homepage-hero__ring"></div>
						<div class="homepage-hero__screen-copy">
							<strong><?php esc_html_e( 'Visitor flow under control', 'booqi-classic' ); ?></strong>
							<p><?php esc_html_e( 'Track arrivals, upsells, subscriptions, and check-ins from one dashboard.', 'booqi-classic' ); ?></p>
						</div>
					</div>
				</div>
				<div class="homepage-hero__stats">
					<?php foreach ( $hero_stats as $stat ) : ?>
						<div class="homepage-hero__stat-card">
							<p class="homepage-hero__stat-label"><?php echo esc_html( $stat['label'] ); ?></p>
							<p class="homepage-hero__stat-value"><?php echo esc_html( $stat['value'] ); ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section homepage-logo-strip">
	<div class="site-container">
		<p class="homepage-logo-strip__title"><?php esc_html_e( 'Used by the world’s most incredible teams:', 'booqi-classic' ); ?></p>
		<ul class="homepage-logo-strip__list" aria-label="<?php esc_attr_e( 'Selected Booqi customers', 'booqi-classic' ); ?>">
			<?php foreach ( $client_logos as $client_logo ) : ?>
				<li class="homepage-logo-strip__item"><?php echo esc_html( $client_logo ); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<section class="page-section page-section--light homepage-features-spotlight">
	<div class="site-container homepage-features-spotlight__grid">
		<div class="homepage-features-spotlight__media content-card">
			<div class="homepage-features-spotlight__canvas">
				<div class="homepage-features-spotlight__window"></div>
				<div class="homepage-features-spotlight__panel homepage-features-spotlight__panel--primary">
					<strong><?php esc_html_e( 'Online + onsite sales', 'booqi-classic' ); ?></strong>
					<span><?php esc_html_e( 'Tickets, passes, hardware, and integrations together.', 'booqi-classic' ); ?></span>
				</div>
				<div class="homepage-features-spotlight__panel homepage-features-spotlight__panel--secondary">
					<strong><?php esc_html_e( 'Dynamic pricing', 'booqi-classic' ); ?></strong>
					<span><?php esc_html_e( 'Adjust offers as demand changes.', 'booqi-classic' ); ?></span>
				</div>
			</div>
		</div>
		<div class="homepage-features-spotlight__content">
			<p class="section-tag"><?php esc_html_e( 'Features', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'We have got what it takes!', 'booqi-classic' ); ?></h2>
			<p><?php esc_html_e( 'We provide an easy platform for your visitors. While giving you the possibility to manage and control with just a mouse click', 'booqi-classic' ); ?></p>
			<ol class="homepage-features-spotlight__list">
				<?php foreach ( $feature_spotlight_items as $feature_item ) : ?>
					<li class="homepage-features-spotlight__list-item">
						<span class="homepage-features-spotlight__number"><?php echo esc_html( $feature_item['number'] ); ?></span>
						<span class="homepage-features-spotlight__item-title"><?php echo esc_html( $feature_item['title'] ); ?></span>
					</li>
				<?php endforeach; ?>
			</ol>
			<a class="button" href="<?php echo esc_url( home_url( '/features' ) ); ?>"><?php esc_html_e( 'See all our features', 'booqi-classic' ); ?></a>
		</div>
	</div>
</section>

<section class="page-section page-section--light homepage-industries">
	<div class="site-container stack-lg">
		<div class="section-heading site-reading-width">
			<p class="section-tag"><?php esc_html_e( 'Industries', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'The right solution for your business needs', 'booqi-classic' ); ?></h2>
		</div>
		<div class="homepage-industries__grid">
			<?php foreach ( $industry_cards as $industry_card ) : ?>
				<article class="homepage-industries__card content-card homepage-industries__card--<?php echo esc_attr( $industry_card['accent'] ); ?>">
					<a class="homepage-industries__link" href="<?php echo esc_url( $industry_card['url'] ); ?>">
						<div class="homepage-industries__art" aria-hidden="true"></div>
						<h3><?php echo esc_html( $industry_card['title'] ); ?></h3>
						<p><?php echo esc_html( $industry_card['description'] ); ?></p>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section homepage-proof">
	<div class="site-container stack-lg">
		<div class="section-heading section-heading--centered site-reading-width homepage-proof__heading">
			<p class="section-tag section-tag--accent"><?php esc_html_e( 'Why Booqi', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'Focus on your sales and managing your customers and let us do the rest:', 'booqi-classic' ); ?></h2>
		</div>
		<div class="homepage-proof__spotlight surface-panel">
			<div class="homepage-proof__spotlight-copy">
				<p class="section-tag section-tag--accent"><?php esc_html_e( 'Platform proof', 'booqi-classic' ); ?></p>
				<h3><?php esc_html_e( 'Enhance every aspect of your business sales, ensuring satisfaction, loyalty, and unparalleled service. Thanks to AI of course.', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'Keep visitor demand, operational control, and customer relationships connected in one premium ticketing environment tailored to leisure venues.', 'booqi-classic' ); ?></p>
				<a class="button" href="<?php echo esc_url( home_url( '/book-demo' ) ); ?>"><?php esc_html_e( 'Request demo', 'booqi-classic' ); ?></a>
			</div>
			<div class="homepage-proof__spotlight-visual" aria-hidden="true">
				<div class="homepage-proof__spotlight-orbit homepage-proof__spotlight-orbit--one"></div>
				<div class="homepage-proof__spotlight-orbit homepage-proof__spotlight-orbit--two"></div>
				<div class="homepage-proof__spotlight-core"></div>
				<div class="homepage-proof__spotlight-mini homepage-proof__spotlight-mini--a"></div>
				<div class="homepage-proof__spotlight-mini homepage-proof__spotlight-mini--b"></div>
				<div class="homepage-proof__spotlight-mini homepage-proof__spotlight-mini--c"></div>
			</div>
		</div>
		<div class="homepage-proof__grid">
			<?php foreach ( $proof_cards as $proof_card ) : ?>
				<article class="homepage-proof__card stat-card">
					<h3><?php echo esc_html( $proof_card['title'] ); ?></h3>
					<p><?php echo esc_html( $proof_card['description'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section page-section--light homepage-pricing">
	<div class="site-container stack-lg">
		<div class="section-heading section-heading--centered site-reading-width">
			<p class="section-tag"><?php esc_html_e( 'Pricing', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'What we offer', 'booqi-classic' ); ?></h2>
			<p><?php esc_html_e( 'Sell your tickets online and offline!', 'booqi-classic' ); ?></p>
		</div>
		<div class="homepage-pricing__grid">
			<?php foreach ( $pricing_tiers as $pricing_tier ) : ?>
				<article class="homepage-pricing__card<?php echo $pricing_tier['highlight'] ? ' homepage-pricing__card--highlight' : ''; ?>">
					<div class="homepage-pricing__card-header">
						<p class="homepage-pricing__eyebrow"><?php echo esc_html( $pricing_tier['eyebrow'] ); ?></p>
						<h3><?php echo esc_html( $pricing_tier['name'] ); ?></h3>
						<p class="homepage-pricing__price"><?php echo esc_html( $pricing_tier['price'] ); ?></p>
					</div>
					<ul class="homepage-pricing__features">
						<?php foreach ( $pricing_tier['features'] as $tier_feature ) : ?>
							<li><?php echo esc_html( $tier_feature ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a class="button" href="<?php echo esc_url( $pricing_tier['button_url'] ); ?>"><?php echo esc_html( $pricing_tier['button_label'] ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section homepage-faq">
	<div class="site-container stack-lg">
		<div class="section-heading section-heading--centered site-reading-width">
			<p class="section-tag section-tag--accent"><?php esc_html_e( 'FAQ', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'We have all the answers', 'booqi-classic' ); ?></h2>
		</div>
		<div class="homepage-faq__list">
			<?php foreach ( $faq_items as $faq_item ) : ?>
				<details class="homepage-faq__item"<?php echo ! empty( $faq_item['open'] ) ? ' open' : ''; ?>>
					<summary><?php echo esc_html( $faq_item['question'] ); ?></summary>
					<div class="homepage-faq__answer">
						<p><?php echo esc_html( $faq_item['answer'] ); ?></p>
					</div>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section cta-section homepage-final-cta">
	<div class="site-container">
		<div class="cta-card surface-panel homepage-final-cta__card">
			<div class="cta-card__copy">
				<p class="section-tag section-tag--accent"><?php esc_html_e( 'Take the next step', 'booqi-classic' ); ?></p>
				<h2><?php esc_html_e( 'Take the Next Step with Booqi.me', 'booqi-classic' ); ?></h2>
				<p><?php esc_html_e( 'Ready to transform your ticket sales? Request a demo today and discover how Booqi.me can elevate your business.', 'booqi-classic' ); ?></p>
			</div>
			<div class="cta-card__actions">
				<a class="button" href="<?php echo esc_url( home_url( '/book-demo' ) ); ?>"><?php esc_html_e( 'Request demo', 'booqi-classic' ); ?></a>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

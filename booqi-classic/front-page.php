<?php
/**
 * Front page template.
 *
 * @package booqi-classic
 */

$theme_uri = get_template_directory_uri();

$client_logos = array(
	array(
		'name'  => 'Walibi Holland',
		'file'  => 'client-logo-walibi-holland.svg',
		'class' => 'logo-mark-wide',
	),
	array(
		'name'  => 'DierenPark Amersfoort',
		'file'  => 'client-logo-dierenpark-amersfoort.svg',
		'class' => 'logo-mark-tall',
	),
	array(
		'name'  => 'BillyBird',
		'file'  => 'client-logo-billybird.svg',
		'class' => 'logo-mark-standard',
	),
	array(
		'name'  => 'Autoworld',
		'file'  => 'client-logo-autoworld.svg',
		'class' => 'logo-mark-standard',
	),
	array(
		'name'  => 'Plopsa',
		'file'  => 'client-logo-plopsa.svg',
		'class' => 'logo-mark-standard',
	),
	array(
		'name'  => 'Dierenrijk',
		'file'  => 'client-logo-dierenrijk.svg',
		'class' => 'logo-mark-standard',
	),
	array(
		'name'  => 'Slagharen',
		'file'  => 'client-logo-slagharen.svg',
		'class' => 'logo-mark-wide',
	),
	array(
		'name'  => 'Attractiepark Toverland',
		'file'  => 'client-logo-attractiepark-toverland.svg',
		'class' => 'logo-mark-wide',
	),
);

$feature_cards = array(
	array(
		'number' => '01.',
		'text'   => __('Easily sell subscriptions and year passes to your customers.', 'booqi-classic'),
	),
	array(
		'number' => '02.',
		'text'   => __('Integrate your hardware with ease.', 'booqi-classic'),
	),
	array(
		'number' => '03.',
		'text'   => __('Add dynamic pricing to enhance sales.', 'booqi-classic'),
	),
	array(
		'number' => '04.',
		'text'   => __('Connect with your favourite tools.', 'booqi-classic'),
	),
);

$industry_cards = array(
	array(
		'title' => __('Theme Parks', 'booqi-classic'),
		'link'  => home_url('/theme-parks-and-recreational-facilities/'),
		'image' => 'industry-theme-parks-scene.svg',
	),
	array(
		'title' => __("Zoo's", 'booqi-classic'),
		'link'  => home_url('/zoos/'),
		'image' => 'industry-zoos-scene.svg',
	),
	array(
		'title' => __('Musea', 'booqi-classic'),
		'link'  => home_url('/museums/'),
		'image' => 'industry-museums-scene.svg',
	),
	array(
		'title' => __('Swimming Pools', 'booqi-classic'),
		'link'  => home_url('/swimming-pools/'),
		'image' => 'industry-swimming-pools-scene.svg',
	),
);

$benefit_cards = array(
	array(
		'title' => __('Rigid cloud infrastructure', 'booqi-classic'),
		'text'  => __('Your data is securely stored in datacenters in the Netherlands and Germany. Our server architecture has resulted in at least 99.9% uptime over the last months.', 'booqi-classic'),
	),
	array(
		'title' => __('Continuous improvement', 'booqi-classic'),
		'text'  => __('Our software solution is always evolving. We strive to give you the tools needed to quickly adapt to changes in the market.', 'booqi-classic'),
	),
	array(
		'title' => __('Easy to use Dashboard', 'booqi-classic'),
		'text'  => __('With our software, you have full control over your sales offers. Decide for yourself which products you want to offer and customise your range entirely according to your wishes.', 'booqi-classic'),
	),
	array(
		'title' => __('Onboarding, training and support', 'booqi-classic'),
		'text'  => __('Our team is ready seven days a week to assist with onboarding, issues, and ongoing optimisation. We also provide a rich self-help support library.', 'booqi-classic'),
	),
);

$pricing_cards = array(
	array(
		'name'     => __('Starter', 'booqi-classic'),
		'badge'    => '',
		'price'    => __('Free', 'booqi-classic'),
		'subtitle' => __('Free for €1.000 monthly turnover', 'booqi-classic'),
		'items'    => array(
			__('Start selling online tickets right away', 'booqi-classic'),
			__('Access to essential features', 'booqi-classic'),
			__('No offline sales', 'booqi-classic'),
			__('No onboarding package', 'booqi-classic'),
			__('No support', 'booqi-classic'),
		),
		'button'   => __('Create Free Account', 'booqi-classic'),
		'link'     => home_url('/create-account/'),
		'class'    => '',
	),
	array(
		'name'     => __('Pro', 'booqi-classic'),
		'badge'    => __('Get all features', 'booqi-classic'),
		'price'    => __('Request your price', 'booqi-classic'),
		'subtitle' => __('Sell your tickets online and offline.', 'booqi-classic'),
		'items'    => array(
			__('All platform features', 'booqi-classic'),
			__('Access to essential features', 'booqi-classic'),
			__('Connect your hardware', 'booqi-classic'),
			__('Training and onboarding package', 'booqi-classic'),
			__('Support over phone, chat and e-mail', 'booqi-classic'),
		),
		'button'   => __('Request Demo', 'booqi-classic'),
		'link'     => home_url('/book-demo/'),
		'class'    => ' price-card-highlight',
	),
);

$faqs = array(
	array(
		'question' => __('How long does it take to set up my ticket shop with Booqi.me?', 'booqi-classic'),
		'answer'   => __('We provide a fully functional ticket shop immediately. The setup process, guided by our team, can have you live within a week, depending on your pace and the number of products.', 'booqi-classic'),
		'open'     => true,
	),
	array(
		'question' => __('Can I test the platform before committing?', 'booqi-classic'),
		'answer'   => __('Yes. The mirrored homepage positions Booqi.me as easy to start with, and the Starter plan plus demo flow make it possible to explore the platform before moving to a broader rollout.', 'booqi-classic'),
		'open'     => false,
	),
	array(
		'question' => __('What are the costs associated with Booqi.me?', 'booqi-classic'),
		'answer'   => __('The homepage highlights a free Starter plan up to €1.000 monthly turnover and a Pro plan with custom pricing for the full feature set, hardware connections, onboarding, and support.', 'booqi-classic'),
		'open'     => false,
	),
	array(
		'question' => __('Do you offer customer support?', 'booqi-classic'),
		'answer'   => __('Yes. Booqi.me emphasises onboarding, training, support over phone, chat, and e-mail, plus a support library and help centre for self-service guidance.', 'booqi-classic'),
		'open'     => false,
	),
	array(
		'question' => __('Is the system user-friendly?', 'booqi-classic'),
		'answer'   => __('The product is positioned around a clear dashboard, straightforward sales controls, and visitor-friendly checkout experiences for online and offline ticketing.', 'booqi-classic'),
		'open'     => false,
	),
	array(
		'question' => __('Can Booqi.me integrate with my existing systems?', 'booqi-classic'),
		'answer'   => __('Yes. Booqi.me promotes hardware integrations and connections with your favourite tools, making it easier to fit the platform into your existing operations.', 'booqi-classic'),
		'open'     => false,
	),
);

get_header();
?>
<section class="hero section">
	<div class="container hero-shell">
		<div class="hero-copy hero-copy-centered">
			<p class="eyebrow"><?php esc_html_e('Effortless ticketing', 'booqi-classic'); ?></p>
			<h1><?php esc_html_e('Enhance your ticketing experience', 'booqi-classic'); ?></h1>
			<p class="hero-lead"><?php esc_html_e('Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry. Find out why numerous locations choose us to arrange their entrance for them.', 'booqi-classic'); ?></p>
			<div class="hero-actions hero-actions-centered">
				<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request demo', 'booqi-classic'); ?></a>
			</div>
		</div>
		<div class="hero-visual" aria-hidden="true">
			<div class="hero-composition">
				<figure class="hero-product-shot">
					<img src="<?php echo esc_url($theme_uri . '/assets/images/hero-product-graphic.svg'); ?>" alt="">
				</figure>
				<div class="hero-float-card hero-float-card-revenue">
					<p><?php esc_html_e('Revenue', 'booqi-classic'); ?></p>
					<strong>€24.5K</strong>
					<span>+18%</span>
				</div>
				<div class="hero-float-card hero-float-card-sales">
					<p><?php esc_html_e('Sales Today', 'booqi-classic'); ?></p>
					<ul>
						<li><?php esc_html_e('Tickets', 'booqi-classic'); ?></li>
						<li><?php esc_html_e('Subscriptions', 'booqi-classic'); ?></li>
						<li><?php esc_html_e('Upsells', 'booqi-classic'); ?></li>
						<li><?php esc_html_e('Vouchers', 'booqi-classic'); ?></li>
					</ul>
				</div>
				<div class="hero-float-card hero-float-card-visitors">
					<p><?php esc_html_e('Visitors', 'booqi-classic'); ?></p>
					<strong>1,284</strong>
					<small><?php esc_html_e('Check-ins', 'booqi-classic'); ?></small>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="logo-strip section" aria-label="<?php esc_attr_e('Client logos', 'booqi-classic'); ?>">
	<div class="container logo-strip-shell">
		<p class="logo-strip-label"><?php esc_html_e('Used by the world’s most incredible teams:', 'booqi-classic'); ?></p>
		<div class="logo-strip-marquee">
			<ul class="logo-strip-track" role="list">
				<?php foreach ($client_logos as $logo) : ?>
					<li class="logo-mark <?php echo esc_attr($logo['class']); ?>">
						<img src="<?php echo esc_url($theme_uri . '/assets/images/' . $logo['file']); ?>" alt="<?php echo esc_attr($logo['name']); ?>">
					</li>
				<?php endforeach; ?>
				<?php foreach ($client_logos as $logo) : ?>
					<li class="logo-mark <?php echo esc_attr($logo['class']); ?>" aria-hidden="true">
						<img src="<?php echo esc_url($theme_uri . '/assets/images/' . $logo['file']); ?>" alt="">
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>

<section id="features" class="section section-soft section-features">
	<div class="container section-heading section-heading-centered">
		<p class="eyebrow"><?php esc_html_e('Features', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('We have got what it takes!', 'booqi-classic'); ?></h2>
		<p><?php esc_html_e('We provide an easy platform for your visitors. While giving you the possibility to manage and control with just a mouse click.', 'booqi-classic'); ?></p>
	</div>
	<div class="container feature-grid">
		<?php foreach ($feature_cards as $feature) : ?>
			<article class="feature-card">
				<p class="feature-number"><?php echo esc_html($feature['number']); ?></p>
				<p><?php echo esc_html($feature['text']); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
	<div class="container section-actions section-actions-centered">
		<a class="button button-secondary" href="<?php echo esc_url(home_url('/features/')); ?>"><?php esc_html_e('See all our features', 'booqi-classic'); ?></a>
	</div>
</section>

<section id="industries" class="section section-industries">
	<div class="container section-heading section-heading-centered">
		<p class="eyebrow"><?php esc_html_e('Industries', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('The right solution for your business needs', 'booqi-classic'); ?></h2>
		<p><?php esc_html_e('Focus on your sales and managing your customers and let us do the rest.', 'booqi-classic'); ?></p>
	</div>
	<div class="container industry-grid">
		<?php foreach ($industry_cards as $industry) : ?>
			<article class="industry-card">
				<a class="industry-card-link-wrap" href="<?php echo esc_url($industry['link']); ?>">
					<div class="industry-card-body">
						<p class="industry-card-kicker"><?php esc_html_e('Industries', 'booqi-classic'); ?></p>
						<h3><?php echo esc_html($industry['title']); ?></h3>
						<span class="industry-card-link"><?php esc_html_e('Explore industry', 'booqi-classic'); ?></span>
					</div>
					<figure class="industry-card-media">
						<img src="<?php echo esc_url($theme_uri . '/assets/images/' . $industry['image']); ?>" alt="<?php echo esc_attr($industry['title']); ?>">
					</figure>
				</a>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<section class="section section-proof">
	<div class="container proof-shell">
		<div class="proof-intro">
			<div class="section-heading proof-heading">
				<p class="eyebrow"><?php esc_html_e('Why Booqi.me', 'booqi-classic'); ?></p>
				<h2><?php esc_html_e('Focus on your sales and managing your customers and let us do the rest:', 'booqi-classic'); ?></h2>
			</div>
			<div class="proof-spotlight">
				<p><?php esc_html_e('Enhance every aspect of your business sales, ensuring satisfaction, loyalty, and unparalleled service. Thanks to AI of course.', 'booqi-classic'); ?></p>
				<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request demo', 'booqi-classic'); ?></a>
			</div>
		</div>
		<div class="benefit-grid">
			<?php foreach ($benefit_cards as $benefit) : ?>
				<article class="benefit-card">
					<h3><?php echo esc_html($benefit['title']); ?></h3>
					<p><?php echo esc_html($benefit['text']); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="pricing" class="section section-soft section-pricing">
	<div class="container section-heading section-heading-centered">
		<p class="eyebrow"><?php esc_html_e('Pricing', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('What we offer', 'booqi-classic'); ?></h2>
		<p><?php esc_html_e('Sell your tickets online and offline!', 'booqi-classic'); ?></p>
	</div>
	<div class="container pricing-grid">
		<?php foreach ($pricing_cards as $card) : ?>
			<article class="price-card<?php echo esc_attr($card['class']); ?>">
				<div class="price-card-header">
					<?php if (! empty($card['badge'])) : ?>
						<p class="price-badge"><?php echo esc_html($card['badge']); ?></p>
					<?php endif; ?>
					<h3><?php echo esc_html($card['name']); ?></h3>
					<p class="price"><?php echo esc_html($card['price']); ?></p>
				</div>
				<div class="price-card-body">
					<p class="price-subtitle"><?php echo esc_html($card['subtitle']); ?></p>
					<ul>
						<?php foreach ($card['items'] as $item) : ?>
							<li><?php echo esc_html($item); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<a class="button<?php echo $card['class'] ? ' button-light' : ' button-secondary'; ?>" href="<?php echo esc_url($card['link']); ?>"><?php echo esc_html($card['button']); ?></a>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<section id="faq" class="section section-faq">
	<div class="container section-heading section-heading-centered">
		<p class="eyebrow"><?php esc_html_e('FAQ', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('We have all the answers', 'booqi-classic'); ?></h2>
	</div>
	<div class="container faq-list">
		<?php foreach ($faqs as $faq) : ?>
			<details class="faq-item"<?php echo $faq['open'] ? ' open' : ''; ?>>
				<summary><?php echo esc_html($faq['question']); ?></summary>
				<p><?php echo esc_html($faq['answer']); ?></p>
			</details>
		<?php endforeach; ?>
	</div>
</section>

<section class="section section-cta-wrap">
	<div class="container cta cta-centered">
		<div>
			<h2><?php esc_html_e('Take the Next Step with Booqi.me', 'booqi-classic'); ?></h2>
			<p><?php esc_html_e('Ready to transform your ticket sales? Request a demo today and discover how Booqi.me can elevate your business.', 'booqi-classic'); ?></p>
		</div>
		<a class="button button-light" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request demo', 'booqi-classic'); ?></a>
	</div>
</section>
<?php
get_footer();

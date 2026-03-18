<?php
/**
 * Front page template.
 *
 * @package booqi-classic
 */

get_header();
?>
<section class="hero section">
	<div class="container hero-grid">
		<div class="hero-content">
			<p class="hero-eyebrow"><?php esc_html_e('Booqi.me', 'booqi-classic'); ?></p>
			<h1><?php esc_html_e('Enhance your ticketing experience', 'booqi-classic'); ?></h1>
			<p class="hero-copy"><?php esc_html_e('Booqi.me offers the most feature-rich ticketing platform for organisations in the leisure industry. Sell online and offline tickets, subscriptions, vouchers and upsells in one seamless flow.', 'booqi-classic'); ?></p>
			<a class="button button-hero" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request demo', 'booqi-classic'); ?></a>
		</div>
		<div class="hero-art">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-illustration.svg'); ?>" alt="Booqi dashboard preview">
		</div>
	</div>
</section>

<section class="stats-strip" aria-label="<?php esc_attr_e('Key metrics', 'booqi-classic'); ?>">
	<div class="container stats-grid">
		<div class="stat-pill">Revenue</div>
		<div class="stat-pill">Sales Today</div>
		<div class="stat-pill">Tickets</div>
		<div class="stat-pill">Subscriptions</div>
		<div class="stat-pill">Upsells</div>
		<div class="stat-pill">Vouchers</div>
		<div class="stat-pill">Visitors</div>
		<div class="stat-pill">Check-ins</div>
	</div>
</section>

<section class="section logo-strip" aria-label="<?php esc_attr_e('Client strip', 'booqi-classic'); ?>">
	<div class="container">
		<p class="section-label"><?php esc_html_e('Used by the world’s most incredible teams:', 'booqi-classic'); ?></p>
		<ul class="logo-list">
			<li><?php esc_html_e('Theme Parks', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Zoo’s', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Musea', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Swimming Pools', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Recreation', 'booqi-classic'); ?></li>
		</ul>
	</div>
</section>

<section class="section section-features">
	<div class="container">
		<p class="section-kicker"><?php esc_html_e('Features', 'booqi-classic'); ?></p>
		<div class="section-head split-head">
			<h2><?php esc_html_e('We have got what it takes!', 'booqi-classic'); ?></h2>
			<a class="button button-outline-dark" href="<?php echo esc_url(home_url('/features/')); ?>"><?php esc_html_e('See all our features', 'booqi-classic'); ?></a>
		</div>
		<div class="feature-grid">
			<article class="feature-card">
				<p class="feature-index">01.</p>
				<h3><?php esc_html_e('Easily sell subscriptions and year passes', 'booqi-classic'); ?></h3>
				<p><?php esc_html_e('Create recurring products and long-term passes tailored to your venue and your visitors.', 'booqi-classic'); ?></p>
			</article>
			<article class="feature-card">
				<p class="feature-index">02.</p>
				<h3><?php esc_html_e('Integrate your hardware with ease', 'booqi-classic'); ?></h3>
				<p><?php esc_html_e('Connect turnstiles, scanners and point-of-sale hardware quickly with practical support.', 'booqi-classic'); ?></p>
			</article>
			<article class="feature-card">
				<p class="feature-index">03.</p>
				<h3><?php esc_html_e('Add dynamic pricing to enhance sales', 'booqi-classic'); ?></h3>
				<p><?php esc_html_e('Use smart pricing rules to increase conversion and maximize revenue over time.', 'booqi-classic'); ?></p>
			</article>
			<article class="feature-card">
				<p class="feature-index">04.</p>
				<h3><?php esc_html_e('Connect with your favourite tools', 'booqi-classic'); ?></h3>
				<p><?php esc_html_e('Integrate with your existing CRM, marketing and analytics stack to keep everything aligned.', 'booqi-classic'); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="section industries-section">
	<div class="container">
		<p class="section-kicker"><?php esc_html_e('Industries', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('The right solution for your business needs', 'booqi-classic'); ?></h2>
		<div class="industry-grid">
			<article class="industry-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-themepark.svg'); ?>" alt="Theme Parks"><h3><?php esc_html_e('Theme Parks', 'booqi-classic'); ?></h3></article>
			<article class="industry-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-zoo.svg'); ?>" alt="Zoos"><h3><?php esc_html_e("Zoo's", 'booqi-classic'); ?></h3></article>
			<article class="industry-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-museum.svg'); ?>" alt="Musea"><h3><?php esc_html_e('Musea', 'booqi-classic'); ?></h3></article>
			<article class="industry-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-themepark.svg'); ?>" alt="Swimming Pools"><h3><?php esc_html_e('Swimming Pools', 'booqi-classic'); ?></h3></article>
		</div>
	</div>
</section>

<section class="section benefits-section section-soft">
	<div class="container benefits-grid">
		<div>
			<p class="section-kicker"><?php esc_html_e('Industries', 'booqi-classic'); ?></p>
			<h2><?php esc_html_e('Focus on your sales and customers and let us do the rest', 'booqi-classic'); ?></h2>
		</div>
		<ul class="benefits-list">
			<li><?php esc_html_e('Rigid cloud infrastructure', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Continuous improvement', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Easy-to-use dashboard', 'booqi-classic'); ?></li>
			<li><?php esc_html_e('Onboarding, training and support', 'booqi-classic'); ?></li>
		</ul>
	</div>
</section>

<section class="section pricing-section">
	<div class="container">
		<p class="section-kicker"><?php esc_html_e('Pricing', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('What we offer', 'booqi-classic'); ?></h2>
		<p class="pricing-intro"><?php esc_html_e('Sell your tickets online and offline with a plan that fits your growth stage.', 'booqi-classic'); ?></p>
		<div class="pricing-grid">
			<article class="price-card">
				<h3><?php esc_html_e('Starter', 'booqi-classic'); ?></h3>
				<p class="price-amount"><?php esc_html_e('Free', 'booqi-classic'); ?></p>
				<p><?php esc_html_e('Free for €1.000 monthly turnover', 'booqi-classic'); ?></p>
				<ul>
					<li><?php esc_html_e('Start selling online tickets right away', 'booqi-classic'); ?></li>
					<li><?php esc_html_e('Access to essential features', 'booqi-classic'); ?></li>
					<li><?php esc_html_e('No offline sales', 'booqi-classic'); ?></li>
				</ul>
				<a class="button button-outline-dark" href="<?php echo esc_url(home_url('/create-account/')); ?>"><?php esc_html_e('Create Free Account', 'booqi-classic'); ?></a>
			</article>
			<article class="price-card price-card-highlight">
				<h3><?php esc_html_e('Pro', 'booqi-classic'); ?></h3>
				<p class="price-amount"><?php esc_html_e('Request your price', 'booqi-classic'); ?></p>
				<ul>
					<li><?php esc_html_e('All platform features', 'booqi-classic'); ?></li>
					<li><?php esc_html_e('Connect your hardware', 'booqi-classic'); ?></li>
					<li><?php esc_html_e('Training and onboarding package', 'booqi-classic'); ?></li>
					<li><?php esc_html_e('Support over phone, chat and email', 'booqi-classic'); ?></li>
				</ul>
				<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Get all features', 'booqi-classic'); ?></a>
			</article>
		</div>
	</div>
</section>

<section class="section faq-section section-soft">
	<div class="container faq-wrap">
		<p class="section-kicker"><?php esc_html_e('FAQ', 'booqi-classic'); ?></p>
		<h2><?php esc_html_e('We have all the answers', 'booqi-classic'); ?></h2>
		<div class="faq-list">
			<details open>
				<summary><?php esc_html_e('How long does it take to set up my ticket shop with Booqi.me?', 'booqi-classic'); ?></summary>
				<p><?php esc_html_e('We provide a fully functional ticket shop immediately and most customers can be live within a week, depending on setup complexity.', 'booqi-classic'); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e('Can I test the platform before committing?', 'booqi-classic'); ?></summary>
				<p><?php esc_html_e('Yes, you can request a demo and validate the platform against your venue workflows before moving forward.', 'booqi-classic'); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e('What are the costs associated with Booqi.me?', 'booqi-classic'); ?></summary>
				<p><?php esc_html_e('Costs depend on your chosen package and required setup. The starter tier is free up to a monthly turnover threshold.', 'booqi-classic'); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e('Do you offer customer support?', 'booqi-classic'); ?></summary>
				<p><?php esc_html_e('Yes. Booqi provides onboarding guidance and support via phone, chat and email.', 'booqi-classic'); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e('Is the system user-friendly?', 'booqi-classic'); ?></summary>
				<p><?php esc_html_e('The platform is designed for daily operational use, with a straightforward dashboard and clear flows.', 'booqi-classic'); ?></p>
			</details>
			<details>
				<summary><?php esc_html_e('Can Booqi.me integrate with my existing systems?', 'booqi-classic'); ?></summary>
				<p><?php esc_html_e('Yes. Booqi can integrate with common tools and hardware used by leisure venues.', 'booqi-classic'); ?></p>
			</details>
		</div>
	</div>
</section>

<section class="section">
	<div class="container cta">
		<h2><?php esc_html_e('Take the Next Step with Booqi.me', 'booqi-classic'); ?></h2>
		<p><?php esc_html_e('Ready to transform your ticket sales? Request a demo today and discover how Booqi.me can elevate your business.', 'booqi-classic'); ?></p>
		<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request Demo', 'booqi-classic'); ?></a>
	</div>
</section>
<?php
get_footer();

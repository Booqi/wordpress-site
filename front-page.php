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
		<div>
			<p class="eyebrow"><?php esc_html_e('Booqi.me', 'booqi-classic'); ?></p>
			<h1><?php esc_html_e('Enhance your ticketing experience', 'booqi-classic'); ?></h1>
			<p><?php esc_html_e('Sell tickets online and offline, manage subscriptions and check-ins, and unlock more revenue with a streamlined all-in-one platform.', 'booqi-classic'); ?></p>
			<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request demo', 'booqi-classic'); ?></a>
		</div>
		<div class="hero-art">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-illustration.svg'); ?>" alt="Dashboard preview illustration">
		</div>
	</div>
</section>

<section class="section section-soft">
	<div class="container">
		<h2><?php esc_html_e('We have got what it takes!', 'booqi-classic'); ?></h2>
		<div class="feature-grid">
			<article><h3>01.</h3><p><?php esc_html_e('Easily sell subscriptions and year passes to your customers.', 'booqi-classic'); ?></p></article>
			<article><h3>02.</h3><p><?php esc_html_e('Integrate your hardware with ease.', 'booqi-classic'); ?></p></article>
			<article><h3>03.</h3><p><?php esc_html_e('Add dynamic pricing to enhance sales.', 'booqi-classic'); ?></p></article>
			<article><h3>04.</h3><p><?php esc_html_e('Connect with your favourite tools.', 'booqi-classic'); ?></p></article>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<h2><?php esc_html_e('The right solution for your business needs', 'booqi-classic'); ?></h2>
		<div class="industry-grid">
			<article><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-themepark.svg'); ?>" alt="Theme Park"><h3><?php esc_html_e('Theme Parks', 'booqi-classic'); ?></h3></article>
			<article><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-zoo.svg'); ?>" alt="Zoo"><h3><?php esc_html_e("Zoo's", 'booqi-classic'); ?></h3></article>
			<article><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/industry-museum.svg'); ?>" alt="Museum"><h3><?php esc_html_e('Musea', 'booqi-classic'); ?></h3></article>
		</div>
	</div>
</section>

<section class="section section-soft">
	<div class="container pricing-grid">
		<article class="price-card">
			<h2><?php esc_html_e('Starter', 'booqi-classic'); ?></h2>
			<p class="price"><?php esc_html_e('Free', 'booqi-classic'); ?></p>
			<p><?php esc_html_e('Free for €1.000 monthly turnover', 'booqi-classic'); ?></p>
			<ul>
				<li><?php esc_html_e('Start selling online tickets right away', 'booqi-classic'); ?></li>
				<li><?php esc_html_e('Access to essential features', 'booqi-classic'); ?></li>
			</ul>
		</article>
		<article class="price-card price-card-highlight">
			<h2><?php esc_html_e('Pro', 'booqi-classic'); ?></h2>
			<p class="price"><?php esc_html_e('Request your price', 'booqi-classic'); ?></p>
			<ul>
				<li><?php esc_html_e('All platform features', 'booqi-classic'); ?></li>
				<li><?php esc_html_e('Connect your hardware', 'booqi-classic'); ?></li>
				<li><?php esc_html_e('Training and onboarding package', 'booqi-classic'); ?></li>
			</ul>
			<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Get all features', 'booqi-classic'); ?></a>
		</article>
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

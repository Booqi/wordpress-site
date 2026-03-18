<?php
/**
 * Footer template.
 *
 * @package booqi-classic
 */

$footer_support_links = array(
	array(
		'label' => __('Support', 'booqi-classic'),
		'url'   => 'https://support.booqi.me/nl/',
	),
	array(
		'label' => __('Helpcentrum', 'booqi-classic'),
		'url'   => 'https://support.booqi.me/nl/',
	),
	array(
		'label' => __('API Documentatie', 'booqi-classic'),
		'url'   => 'https://booqi.docs.apiary.io/#',
	),
	array(
		'label' => __('Roadmap', 'booqi-classic'),
		'url'   => 'https://trello.com/b/Nsg2PG9M/booqime',
	),
	array(
		'label' => __('Status page', 'booqi-classic'),
		'url'   => 'https://status.booqi.app/',
	),
);
?>
</main>
<footer class="site-footer">
	<div class="container footer-top">
		<div class="footer-branding">
			<div class="footer-brand-lockup">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-booqi.svg'); ?>" alt="Booqi.me" width="130" height="32">
				<p class="footer-brand-tag"><?php esc_html_e('Effortless ticketing', 'booqi-classic'); ?></p>
			</div>
			<p><?php esc_html_e('Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry.', 'booqi-classic'); ?></p>
		</div>
		<div class="footer-grid">
			<section class="footer-column" aria-labelledby="footer-booqi-heading">
				<h2 id="footer-booqi-heading"><?php esc_html_e('Booqi.me', 'booqi-classic'); ?></h2>
				<nav aria-label="<?php esc_attr_e('Footer Booqi links', 'booqi-classic'); ?>">
					<?php booqi_classic_footer_primary_links(); ?>
				</nav>
			</section>
			<section class="footer-column" aria-labelledby="footer-useful-links-heading">
				<h2 id="footer-useful-links-heading"><?php esc_html_e('Useful links', 'booqi-classic'); ?></h2>
				<ul class="footer-links">
					<?php foreach ($footer_support_links as $support_link) : ?>
						<li>
							<a href="<?php echo esc_url($support_link['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($support_link['label']); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</section>
			<section class="footer-column footer-column-contact" aria-labelledby="footer-contact-heading">
				<h2 id="footer-contact-heading"><?php esc_html_e('Contact', 'booqi-classic'); ?></h2>
				<address>
					<div class="footer-address-lines">
						<span><?php esc_html_e('Velmolenweg 54a,', 'booqi-classic'); ?></span>
						<span><?php esc_html_e('5404LD', 'booqi-classic'); ?></span>
						<strong><?php esc_html_e('Uden NL', 'booqi-classic'); ?></strong>
					</div>
					<div class="footer-contact-links">
						<a href="tel:+31850044219">+31 85 004 42 19</a>
						<a href="mailto:info@booqi.me">info@booqi.me</a>
					</div>
				</address>
			</section>
		</div>
	</div>
	<div class="container footer-bottom">
		<p>©<?php echo esc_html(wp_date('Y')); ?> <?php esc_html_e('Copyright | All right reserved', 'booqi-classic'); ?></p>
		<div class="footer-legal-links">
			<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Privacy & Cookie Policy', 'booqi-classic'); ?></a>
			<a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>"><?php esc_html_e('General Terms & Conditions', 'booqi-classic'); ?></a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Footer template.
 *
 * @package booqi-v2
 */

$footer_support_links = array(
	array(
		'label' => __('Support', 'booqi-v2'),
		'url'   => 'https://support.booqi.me/nl/',
	),
	array(
		'label' => __('Helpcentrum', 'booqi-v2'),
		'url'   => 'https://support.booqi.me/nl/',
	),
	array(
		'label' => __('API Documentatie', 'booqi-v2'),
		'url'   => 'https://booqi.docs.apiary.io/#',
	),
	array(
		'label' => __('Roadmap', 'booqi-v2'),
		'url'   => 'https://trello.com/b/Nsg2PG9M/booqime',
	),
	array(
		'label' => __('Status page', 'booqi-v2'),
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
				<p class="footer-brand-tag"><?php esc_html_e('Effortless ticketing', 'booqi-v2'); ?></p>
			</div>
			<p><?php esc_html_e('Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry. Find out why numerous locations choose us to arrange their entrance for them.', 'booqi-v2'); ?></p>
		</div>
		<div class="footer-grid">
			<section class="footer-column" aria-labelledby="footer-booqi-heading">
				<h2 id="footer-booqi-heading"><?php esc_html_e('Booqi.me', 'booqi-v2'); ?></h2>
				<nav aria-label="<?php esc_attr_e('Footer Booqi links', 'booqi-v2'); ?>">
					<?php booqi_v2_footer_primary_links(); ?>
				</nav>
			</section>
			<section class="footer-column" aria-labelledby="footer-useful-links-heading">
				<h2 id="footer-useful-links-heading"><?php esc_html_e('Useful links', 'booqi-v2'); ?></h2>
				<ul class="footer-links">
					<?php foreach ($footer_support_links as $support_link) : ?>
						<li>
							<a href="<?php echo esc_url($support_link['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($support_link['label']); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</section>
			<section class="footer-column footer-column-contact" aria-labelledby="footer-contact-heading">
				<h2 id="footer-contact-heading"><?php esc_html_e('Contact', 'booqi-v2'); ?></h2>
				<address>
					<div class="footer-address-lines">
						<span><?php esc_html_e('Velmolenweg 54a,', 'booqi-v2'); ?></span>
						<span><?php esc_html_e('5404LD', 'booqi-v2'); ?></span>
						<strong><?php esc_html_e('Uden NL', 'booqi-v2'); ?></strong>
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
		<p>©<?php echo esc_html(wp_date('Y')); ?> <?php esc_html_e('Copyright | All right reserved', 'booqi-v2'); ?></p>
		<div class="footer-legal-links">
			<a href="<?php echo esc_url(booqi_v2_get_privacy_policy_page_url()); ?>"><?php esc_html_e('Privacy & Cookie Policy', 'booqi-v2'); ?></a>
			<a href="<?php echo esc_url(booqi_v2_get_terms_page_url()); ?>"><?php esc_html_e('General Terms & Conditions', 'booqi-v2'); ?></a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

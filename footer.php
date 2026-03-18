<?php
/**
 * Footer template.
 *
 * @package booqi-classic
 */
?>
</main>
<footer class="site-footer">
	<div class="container footer-grid">
		<div class="footer-brand">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-booqi.svg'); ?>" alt="Booqi.me" width="130" height="32">
			<p><?php esc_html_e('Ready to transform your ticket sales? Request a demo today and discover how Booqi.me can elevate your business.', 'booqi-classic'); ?></p>
			<a class="button" href="<?php echo esc_url(home_url('/book-demo/')); ?>"><?php esc_html_e('Request Demo', 'booqi-classic'); ?></a>
		</div>
		<div>
			<h2><?php esc_html_e('Booqi.me', 'booqi-classic'); ?></h2>
			<ul class="footer-links">
				<li><a href="<?php echo esc_url(home_url('/features/')); ?>"><?php esc_html_e('Features', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/pricing/')); ?>"><?php esc_html_e('Pricing', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About Us', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blog', 'booqi-classic'); ?></a></li>
			</ul>
		</div>
		<div>
			<h2><?php esc_html_e('Useful links', 'booqi-classic'); ?></h2>
			<ul class="footer-links">
				<li><a href="<?php echo esc_url(home_url('/support/')); ?>"><?php esc_html_e('Support', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/helpcentrum/')); ?>"><?php esc_html_e('Helpcentrum', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/api-documentatie/')); ?>"><?php esc_html_e('API Documentatie', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/roadmap/')); ?>"><?php esc_html_e('Roadmap', 'booqi-classic'); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/status-page/')); ?>"><?php esc_html_e('Status page', 'booqi-classic'); ?></a></li>
			</ul>
		</div>
		<div>
			<h2><?php esc_html_e('Contact', 'booqi-classic'); ?></h2>
			<address>
				Velmolenweg 54a,<br>
				5404LD Uden NL<br>
				<a href="tel:+31850044219">+31 85 004 42 19</a><br>
				<a href="mailto:info@booqi.me">info@booqi.me</a>
			</address>
		</div>
	</div>
	<div class="container footer-bottom">
		<p>©<?php echo esc_html(wp_date('Y')); ?> <?php esc_html_e('Booqi.me. All rights reserved', 'booqi-classic'); ?></p>
		<div class="footer-legal">
			<a href="<?php echo esc_url(home_url('/privacy-and-cookie-policy/')); ?>"><?php esc_html_e('Privacy & Cookie Policy', 'booqi-classic'); ?></a>
			<a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>"><?php esc_html_e('General Terms & Conditions', 'booqi-classic'); ?></a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

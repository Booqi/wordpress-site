<?php
/**
 * Footer template.
 *
 * @package booqi-classic
 */
?>
</main>
<footer class="site-footer">
	<div class="container footer-top">
		<div class="footer-branding">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-booqi.svg'); ?>" alt="Booqi.me" width="130" height="32">
			<p><?php esc_html_e('Booqi.me offers the most feature rich ticketing platform to organisations in the leisure industry.', 'booqi-classic'); ?></p>
		</div>
		<div class="footer-grid">
			<div>
				<h2><?php esc_html_e('Booqi.me', 'booqi-classic'); ?></h2>
				<?php booqi_classic_footer_primary_links(); ?>
			</div>
			<div>
				<h2><?php esc_html_e('Useful links', 'booqi-classic'); ?></h2>
				<ul class="footer-links">
					<li><a href="https://support.booqi.me/nl/" rel="noopener noreferrer"><?php esc_html_e('Support', 'booqi-classic'); ?></a></li>
					<li><a href="https://support.booqi.me/nl/" rel="noopener noreferrer"><?php esc_html_e('Helpcentrum', 'booqi-classic'); ?></a></li>
					<li><a href="https://booqi.docs.apiary.io/#" rel="noopener noreferrer"><?php esc_html_e('API Documentation', 'booqi-classic'); ?></a></li>
					<li><a href="https://trello.com/b/Nsg2PG9M/booqime" rel="noopener noreferrer"><?php esc_html_e('Roadmap', 'booqi-classic'); ?></a></li>
					<li><a href="https://status.booqi.app/" rel="noopener noreferrer"><?php esc_html_e('Status page', 'booqi-classic'); ?></a></li>
				</ul>
			</div>
			<div>
				<h2><?php esc_html_e('Contact', 'booqi-classic'); ?></h2>
				<address>
					<span><?php esc_html_e('Velmolenweg 54a,', 'booqi-classic'); ?></span>
					<span><?php esc_html_e('5404LD', 'booqi-classic'); ?></span>
					<strong><?php esc_html_e('Uden NL', 'booqi-classic'); ?></strong>
					<a href="tel:+31850044219">+31 85 004 42 19</a>
					<a href="mailto:info@booqi.me">info@booqi.me</a>
				</address>
			</div>
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

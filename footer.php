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
		<div>
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-booqi.svg'); ?>" alt="Booqi.me" width="130" height="32">
			<p><?php esc_html_e('Effortless ticketing for modern leisure businesses.', 'booqi-classic'); ?></p>
		</div>
		<div>
			<h2><?php esc_html_e('Useful links', 'booqi-classic'); ?></h2>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'fallback_cb'    => false,
					'menu_class'     => 'footer-links',
				)
			);
			?>
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
		<p>©<?php echo esc_html(wp_date('Y')); ?> <?php esc_html_e('Booqi.me. All rights reserved.', 'booqi-classic'); ?></p>
		<p><a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>"><?php esc_html_e('General Terms & Conditions', 'booqi-classic'); ?></a></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Footer template.
 *
 * @package booqi-v2
 */
?>
</main>
<footer class="site-footer">
	<div class="container site-footer__inner">
		<div>
			<p class="site-footer__brand"><?php bloginfo('name'); ?></p>
			<p class="site-footer__copy"><?php bloginfo('description'); ?></p>
		</div>

		<nav class="site-footer__nav" aria-label="<?php esc_attr_e('Footer navigation', 'booqi-v2'); ?>">
			<?php booqi_v2_footer_fallback_menu(); ?>
		</nav>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

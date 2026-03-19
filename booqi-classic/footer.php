<?php
/**
 * The site footer.
 *
 * @package BooqiClassic
 */
?>
	</main>
	<footer class="site-footer">
		<div class="site-container site-footer__grid">
			<div class="site-footer__brand">
				<p class="site-footer__eyebrow"><?php esc_html_e( 'Booqi theme foundation', 'booqi-classic' ); ?></p>
				<h2 class="site-footer__title"><?php bloginfo( 'name' ); ?></h2>
				<p class="site-footer__text"><?php esc_html_e( 'A reusable WordPress base aligned to the bundled Figma references, ready for page-by-page implementation.', 'booqi-classic' ); ?></p>
			</div>
			<div class="site-footer__nav">
				<p class="site-footer__heading"><?php esc_html_e( 'Navigation', 'booqi-classic' ); ?></p>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'site-footer__menu',
						'fallback_cb'    => 'booqi_classic_footer_menu_fallback',
					)
				);
				?>
			</div>
			<div class="site-footer__meta">
				<p class="site-footer__heading"><?php esc_html_e( 'Contact', 'booqi-classic' ); ?></p>
				<p class="site-footer__text"><?php esc_html_e( 'Use this area later for localized contact details, trust signals, or support links.', 'booqi-classic' ); ?></p>
				<a class="button button--ghost button--small" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Start with contact page', 'booqi-classic' ); ?></a>
			</div>
		</div>
		<div class="site-container site-footer__bottom">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
			<p><?php esc_html_e( 'Classic WordPress theme scaffold for future Booqi buildout.', 'booqi-classic' ); ?></p>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * The site footer.
 *
 * @package BooqiClassic
 */
?>
	</main>
	<footer class="site-footer">
		<div class="site-container">
			<div class="site-footer__panel">
				<div class="site-footer__grid">
					<div class="site-footer__brand">
						<p class="site-footer__eyebrow"><?php esc_html_e( 'Global theme shell', 'booqi-classic' ); ?></p>
						<h2 class="site-footer__title"><?php bloginfo( 'name' ); ?></h2>
						<p class="site-footer__text"><?php esc_html_e( 'A cleaner marketing-site foundation shaped by the bundled Figma and screenshot references, ready for page-specific implementation.', 'booqi-classic' ); ?></p>
						<div class="site-footer__cta-row">
							<a class="button button--small" href="<?php echo esc_url( home_url( '/book-demo' ) ); ?>"><?php esc_html_e( 'Book a demo', 'booqi-classic' ); ?></a>
							<a class="button button--ghost button--small" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact sales', 'booqi-classic' ); ?></a>
						</div>
					</div>

					<div class="site-footer__column">
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

					<div class="site-footer__column">
						<p class="site-footer__heading"><?php esc_html_e( 'Product areas', 'booqi-classic' ); ?></p>
						<ul class="site-footer__menu">
							<li><a href="<?php echo esc_url( home_url( '/features' ) ); ?>"><?php esc_html_e( 'Features', 'booqi-classic' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>"><?php esc_html_e( 'Pricing', 'booqi-classic' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/industry' ) ); ?>"><?php esc_html_e( 'Industries', 'booqi-classic' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php esc_html_e( 'About Booqi', 'booqi-classic' ); ?></a></li>
						</ul>
					</div>

					<div class="site-footer__column site-footer__column--meta">
						<p class="site-footer__heading"><?php esc_html_e( 'Foundation notes', 'booqi-classic' ); ?></p>
						<p class="site-footer__text"><?php esc_html_e( 'This shell now covers the reusable header, hero, card, CTA, and footer patterns that future templates can share.', 'booqi-classic' ); ?></p>
						<ul class="site-footer__meta-list">
							<li><?php esc_html_e( 'Rounded card system', 'booqi-classic' ); ?></li>
							<li><?php esc_html_e( 'Refined spacing scale', 'booqi-classic' ); ?></li>
							<li><?php esc_html_e( 'Responsive nav shell', 'booqi-classic' ); ?></li>
						</ul>
					</div>
				</div>

				<div class="site-footer__bottom">
					<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
					<div class="site-footer__legal">
						<a href="<?php echo esc_url( home_url( '/terms-and-conditions' ) ); ?>"><?php esc_html_e( 'Terms', 'booqi-classic' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'booqi-classic' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

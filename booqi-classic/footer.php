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
						<a class="site-footer__brand-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'Booqi.me homepage', 'booqi-classic' ); ?>">
							<span class="site-footer__brand-mark" aria-hidden="true"></span>
							<span class="site-footer__brand-name">Booqi.me</span>
						</a>
					</div>

					<div class="site-footer__column">
						<p class="site-footer__heading"><?php esc_html_e( 'Booqi.me', 'booqi-classic' ); ?></p>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer_company',
								'container'      => false,
								'menu_class'     => 'site-footer__menu',
								'fallback_cb'    => 'booqi_classic_footer_company_menu_fallback',
							)
						);
						?>
					</div>

					<div class="site-footer__column">
						<p class="site-footer__heading"><?php esc_html_e( 'Useful links', 'booqi-classic' ); ?></p>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer_useful',
								'container'      => false,
								'menu_class'     => 'site-footer__menu',
								'fallback_cb'    => 'booqi_classic_footer_useful_menu_fallback',
							)
						);
						?>
					</div>

					<div class="site-footer__column site-footer__column--contact">
						<p class="site-footer__heading"><?php esc_html_e( 'Contact', 'booqi-classic' ); ?></p>
						<address class="site-footer__address">
							<span><?php esc_html_e( 'Velmolenweg 54a,', 'booqi-classic' ); ?></span>
							<span><?php esc_html_e( '5404LD', 'booqi-classic' ); ?></span>
							<strong><?php esc_html_e( 'Uden NL', 'booqi-classic' ); ?></strong>
						</address>
						<ul class="site-footer__menu site-footer__menu--contact">
							<li><a href="<?php echo esc_url( 'tel:+31850044219' ); ?>">+31 85 004 42 19</a></li>
							<li><a href="<?php echo esc_url( 'mailto:info@booqi.me' ); ?>">info@booqi.me</a></li>
						</ul>
					</div>
				</div>

				<div class="site-footer__bottom">
					<p><?php echo esc_html( sprintf( __( '©%s Copyright | All right reserved', 'booqi-classic' ), gmdate( 'Y' ) ) ); ?></p>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_legal',
							'container'      => false,
							'menu_class'     => 'site-footer__legal',
							'fallback_cb'    => 'booqi_classic_footer_legal_menu_fallback',
						)
					);
					?>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

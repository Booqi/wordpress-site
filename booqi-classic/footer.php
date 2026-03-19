<?php
/**
 * The site footer.
 *
 * @package BooqiClassic
 */
?>
<?php
$booqi_footer_company_links = array(
	array(
		'label' => __( 'Features', 'booqi-classic' ),
		'url'   => home_url( '/features' ),
	),
	array(
		'label' => __( 'Pricing', 'booqi-classic' ),
		'url'   => home_url( '/#pricing' ),
	),
	array(
		'label' => __( 'FAQ', 'booqi-classic' ),
		'url'   => home_url( '/#faq' ),
	),
	array(
		'label' => __( 'About Us', 'booqi-classic' ),
		'url'   => home_url( '/about-us' ),
	),
	array(
		'label' => __( 'Blog', 'booqi-classic' ),
		'url'   => home_url( '/blog' ),
	),
);

$booqi_footer_useful_links = array(
	array(
		'label'  => __( 'Support', 'booqi-classic' ),
		'url'    => 'https://support.booqi.me/',
		'target' => '_blank',
	),
	array(
		'label'  => __( 'Helpcentrum', 'booqi-classic' ),
		'url'    => 'https://support.booqi.me/',
		'target' => '_blank',
	),
	array(
		'label'  => __( 'API Documentatie', 'booqi-classic' ),
		'url'    => 'https://booqi.docs.apiary.io/',
		'target' => '_blank',
	),
	array(
		'label'  => __( 'Roadmap', 'booqi-classic' ),
		'url'    => 'https://trello.com/',
		'target' => '_blank',
	),
	array(
		'label'  => __( 'Status page', 'booqi-classic' ),
		'url'    => 'https://status.booqi.app/',
		'target' => '_blank',
	),
);
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
						<p class="site-footer__heading">Booqi.me</p>
						<ul class="site-footer__menu">
							<?php foreach ( $booqi_footer_company_links as $booqi_footer_company_link ) : ?>
								<li>
									<a href="<?php echo esc_url( $booqi_footer_company_link['url'] ); ?>">
										<?php echo esc_html( $booqi_footer_company_link['label'] ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="site-footer__column">
						<p class="site-footer__heading"><?php esc_html_e( 'Useful links', 'booqi-classic' ); ?></p>
						<ul class="site-footer__menu">
							<?php foreach ( $booqi_footer_useful_links as $booqi_footer_useful_link ) : ?>
								<li>
									<a href="<?php echo esc_url( $booqi_footer_useful_link['url'] ); ?>" target="<?php echo esc_attr( $booqi_footer_useful_link['target'] ); ?>" rel="noreferrer noopener">
										<?php echo esc_html( $booqi_footer_useful_link['label'] ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="site-footer__column site-footer__column--contact">
						<p class="site-footer__heading"><?php esc_html_e( 'Contact', 'booqi-classic' ); ?></p>
						<address class="site-footer__address">
							<span>Velmolenweg 54a,</span>
							<span>5404LD</span>
							<strong>Uden NL</strong>
						</address>
						<ul class="site-footer__menu site-footer__menu--contact">
							<li><a href="tel:+31850044219">+31 85 004 42 19</a></li>
							<li><a href="mailto:info@booqi.me">info@booqi.me</a></li>
						</ul>
					</div>
				</div>

				<div class="site-footer__bottom">
					<p><?php echo esc_html( sprintf( __( '©%s Copyright | All right reserved', 'booqi-classic' ), gmdate( 'Y' ) ) ); ?></p>
					<div class="site-footer__legal">
						<a href="<?php echo esc_url( home_url( '/privacy-cookie-policy' ) ); ?>"><?php esc_html_e( 'Privacy & Cookie Policy', 'booqi-classic' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/terms-and-conditions' ) ); ?>"><?php esc_html_e( 'General Terms & Conditions', 'booqi-classic' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

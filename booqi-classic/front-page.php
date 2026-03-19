<?php
/**
 * Front page scaffold.
 *
 * @package BooqiClassic
 */

get_header();
?>
<section class="hero-section page-section page-section--hero">
	<div class="site-container hero-grid">
		<div class="hero-copy">
			<p class="section-tag section-tag--accent"><?php esc_html_e( 'Theme foundation', 'booqi-classic' ); ?></p>
			<h1 class="hero-title"><?php esc_html_e( 'A sharper global shell for Booqi’s modern WordPress marketing site.', 'booqi-classic' ); ?></h1>
			<p class="hero-text"><?php esc_html_e( 'The updated foundation now reflects the Figma direction more closely: dark premium surfaces, bright mint emphasis, rounded interface panels, and clearer hierarchy across the reusable header, hero, cards, CTA, and footer.', 'booqi-classic' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( home_url( '/book-demo' ) ); ?>"><?php esc_html_e( 'Book a demo', 'booqi-classic' ); ?></a>
				<a class="button button--ghost" href="<?php echo esc_url( home_url( '/features' ) ); ?>"><?php esc_html_e( 'Explore the system', 'booqi-classic' ); ?></a>
			</div>
			<ul class="hero-highlights">
				<li><?php esc_html_e( 'Refined header alignment and CTA treatment', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Reusable cards and polished section spacing', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Responsive shell ready for page-by-page buildout', 'booqi-classic' ); ?></li>
			</ul>
		</div>
		<div class="hero-panel surface-panel">
			<div class="hero-panel__chrome">
				<span></span><span></span><span></span>
			</div>
			<div class="hero-panel__body">
				<div class="hero-panel__intro stat-card stat-card--highlight">
					<p class="stat-card__label"><?php esc_html_e( 'Shell readiness', 'booqi-classic' ); ?></p>
					<p class="stat-card__value"><?php esc_html_e( 'Design system online', 'booqi-classic' ); ?></p>
					<p class="stat-card__meta"><?php esc_html_e( 'Global tokens and reusable section patterns now provide a cleaner base before homepage sections are implemented in full.', 'booqi-classic' ); ?></p>
				</div>
				<div class="hero-panel__metrics">
					<div class="stat-card">
						<p class="stat-card__label"><?php esc_html_e( 'Header shell', 'booqi-classic' ); ?></p>
						<p class="stat-card__value"><?php esc_html_e( 'Responsive', 'booqi-classic' ); ?></p>
						<p class="stat-card__meta"><?php esc_html_e( 'Desktop navigation plus mobile drawer behavior.', 'booqi-classic' ); ?></p>
					</div>
					<div class="stat-card">
						<p class="stat-card__label"><?php esc_html_e( 'Footer shell', 'booqi-classic' ); ?></p>
						<p class="stat-card__value"><?php esc_html_e( 'Structured', 'booqi-classic' ); ?></p>
						<p class="stat-card__meta"><?php esc_html_e( 'Brand, links, product areas, and legal meta are defined.', 'booqi-classic' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section page-section--light">
	<div class="site-container stack-lg">
		<div class="section-heading section-heading--centered site-reading-width">
			<p class="section-tag"><?php esc_html_e( 'Reusable layout system', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'Core patterns are now stronger, lighter, and easier to reuse.', 'booqi-classic' ); ?></h2>
			<p><?php esc_html_e( 'Rather than rebuilding page-specific content too early, this starter section demonstrates the new base components that future homepage and interior templates can inherit.', 'booqi-classic' ); ?></p>
		</div>
		<div class="feature-grid">
			<article class="content-card feature-card">
				<p class="feature-card__kicker"><?php esc_html_e( 'Design tokens', 'booqi-classic' ); ?></p>
				<h3><?php esc_html_e( 'A clearer visual system', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'Color, spacing, radii, shadow, typography, button, and container rules are standardized so future screens stay cohesive.', 'booqi-classic' ); ?></p>
			</article>
			<article class="content-card feature-card">
				<p class="feature-card__kicker"><?php esc_html_e( 'WordPress shell', 'booqi-classic' ); ?></p>
				<h3><?php esc_html_e( 'Native and maintainable', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'Menus, URLs, semantic regions, and assets remain WordPress-native so the theme stays portable and easy to extend.', 'booqi-classic' ); ?></p>
			</article>
			<article class="content-card feature-card">
				<p class="feature-card__kicker"><?php esc_html_e( 'Future buildout', 'booqi-classic' ); ?></p>
				<h3><?php esc_html_e( 'Ready for real sections', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'The shell is now strong enough to support the homepage, feature pages, and industry templates without reworking the foundation later.', 'booqi-classic' ); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="page-section cta-section">
	<div class="site-container">
		<div class="cta-card surface-panel">
			<div class="cta-card__copy">
				<p class="section-tag section-tag--accent"><?php esc_html_e( 'Next build phase', 'booqi-classic' ); ?></p>
				<h2><?php esc_html_e( 'Use this shell as the baseline for the real Booqi homepage implementation.', 'booqi-classic' ); ?></h2>
				<p><?php esc_html_e( 'The next step should be mapping actual homepage sections from the repository design references onto these reusable patterns instead of inventing page-specific structures from scratch.', 'booqi-classic' ); ?></p>
			</div>
			<div class="cta-card__actions">
				<a class="button" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php esc_html_e( 'Prepare page sections', 'booqi-classic' ); ?></a>
				<a class="button button--ghost" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Review shell details', 'booqi-classic' ); ?></a>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

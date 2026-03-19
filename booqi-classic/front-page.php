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
			<h1 class="hero-title"><?php esc_html_e( 'A clean WordPress base for Booqi’s next-generation marketing site.', 'booqi-classic' ); ?></h1>
			<p class="hero-text"><?php esc_html_e( 'This starter homepage proves the design system, spacing, color palette, and reusable components are wired up before the full page-by-page rebuild begins.', 'booqi-classic' ); ?></p>
			<div class="hero-actions">
				<a class="button" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Request a demo', 'booqi-classic' ); ?></a>
				<a class="button button--ghost" href="<?php echo esc_url( home_url( '/features' ) ); ?>"><?php esc_html_e( 'View future modules', 'booqi-classic' ); ?></a>
			</div>
		</div>
		<div class="hero-panel surface-panel">
			<div class="hero-panel__chrome">
				<span></span><span></span><span></span>
			</div>
			<div class="hero-panel__body">
				<div class="stat-card stat-card--highlight">
					<p class="stat-card__label"><?php esc_html_e( 'Design system', 'booqi-classic' ); ?></p>
					<p class="stat-card__value"><?php esc_html_e( 'Ready', 'booqi-classic' ); ?></p>
					<p class="stat-card__meta"><?php esc_html_e( 'Reusable tokens for layout, type, cards, buttons, and responsive behavior.', 'booqi-classic' ); ?></p>
				</div>
				<div class="hero-panel__metrics">
					<div class="stat-card">
						<p class="stat-card__label"><?php esc_html_e( 'Palette', 'booqi-classic' ); ?></p>
						<p class="stat-card__value"><?php esc_html_e( 'Dark + mint', 'booqi-classic' ); ?></p>
					</div>
					<div class="stat-card">
						<p class="stat-card__label"><?php esc_html_e( 'Components', 'booqi-classic' ); ?></p>
						<p class="stat-card__value"><?php esc_html_e( 'Header, cards, CTA', 'booqi-classic' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section page-section--light">
	<div class="site-container stack-lg">
		<div class="section-heading section-heading--centered">
			<p class="section-tag"><?php esc_html_e( 'Starter content section', 'booqi-classic' ); ?></p>
			<h2><?php esc_html_e( 'Reusable patterns inspired by the bundled Figma reference.', 'booqi-classic' ); ?></h2>
			<p><?php esc_html_e( 'The screenshot and Figma metadata point to a dark foundation, bright mint accent, rounded dashboard-style cards, and generous spacing. This section demonstrates those primitives without prematurely rebuilding full page content.', 'booqi-classic' ); ?></p>
		</div>
		<div class="feature-grid">
			<article class="content-card feature-card">
				<h3><?php esc_html_e( 'Consistent design tokens', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'Colors, typography, radii, shadows, and container widths are centralized for easy iteration as real pages are implemented.', 'booqi-classic' ); ?></p>
			</article>
			<article class="content-card feature-card">
				<h3><?php esc_html_e( 'WordPress-native structure', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'Templates use semantic markup, registered menus, theme supports, and standard WordPress APIs instead of hardcoded structure.', 'booqi-classic' ); ?></p>
			</article>
			<article class="content-card feature-card">
				<h3><?php esc_html_e( 'Future-ready foundation', 'booqi-classic' ); ?></h3>
				<p><?php esc_html_e( 'The scaffold is lightweight enough to support localization, page-specific templates, and later content migration without rework.', 'booqi-classic' ); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="page-section cta-section">
	<div class="site-container">
		<div class="cta-card surface-panel">
			<div>
				<p class="section-tag section-tag--accent"><?php esc_html_e( 'CTA section', 'booqi-classic' ); ?></p>
				<h2><?php esc_html_e( 'Next step: build real Booqi pages on top of this system.', 'booqi-classic' ); ?></h2>
				<p><?php esc_html_e( 'Use this component structure for the homepage, features, industries, pricing, and supporting pages once content implementation begins.', 'booqi-classic' ); ?></p>
			</div>
			<div class="cta-card__actions">
				<a class="button" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><?php esc_html_e( 'Start page buildout', 'booqi-classic' ); ?></a>
				<a class="button button--ghost" href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Review content areas', 'booqi-classic' ); ?></a>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

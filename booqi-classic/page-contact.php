<?php
/**
 * Contact page template.
 *
 * @package BooqiClassic
 */

$contact_cards = array(
	array(
		'label' => __( 'Visit us', 'booqi-classic' ),
		'value' => __( 'Velmolenweg 54a', 'booqi-classic' ),
		'meta'  => __( '5404 LD Uden, The Netherlands', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Call', 'booqi-classic' ),
		'value' => __( '+31 85 004 42 19', 'booqi-classic' ),
		'meta'  => __( 'Talk to the Booqi.me team about sales, onboarding, or platform questions.', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Email', 'booqi-classic' ),
		'value' => __( 'info@booqi.me', 'booqi-classic' ),
		'meta'  => __( 'Share your venue type, timelines, and any integrations you need.', 'booqi-classic' ),
	),
);

get_header();
?>
<section class="page-section page-section--hero marketing-hero">
	<div class="site-container">
		<div class="marketing-hero__grid hero-grid">
			<div class="hero-copy marketing-hero__copy">
				<?php get_template_part( 'template-parts/components/badge', null, array( 'text' => __( 'Contact us', 'booqi-classic' ), 'accent' => true ) ); ?>
				<h1 class="hero-title marketing-hero__title"><?php esc_html_e( 'Let’s talk about your ticketing setup', 'booqi-classic' ); ?></h1>
				<p class="hero-text marketing-hero__text"><?php esc_html_e( 'The Booqi.me contact page is intentionally simple. This custom template gives it a stronger marketing structure while still leaving room for page-builder-free content or a form shortcode in WordPress.', 'booqi-classic' ); ?></p>
			</div>
			<div class="surface-panel hero-panel marketing-hero__panel">
				<div class="hero-panel__chrome" aria-hidden="true"><span></span><span></span><span></span></div>
				<div class="hero-panel__body marketing-metric-grid">
					<?php foreach ( $contact_cards as $card ) : ?>
						<?php get_template_part( 'template-parts/components/stat-card', null, array( 'label' => $card['label'], 'value' => $card['value'], 'meta' => $card['meta'], 'card_class' => 'marketing-contact-stat' ) ); ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container contact-grid">
		<div class="content-card page-card contact-card">
			<header class="page-card__header">
				<p class="section-tag"><?php esc_html_e( 'Start the conversation', 'booqi-classic' ); ?></p>
				<h2 class="page-card__title"><?php esc_html_e( 'Share your venue goals and current setup', 'booqi-classic' ); ?></h2>
			</header>
			<div class="page-card__content entry-content">
				<p><?php esc_html_e( 'Use this page for your preferred contact form, demo intake, or editorial contact copy. The structure is intentionally ready for native WordPress content instead of depending on the generic fallback page template.', 'booqi-classic' ); ?></p>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( trim( get_the_content() ) ) : ?>
						<?php the_content(); ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="surface-panel marketing-copy-card contact-aside">
			<?php get_template_part( 'template-parts/components/section-heading', null, array( 'badge' => __( 'Planning help', 'booqi-classic' ), 'badge_accent' => true, 'title' => __( 'Useful topics to include in your message', 'booqi-classic' ) ) ); ?>
			<ul class="marketing-bullet-list">
				<li><?php esc_html_e( 'Venue type and number of locations', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Ticket types, memberships, or timed-entry needs', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'POS, scanner, kiosk, or turnstile integrations', 'booqi-classic' ); ?></li>
				<li><?php esc_html_e( 'Implementation timing and onboarding requirements', 'booqi-classic' ); ?></li>
			</ul>
		</div>
	</div>
</section>
<?php
get_footer();

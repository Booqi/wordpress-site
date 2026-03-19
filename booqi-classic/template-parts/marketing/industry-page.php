<?php
/**
 * Shared industry page template part.
 *
 * @package BooqiClassic
 */

$defaults = array(
	'badge'             => '',
	'title'             => '',
	'description'       => '',
	'lead'              => '',
	'metrics'           => array(),
	'challenges_title'  => '',
	'challenges'        => array(),
	'solutions_title'   => '',
	'solutions'         => array(),
	'platform_title'    => '',
	'platform_cards'    => array(),
	'workflow_title'    => '',
	'workflow_steps'    => array(),
	'cta_title'         => '',
	'cta_description'   => '',
);

$args = wp_parse_args( $args ?? array(), $defaults );
?>
<section class="page-section page-section--hero marketing-hero marketing-hero--industry">
	<div class="site-container">
		<div class="marketing-hero__grid hero-grid">
			<div class="marketing-hero__copy hero-copy">
				<?php
				get_template_part(
					'template-parts/components/badge',
					null,
					array(
						'text'   => $args['badge'],
						'accent' => true,
					)
				);
				?>
				<h1 class="hero-title marketing-hero__title"><?php echo esc_html( $args['title'] ); ?></h1>
				<p class="hero-text marketing-hero__text"><?php echo esc_html( $args['description'] ); ?></p>
				<?php if ( $args['lead'] ) : ?>
					<p class="marketing-hero__lead"><?php echo esc_html( $args['lead'] ); ?></p>
				<?php endif; ?>
				<div class="hero-actions">
					<?php foreach ( booqi_classic_get_primary_cta_actions() as $action ) : ?>
						<a class="button<?php echo ! empty( $action['class'] ) ? ' ' . esc_attr( $action['class'] ) : ''; ?>" href="<?php echo esc_url( $action['url'] ); ?>"><?php echo esc_html( $action['label'] ); ?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="marketing-hero__panel surface-panel hero-panel marketing-hero__panel">
				<div class="hero-panel__chrome" aria-hidden="true"><span></span><span></span><span></span></div>
				<div class="hero-panel__body marketing-metric-grid">
					<?php foreach ( $args['metrics'] as $metric ) : ?>
						<?php
						get_template_part(
							'template-parts/components/stat-card',
							null,
							array(
								'card_class' => ! empty( $metric['highlight'] ) ? 'stat-card--highlight' : '',
								'label'      => $metric['label'],
								'value'      => $metric['value'],
								'meta'       => $metric['meta'],
							)
						);
						?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section marketing-section">
	<div class="site-container marketing-two-column">
		<div class="marketing-copy-card surface-panel">
			<?php
			get_template_part(
				'template-parts/components/section-heading',
				null,
				array(
					'badge'       => __( 'Challenges', 'booqi-classic' ),
					'badge_accent'=> true,
					'title'       => $args['challenges_title'],
				)
			);
			?>
			<ul class="marketing-bullet-list">
				<?php foreach ( $args['challenges'] as $challenge ) : ?>
					<li><?php echo esc_html( $challenge ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="marketing-copy-card marketing-copy-card--light content-card">
			<?php
			get_template_part(
				'template-parts/components/section-heading',
				null,
				array(
					'badge'       => __( 'Solution', 'booqi-classic' ),
					'badge_accent'=> true,
					'title'       => $args['solutions_title'],
				)
			);
			?>
			<ul class="marketing-bullet-list marketing-bullet-list--dark">
				<?php foreach ( $args['solutions'] as $solution ) : ?>
					<li><?php echo esc_html( $solution ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>

<section class="page-section page-section--light marketing-section">
	<div class="site-container">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'badge'        => __( 'Why Choose Booqi.me?', 'booqi-classic' ),
				'badge_accent' => true,
				'title'        => $args['platform_title'],
				'alignment'    => 'centered',
			)
		);
		?>
		<div class="feature-grid marketing-feature-grid">
			<?php foreach ( $args['platform_cards'] as $card ) : ?>
				<?php
				get_template_part(
					'template-parts/components/content-card',
					null,
					array(
						'card_class'    => 'feature-card marketing-feature-card',
						'before_title'  => '<p class="feature-card__kicker">' . esc_html( $card['kicker'] ) . '</p>',
						'title'         => $card['title'],
						'text'          => $card['text'],
					)
				);
				?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="page-section marketing-section">
	<div class="site-container">
		<?php
		get_template_part(
			'template-parts/components/section-heading',
			null,
			array(
				'badge'        => __( 'Operational Workflow', 'booqi-classic' ),
				'badge_accent' => true,
				'title'        => $args['workflow_title'],
			)
		);
		?>
		<ol class="marketing-process">
			<?php foreach ( $args['workflow_steps'] as $index => $step ) : ?>
				<li class="marketing-process__item surface-panel">
					<span class="marketing-process__index"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
					<h3><?php echo esc_html( $step['title'] ); ?></h3>
					<p><?php echo esc_html( $step['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
</section>

<?php
get_template_part(
	'template-parts/components/cta-block',
	null,
	array(
		'badge'        => __( 'Take the next step with Booqi.me', 'booqi-classic' ),
		'badge_accent' => true,
		'title'        => $args['cta_title'],
		'description'  => $args['cta_description'],
		'actions'      => booqi_classic_get_primary_cta_actions(),
	)
);

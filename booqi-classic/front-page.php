<?php
/**
 * Front page template.
 *
 * @package BooqiClassic
 */

$homepage_content = booqi_classic_get_homepage_content();

get_header();

get_template_part(
	'template-parts/home/hero',
	null,
	array(
		'stats' => $homepage_content['hero_stats'],
	)
);

get_template_part(
	'template-parts/home/logo-strip',
	null,
	array(
		'logos' => $homepage_content['client_logos'],
	)
);

get_template_part(
	'template-parts/home/features',
	null,
	array(
		'items' => $homepage_content['feature_spotlight_items'],
	)
);

get_template_part(
	'template-parts/home/industries',
	null,
	array(
		'cards' => $homepage_content['industry_cards'],
	)
);

get_template_part(
	'template-parts/home/platform-proof',
	null,
	array(
		'cards' => $homepage_content['proof_cards'],
	)
);

get_template_part(
	'template-parts/home/pricing',
	null,
	array(
		'tiers' => $homepage_content['pricing_tiers'],
	)
);

get_template_part(
	'template-parts/home/faq',
	null,
	array(
		'items' => $homepage_content['faq_items'],
	)
);

get_template_part( 'template-parts/home/final-cta' );

get_footer();

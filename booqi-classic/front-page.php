<?php
/**
 * Front page template.
 *
 * @package BooqiClassic
 */

$hero_stats = array(
	array(
		'label' => __( 'Revenue', 'booqi-classic' ),
		'value' => __( '€ 12,480', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Sales Today', 'booqi-classic' ),
		'value' => __( '184 orders', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Tickets', 'booqi-classic' ),
		'value' => __( '2,416', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Subscriptions', 'booqi-classic' ),
		'value' => __( '318 active', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Upsells', 'booqi-classic' ),
		'value' => __( '34 today', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Vouchers', 'booqi-classic' ),
		'value' => __( '96 redeemed', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Visitors', 'booqi-classic' ),
		'value' => __( '1,284 expected', 'booqi-classic' ),
	),
	array(
		'label' => __( 'Check-ins', 'booqi-classic' ),
		'value' => __( '742 scanned', 'booqi-classic' ),
	),
);

$client_logos = array(
	array(
		'name' => 'Walibi Holland',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-walibi-holland.svg' ),
	),
	array(
		'name' => 'DierenPark Amersfoort',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-dierenpark-amersfoort.svg' ),
	),
	array(
		'name' => 'BillyBird',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-billybird.svg' ),
	),
	array(
		'name' => 'Autoworld',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-autoworld.svg' ),
	),
	array(
		'name' => 'Plopsa',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-plopsa.svg' ),
	),
	array(
		'name' => 'Dierenrijk',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-dierenrijk.svg' ),
	),
	array(
		'name' => 'Slagharen',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-slagharen.svg' ),
	),
	array(
		'name' => 'Attractiepark Toverland',
		'src'  => booqi_classic_get_image_uri( 'logos/logo-toverland.svg' ),
	),
);

$feature_spotlight_items = array(
	array(
		'number' => '01.',
		'title'  => __( 'Easily sell subscriptions and year passes to your customers', 'booqi-classic' ),
	),
	array(
		'number' => '02.',
		'title'  => __( 'Integrate your hardware with ease', 'booqi-classic' ),
	),
	array(
		'number' => '03.',
		'title'  => __( 'Add dynamic pricing to enhance sales', 'booqi-classic' ),
	),
	array(
		'number' => '04.',
		'title'  => __( 'Connect with your favourite tools', 'booqi-classic' ),
	),
);

$industry_cards = array(
	array(
		'title'       => __( 'Theme Parks', 'booqi-classic' ),
		'description' => __( 'Keep every gate, upsell, and season-pass moment connected in one ticketing flow.', 'booqi-classic' ),
		'url'         => booqi_classic_get_page_url( array( 'theme-parks', 'theme-parks-and-recreational-facilities' ), '/theme-parks' ),
		'accent'      => 'theme-park',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-theme-parks.svg' ),
	),
	array(
		'title'       => __( 'Zoo\'s', 'booqi-classic' ),
		'description' => __( 'Handle day tickets, member access, and flexible visitor planning for animal parks.', 'booqi-classic' ),
		'url'         => home_url( '/zoos' ),
		'accent'      => 'zoo',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-zoos.svg' ),
	),
	array(
		'title'       => __( 'Musea', 'booqi-classic' ),
		'description' => __( 'Launch exhibitions, timed entry, and cultural events with clear visitor control.', 'booqi-classic' ),
		'url'         => booqi_classic_get_page_url( array( 'museums', 'musea' ), '/museums' ),
		'accent'      => 'museum',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-museums.svg' ),
	),
	array(
		'title'       => __( 'Swimming Pools', 'booqi-classic' ),
		'description' => __( 'Balance busy swim sessions, lessons, and recurring bookings from one dashboard.', 'booqi-classic' ),
		'url'         => home_url( '/swimming-pools' ),
		'accent'      => 'pool',
		'image_src'   => booqi_classic_get_image_uri( 'homepage/industry-swimming-pools.svg' ),
	),
);

$proof_cards = array(
	array(
		'title'       => __( 'Rigid cloud infrastructure', 'booqi-classic' ),
		'description' => __( 'Your data is securely stored in datacenters in the Netherlands and Germany. Our server architecture has resulted in at least 99.9% uptime over the last months.', 'booqi-classic' ),
		'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-cloud-infrastructure.svg' ),
	),
	array(
		'title'       => __( 'Continuous improvement', 'booqi-classic' ),
		'description' => __( 'Our software solution is always evolving. We strive to give you the tools needed to quickly adapt to changes in the market.', 'booqi-classic' ),
		'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-continuous-improvement.svg' ),
	),
	array(
		'title'       => __( 'Easy to use Dashboard', 'booqi-classic' ),
		'description' => __( 'With our software, you have full control over your sales offers. Decide for yourself which products you want to offer and customise your range entirely according to your wishes.', 'booqi-classic' ),
		'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-dashboard-control.svg' ),
	),
	array(
		'title'       => __( 'Onboarding, training and support', 'booqi-classic' ),
		'description' => __( 'Our team is ready! Our support desk is available seven days a week to assist you with any inquiries or issues you may encounter. Additionally, we provide a comprehensive support library filled with self-help articles for your convenience.', 'booqi-classic' ),
		'image_src'   => booqi_classic_get_image_uri( 'homepage/proof-support-training.svg' ),
	),
);

$pricing_tiers = array(
	array(
		'name'         => __( 'Starter', 'booqi-classic' ),
		'eyebrow'      => __( 'Free', 'booqi-classic' ),
		'price'        => __( 'Free for €1.000 monthly turnover', 'booqi-classic' ),
		'highlight'    => false,
		'button_label' => __( 'Create Free Account', 'booqi-classic' ),
		'button_url'   => home_url( '/pricing' ),
		'features'     => array(
			__( 'Start selling online tickets right away', 'booqi-classic' ),
			__( 'Access to essential features', 'booqi-classic' ),
			__( 'No offline sales', 'booqi-classic' ),
			__( 'No onboarding package', 'booqi-classic' ),
			__( 'No support', 'booqi-classic' ),
		),
	),
	array(
		'name'         => __( 'Pro', 'booqi-classic' ),
		'eyebrow'      => __( 'Get all features', 'booqi-classic' ),
		'price'        => __( 'Request your price', 'booqi-classic' ),
		'highlight'    => true,
		'button_label' => __( 'Request Demo', 'booqi-classic' ),
		'button_url'   => booqi_classic_get_page_url( array( 'book-demo' ), '/book-demo' ),
		'features'     => array(
			__( 'All platform features', 'booqi-classic' ),
			__( 'Access to essential features', 'booqi-classic' ),
			__( 'Connect your hardware', 'booqi-classic' ),
			__( 'Training and onboarding package', 'booqi-classic' ),
			__( 'Support over phone, chat and e-mail', 'booqi-classic' ),
		),
	),
);

$faq_items = array(
	array(
		'question' => __( 'How long does it take to set up my ticket shop with Booqi.me?', 'booqi-classic' ),
		'answer'   => __( 'We provide a fully functional ticket shop immediately. The setup process, guided by our team, can have you live within a week, depending on your pace and the number of products.', 'booqi-classic' ),
		'open'     => true,
	),
	array(
		'question' => __( 'Can I test the platform before committing?', 'booqi-classic' ),
		'answer'   => __( 'Yes. Booqi’s Starter plan lets you begin with the core online ticketing flow before deciding when you are ready for the broader Pro setup.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'What are the costs associated with Booqi.me?', 'booqi-classic' ),
		'answer'   => __( 'Starter is free for up to €1.000 monthly turnover, while Pro pricing is tailored to your venue setup, hardware needs, and support requirements.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'Do you offer customer support?', 'booqi-classic' ),
		'answer'   => __( 'Yes. Booqi provides onboarding, training, and ongoing support, with the Pro plan covering phone, chat, and e-mail support.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'Is the system user-friendly?', 'booqi-classic' ),
		'answer'   => __( 'The platform is built so teams can manage products, pricing, and visitor flows from one easy-to-use dashboard without technical complexity.', 'booqi-classic' ),
	),
	array(
		'question' => __( 'Can Booqi.me integrate with my existing systems?', 'booqi-classic' ),
		'answer'   => __( 'Yes. Booqi supports hardware connections and favourite-tool integrations so your ticketing setup fits your current operation.', 'booqi-classic' ),
	),
);

get_header();

get_template_part(
	'template-parts/home/hero',
	null,
	array(
		'stats' => $hero_stats,
	)
);

get_template_part(
	'template-parts/home/logo-strip',
	null,
	array(
		'logos' => $client_logos,
	)
);

get_template_part(
	'template-parts/home/features',
	null,
	array(
		'items' => $feature_spotlight_items,
	)
);

get_template_part(
	'template-parts/home/industries',
	null,
	array(
		'cards' => $industry_cards,
	)
);

get_template_part(
	'template-parts/home/platform-proof',
	null,
	array(
		'cards' => $proof_cards,
	)
);

get_template_part(
	'template-parts/home/pricing',
	null,
	array(
		'tiers' => $pricing_tiers,
	)
);

get_template_part(
	'template-parts/home/faq',
	null,
	array(
		'items' => $faq_items,
	)
);

get_template_part( 'template-parts/home/final-cta' );

get_footer();

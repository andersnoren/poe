<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function poe_setup() {

	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'poe_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function poe_styles() {

	wp_enqueue_style( 'poe-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'poe' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'poe_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block patterns.
--------------------------------------------------------------------------------------------------- */

function poe_register_block_patterns() {

	if ( ! ( function_exists( 'register_block_pattern_category' ) && function_exists( 'register_block_pattern' ) ) ) return;

	// The block pattern categories included in Poe.
	$poe_block_pattern_categories = apply_filters( 'poe_block_pattern_categories', array(
		'poe-blog' => array(
			'label'			=> esc_html__( 'Poe Blog', 'poe' ),
		),
		'poe-cta'  => array(
			'label'			=> esc_html__( 'Poe Call to Action', 'poe' ),
		),
		'poe-footer' => array(
			'label'			=> esc_html__( 'Poe Footer', 'poe' ),
		),
		'poe-general' => array(
			'label'			=> esc_html__( 'Poe General', 'poe' ),
		),
		'poe-header' => array(
			'label'			=> esc_html__( 'Poe Header', 'poe' ),
		),
		'poe-hero' => array(
			'label'			=> esc_html__( 'Poe Hero', 'poe' ),
		),
		'poe-portfolio' => array(
			'label'			=> esc_html__( 'Poe Portfolio', 'poe' ),
		),
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $poe_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $poe_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

	// viewportWidth values, determining the width of the preview in the Block Patterns drawer.
	$viewport = apply_filters( 'poe_block_patterns_viewport', array(
		'full'			=> 1440,
		'wide'			=> 1312,
		'wide_grouped'	=> 1180,
		'content'		=> 640
	) );

	// The block patterns included in Poe.
	$poe_block_patterns = apply_filters( 'poe_block_patterns', array(

		/* BLOG */

		'poe/blog-grid-cols-2' => array(
			'title'         => esc_html__( 'Two column grid with featured image, title, and post date', 'poe' ),
			'categories'    => array( 'poe-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'blog/blog-grid-cols-2' ),
		),
		'poe/blog-grid-cols-3' => array(
			'title'         => esc_html__( 'Three column grid with featured image, title, and post date', 'poe' ),
			'categories'    => array( 'poe-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'blog/blog-grid-cols-3' ),
		),
		'poe/blog-list-compact' => array(
			'title'         => esc_html__( 'Compact list with title and post date.', 'poe' ),
			'categories'    => array( 'poe-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'blog/blog-list-compact' ),
		),
		'poe/blog-list-compact-media' => array(
			'title'         => esc_html__( 'Compact list with a featured image, title, and post date.', 'poe' ),
			'categories'    => array( 'poe-blog' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'blog/blog-list-compact-media' ),
		),

		/* CALL TO ACTION */

		'poe/cta-horizontal' => array(
			'title'         => esc_html__( 'Horizontal call to action.', 'poe' ),
			'categories'    => array( 'poe-cta' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'cta/cta-horizontal' ),
		),
		'poe/cta-vertical' => array(
			'title'         => esc_html__( 'Vertical call to action.', 'poe' ),
			'categories'    => array( 'poe-cta' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'cta/cta-vertical' ),
		),

		/* FOOTER */

		'poe/footer-horizontal' => array(
			'title'         => esc_html__( 'Footer with site title, theme credit and social icons. This is the default footer in the theme.', 'poe' ),
			'categories'    => array( 'poe-footer' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'footer/footer-horizontal' ),
		),
		'poe/footer-horizontal-full' => array(
			'title'         => esc_html__( 'The default footer in full width with a background color.', 'poe' ),
			'categories'    => array( 'poe-footer' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'footer/footer-horizontal-full' ),
		),
		'poe/footer-cta' => array(
			'title'         => esc_html__( 'Full width footer with a call to action, site title, theme credit, and social icons.', 'poe' ),
			'categories'    => array( 'poe-footer' ),
			'viewportWidth' => $viewport['full'],
			'content'       => poe_get_block_pattern_markup( 'footer/footer-cta' ),
		),
		'poe/footer-contact-cta' => array(
			'title'         => esc_html__( 'Full width footer with contact details, call to action, site title, theme credit, and social icons.', 'poe' ),
			'categories'    => array( 'poe-footer' ),
			'viewportWidth' => $viewport['full'],
			'content'       => poe_get_block_pattern_markup( 'footer/footer-contact-cta' ),
		),
		'poe/footer-contact' => array(
			'title'         => esc_html__( 'Full width footer with contact details, site title, theme credit, and social icons.', 'poe' ),
			'categories'    => array( 'poe-footer' ),
			'viewportWidth' => $viewport['full'],
			'content'       => poe_get_block_pattern_markup( 'footer/footer-contact' ),
		),

		/* GENERAL */

		'poe/general-faq' => array(
			'title'         => esc_html__( 'Frequently Asked Questions (FAQ) section.', 'poe' ),
			'categories'    => array( 'poe-general' ),
			'viewportWidth' => $viewport['full'],
			'content'       => poe_get_block_pattern_markup( 'general/general-faq' ),
		),
		'poe/general-follow-us-vertical' => array(
			'title'         => esc_html__( 'Follow us section with a vertical layout.', 'poe' ),
			'categories'    => array( 'poe-general' ),
			'viewportWidth' => $viewport['content'],
			'content'       => poe_get_block_pattern_markup( 'general/general-follow-us-vertical' ),
		),
		'poe/general-follow-us-horizontal' => array(
			'title'         => esc_html__( 'Follow us section with a horizontal layout.', 'poe' ),
			'categories'    => array( 'poe-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-follow-us-horizontal' ),
		),
		'poe/general-information-banner' => array(
			'title'         => esc_html__( 'Information banner.', 'poe' ),
			'categories'    => array( 'poe-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-information-banner' ),
		),
		'poe/general-previews-featured' => array(
			'title'         => esc_html__( 'Large featured section for the latest sticky post on the site.', 'poe' ),
			'categories'    => array( 'poe-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-previews-featured' ),
		),
		'poe/general-previews-columns' => array(
			'title'         => esc_html__( 'Latest news section with three posts.', 'poe' ),
			'categories'    => array( 'poe-general', 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-previews-columns' ),
		),
		'poe/general-previews-columns-small' => array(
			'title'         => esc_html__( 'Compact latest news section with three posts.', 'poe' ),
			'categories'    => array( 'poe-general' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-previews-columns-small' ),
		),
		'poe/general-testimonial-large' => array(
			'title'         => esc_html__( 'Large testimonial with a single quote.', 'poe' ),
			'categories'    => array( 'poe-general', 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-testimonial-large' ),
		),
		'poe/general-testimonials-columns' => array(
			'title'         => esc_html__( 'Testimonials section with three quotes.', 'poe' ),
			'categories'    => array( 'poe-general', 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'general/general-testimonials-columns' ),
		),

		/* HEADER */

		'poe/header-horizontal' => array(
			'title'         => esc_html__( 'Header with site title and menu. This is the default header in the theme.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-horizontal' ),
		),
		'poe/header-horizontal-bg' => array(
			'title'         => esc_html__( 'The default header with a background color.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-horizontal-bg' ),
		),
		'poe/header-horizontal-stacked' => array(
			'title'         => esc_html__( 'Header with site title and menu, stacked on all screen sizes.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-horizontal-stacked' ),
		),
		'poe/header-horizontal-button' => array(
			'title'         => esc_html__( 'Header with site title, menu, and a button.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-horizontal-button' ),
		),
		'poe/header-horizontal-social' => array(
			'title'         => esc_html__( 'Header with site title, menu, and social icons.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-horizontal-social' ),
		),
		'poe/header-gigantic-title' => array(
			'title'         => esc_html__( 'Header with a gigantic site title, menu, and social icons.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-gigantic-title' ),
		),
		'poe/header-gigantic-title-bg' => array(
			'title'         => esc_html__( 'Header with background color and a gigantic site title, menu, and social icons.', 'poe' ),
			'categories'    => array( 'poe-header' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'header/header-gigantic-title-bg' ),
		),

		/* HERO */

		'poe/hero-cover' => array(
			'title'         => esc_html__( 'Hero with a background image, a heading and buttons.', 'poe' ),
			'categories'    => array( 'poe-hero' ),
			'viewportWidth' => $viewport['full'],
			'content'       => poe_get_block_pattern_markup( 'hero/hero-cover' ),
		),
		'poe/hero-cover-group-bg' => array(
			'title'         => esc_html__( 'Hero with a background image and a heading, paragraph of text, and buttons.', 'poe' ),
			'categories'    => array( 'poe-hero' ),
			'viewportWidth' => $viewport['full'],
			'content'       => poe_get_block_pattern_markup( 'hero/hero-cover-group-bg' ),
		),

		/* PORTFOLIO */

		'poe/portfolio-about-section' => array(
			'title'         => esc_html__( 'An about section with heading, paragraph and call to action links.', 'poe' ),
			'categories'    => array( 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'portfolio/portfolio-about-section' ),
		),
		'poe/portfolio-filtration' => array(
			'title'         => esc_html__( 'Portfolio filtration formatted as a row of buttons.', 'poe' ),
			'categories'    => array( 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'portfolio/portfolio-filtration' ),
		),
		'poe/portfolio-features' => array(
			'title'         => esc_html__( 'Features grid with a title and description.', 'poe' ),
			'categories'    => array( 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'portfolio/portfolio-features' ),
		),
		'poe/portfolio-logo-grid' => array(
			'title'         => esc_html__( 'Logo grid with a title and description.', 'poe' ),
			'categories'    => array( 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'portfolio/portfolio-logo-grid' ),
		),
		'poe/portfolio-process' => array(
			'title'         => esc_html__( 'Work process description with multiple steps.', 'poe' ),
			'categories'    => array( 'poe-portfolio' ),
			'viewportWidth' => $viewport['wide'],
			'content'       => poe_get_block_pattern_markup( 'portfolio/portfolio-process' ),
		),

	) );

	// Register block patterns.
	foreach ( $poe_block_patterns as $slug => $settings ) {
		register_block_pattern( $slug, $settings );
	}

}
add_action( 'init', 'poe_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	GET BLOCK PATTERN MARKUP
	Returns the markup of the block pattern at the specified theme path.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_get_block_pattern_markup' ) ) : 
	function poe_get_block_pattern_markup( $pattern_name ) {

		$path = 'inc/block-patterns/' . $pattern_name . '.php';

		if ( ! locate_template( $path ) ) return;

		ob_start();
		include( locate_template( $path ) );
		return ob_get_clean();

	}
endif;


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_register_block_styles' ) ) :
	function poe_register_block_styles() {

		if ( ! function_exists( 'register_block_style' ) ) return;

		// Button: Arrow
		register_block_style( 'core/button', array(
			'name'  	=> 'poe-arrow',
			'label' 	=> esc_html__( 'Arrow', 'poe' ),
		) );
		
	}
	add_action( 'init', 'poe_register_block_styles' );
endif;

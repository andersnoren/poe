<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_setup' ) ) :
	function poe_setup() {

		load_theme_textdomain( 'poe', get_template_directory() . '/languages' );
		set_post_thumbnail_size( 1792, 9999 );

	}
	add_action( 'after_setup_theme', 'poe_setup' );
endif;


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_styles' ) ) :
	function poe_styles() {

		wp_register_style( 'poe-styles-google-fonts', 	poe_get_google_fonts_url() );
		wp_register_style( 'poe-styles-shared', 		get_template_directory_uri() . '/assets/css/shared.css' );
		wp_register_style( 'poe-styles-blocks', 		get_template_directory_uri() . '/assets/css/blocks.css' );

		$dependencies = apply_filters( 'poe_style_dependencies', array( 'poe-styles-shared', 'poe-styles-blocks', 'poe-styles-google-fonts' ) );

		wp_enqueue_style( 'poe-styles-front-end', get_template_directory_uri() . '/assets/css/front-end.css', $dependencies, wp_get_theme( 'Poe' )->get( 'Version' ) );

	}
	add_action( 'wp_enqueue_scripts', 'poe_styles' );
endif;


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE EDITOR STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_editor_styles' ) ) :
	function poe_editor_styles() {

		add_editor_style( array( 
			'./assets/css/editor.css',
			'./assets/css/blocks.css',
			'./assets/css/shared.css',
			poe_get_google_fonts_url()
		) );

	}
	add_action( 'admin_init', 'poe_editor_styles' );
endif;


/*	-----------------------------------------------------------------------------------------------
	GET GOOGLE FONTS URL
	Builds a Google Fonts request URL from the Google Fonts families used in theme.json.
	Based on a solution in the Blockbase theme (see readme.txt for licensing info).
 
 	@return $fonts_url
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_get_google_fonts_url' ) ) : 
	function poe_get_google_fonts_url() {

		if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) return '';

		$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();

		if ( empty( $theme_data['typography']['fontFamilies'] ) ) return '';

		$theme_families 	= ! empty( $theme_data['typography']['fontFamilies']['theme'] ) ? $theme_data['typography']['fontFamilies']['theme'] : array();
		$user_families 		= ! empty( $theme_data['typography']['fontFamilies']['user'] ) ? $theme_data['typography']['fontFamilies']['user'] : array();
		$font_families 		= array_merge( $theme_families, $user_families );

		if ( ! $font_families ) return '';

		$font_family_urls = array();

		foreach ( $font_families as $font_family ) {
			if ( ! empty( $font_family['google'] ) ) $font_family_urls[] = $font_family['google'];
		}

		if ( ! $font_family_urls ) return '';

		// Return a single request URL for all of the font families.
		return apply_filters( 'poe_google_fonts_url', esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_family_urls ) . '&display=swap' ) );

	}
endif;


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block patterns.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_register_block_patterns' ) ) : 
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
			'poe/blog-list' => array(
				'title'         => esc_html__( 'List with featured image, title, excerpt, and post date.', 'poe' ),
				'categories'    => array( 'poe-blog' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'blog/blog-list' ),
			),
			'poe/blog-list-compact' => array(
				'title'         => esc_html__( 'Compact list with title and post date.', 'poe' ),
				'categories'    => array( 'poe-blog' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'blog/blog-list-compact' ),
			),
			'poe/blog-list-compact-media' => array(
				'title'         => esc_html__( 'Compact list with featured image, title, and post date.', 'poe' ),
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
				'title'         => esc_html__( 'Footer with site title and theme credit in a centered paragraph. This is the default footer in the theme.', 'poe' ),
				'categories'    => array( 'poe-footer' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'footer/footer-horizontal' ),
			),

			/* GENERAL */

			'poe/general-faq' => array(
				'title'         => esc_html__( 'Frequently Asked Questions (FAQ) section.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['full'],
				'content'       => poe_get_block_pattern_markup( 'general/general-faq' ),
			),
			'poe/general-feature-large' => array(
				'title'         => esc_html__( 'Full-width feature section with headings, text, and buttons.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-feature-large' ),
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
			'poe/general-media-text-button' => array(
				'title'         => esc_html__( 'Media and text with button.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-media-text-button' ),
			),
			'poe/general-previews-featured' => array(
				'title'         => esc_html__( 'Large featured section for the latest sticky post on the site.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-previews-featured' ),
			),
			'poe/general-previews-columns' => array(
				'title'         => esc_html__( 'Latest news section with three posts.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-previews-columns' ),
			),
			'poe/general-previews-columns-small' => array(
				'title'         => esc_html__( 'Compact latest news section with three posts.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-previews-columns-small' ),
			),
			'poe/general-pricing-table' => array(
				'title'         => esc_html__( 'Pricing table with three tiers.', 'poe' ),
				'categories'    => array( 'poe-general' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-pricing-table' ),
			),
			'poe/general-testimonials-columns' => array(
				'title'         => esc_html__( 'Testimonials section with three quotes.', 'poe' ),
				'categories'    => array( 'poe-general', 'poe-restaurant' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'general/general-testimonials-columns' ),
			),

			/* HEADER */

			'poe/header-horizontal' => array(
				'title'         => esc_html__( 'Header with site title and a menu. This is the default header in the theme.', 'poe' ),
				'categories'    => array( 'poe-header' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'header/header-horizontal' ),
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
			'poe/hero-text' => array(
				'title'         => esc_html__( 'Hero with headings, a paragraph of text, and buttons.', 'poe' ),
				'categories'    => array( 'poe-hero' ),
				'viewportWidth' => $viewport['content'],
				'content'       => poe_get_block_pattern_markup( 'hero/hero-text' ),
			),
			'poe/hero-text-displaced' => array(
				'title'         => esc_html__( 'Hero with a large heading to the left and text to the right.', 'poe' ),
				'categories'    => array( 'poe-hero' ),
				'viewportWidth' => $viewport['wide'],
				'content'       => poe_get_block_pattern_markup( 'hero/hero-text-displaced' ),
			),

			/* PORTFOLIO */

		) );

		// Register block patterns.
		foreach ( $poe_block_patterns as $slug => $settings ) {
			register_block_pattern( $slug, $settings );
		}
	
	}
	add_action( 'init', 'poe_register_block_patterns' );
endif;


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

		// Columns: Separators
		register_block_style( 'core/columns', array(
			'name'  	=> 'poe-horizontal-separators',
			'label' 	=> esc_html__( 'Horizontal Separators', 'poe' ),
		) );

		// Query Pagination: Vertical separators
		register_block_style( 'core/query-pagination', array(
			'name'  	=> 'poe-vertical-separators',
			'label' 	=> esc_html__( 'Vertical Separators', 'poe' ),
		) );

		// Query Pagination: Top separator
		register_block_style( 'core/query-pagination', array(
			'name'  	=> 'poe-top-separator',
			'label' 	=> esc_html__( 'Top Separator', 'poe' ),
		) );
		
	}
	add_action( 'init', 'poe_register_block_styles' );
endif;

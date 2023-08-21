<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function poe_setup() {
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
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function poe_register_block_patterns() {

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

}
add_action( 'init', 'poe_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'poe_register_block_styles' ) ) :
	function poe_register_block_styles() {

		// Button: Arrow
		register_block_style( 'core/button', array(
			'name'  	=> 'poe-arrow',
			'label' 	=> esc_html__( 'Arrow', 'poe' ),
		) );
		
	}
	add_action( 'init', 'poe_register_block_styles' );
endif;

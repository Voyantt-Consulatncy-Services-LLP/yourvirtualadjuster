<?php
/**
 * yourvirtualadjuster 2.0 Theme Customizer
 *
 * @package yourvirtualadjuster_2.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function yourvirtualadjuster_2_0_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'yourvirtualadjuster_2_0_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'yourvirtualadjuster_2_0_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'yourvirtualadjuster_2_0_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function yourvirtualadjuster_2_0_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function yourvirtualadjuster_2_0_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function yourvirtualadjuster_2_0_customize_preview_js() {
	wp_enqueue_script( 'yourvirtualadjuster-2-0-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'yourvirtualadjuster_2_0_customize_preview_js' );

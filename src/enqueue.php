<?php

namespace Vanguard_Digital;

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', function() {

	$min_ext = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// JS
	wp_enqueue_script(
		'vanguard_digital_js',
		Vanguard_Digital_URL . "/dist/main{$min_ext}.js",
		[],
		Vanguard_Digital_VERSION,
		true
	);

	// CSS
	wp_enqueue_style(
		'vanguard_digital_css',
		Vanguard_Digital_URL . "/dist/main{$min_ext}.css",
		[],
		Vanguard_Digital_VERSION,
		''
	);

} );
<?php
/**
 * Kickoff theme setup and build
 */

namespace Vanguard_Digital;

define( 'Vanguard_Digital_VERSION', wp_get_theme()->version );
define( 'Vanguard_Digital_DIR', __DIR__ );
define( 'Vanguard_Digital_URL', get_template_directory_uri() );

require_once( Vanguard_Digital_DIR . '/vendor/autoload.php' );

\A7\autoload( __DIR__ . '/src' );

<?php
/*
Plugin Name: Orbis Email Examples
Plugin URI: https://www.pronamic.eu/plugins/orbis-email-examples/
Description:

Version: 1.0.0
Requires at least: 3.5

Author: Pronamic
Author URI: http://www.pronamic.eu/

Text Domain: orbis-email-examples
Domain Path: /languages/

License: Copyright (c) Pronamic

GitHub URI: https://github.com/pronamic/wp-orbis-email-examples
*/

function orbis_email_examples_bootstrap() {
	// Classes
	require_once 'classes/orbis-email-examples-plugin.php';

	// Initialize
	global $orbis_email_examples_plugin;

	$orbis_email_examples_plugin = new Orbis_EmailExamples_Plugin( __FILE__ );
}

add_action( 'orbis_bootstrap', 'orbis_email_examples_bootstrap' );

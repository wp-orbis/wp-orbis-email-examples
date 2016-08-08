<?php

class Orbis_EmailExamples_Plugin extends Orbis_Plugin {
	public function __construct( $file ) {
		parent::__construct( $file );

		$this->set_name( 'orbis_email_examples' );
		$this->set_db_version( '1.0.0' );

		$this->plugin_include( 'includes/post.php' );
	}

	public function loaded() {
		$this->load_textdomain( 'orbis-email-examples', '/languages/' );
	}
}

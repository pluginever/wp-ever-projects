<?php
namespace Pluginever\WpEverProjects;

class Install{

	/**
	 * Constructor for the class wp-ever-projects
	 *
	 * Sets up all the appropriate hooks and actions
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		register_activation_hook( WEP_FILE, array( $this, 'activate' ) );
		register_deactivation_hook( WEP_FILE, array( $this, 'deactivate' ) );

    }

    /**
	 * Executes during plugin activation
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function activate() {


	}

	/**
	 * Executes during plugin deactivation
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function deactivate() {

	}



}
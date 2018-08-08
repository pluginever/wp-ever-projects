<?php
namespace Pluginever\WpEverProjects;

class Scripts{

	/**
	 * Constructor for the class
	 *
	 * Sets up all the appropriate hooks and actions
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_public_assets') );
		add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_assets') );
    }

   	/**
	 * Add all the assets of the public side
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function load_public_assets(){
		$suffix = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? '' : '.min';
		wp_register_style('wp-ever-projects', WEP_ASSETS."/public/css/wp-ever-projects-public{$suffix}.css", [], WEP_VERSION);
		wp_register_script('wp-ever-projects', WEP_ASSETS."/public/js/wp-ever-projects-public{$suffix}.js", ['jquery'], WEP_VERSION, true);
		wp_localize_script('wp-ever-projects', 'WEP', ['ajaxurl' => admin_url( 'admin-ajax.php' ), 'nonce' => 'wp-ever-projects']);
		wp_enqueue_style('wp-ever-projects');
		wp_enqueue_script('wp-ever-projects');
	}

	 /**
	 * Add all the assets required by the plugin
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function load_admin_assets(){
		$suffix = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? '' : '.min';
		wp_register_style('wp-ever-projects', WEP_ASSETS."/admin/css/wp-ever-projects-admin{$suffix}.css", [], WEP_VERSION);
		wp_register_script('wp-ever-projects', WEP_ASSETS."/admin/js/wp-ever-projects-admin{$suffix}.js", ['jquery'], WEP_VERSION, true);
		wp_localize_script('wp-ever-projects', 'WEP', ['ajaxurl' => admin_url( 'admin-ajax.php' ), 'nonce' => 'wp-ever-projects']);
		wp_enqueue_style('wp-ever-projects');
		wp_enqueue_script('wp-ever-projects');
	}



}

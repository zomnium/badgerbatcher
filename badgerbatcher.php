<?php
/*
Plugin Name: Badger Batcher
Plugin URI: https://github.com/zomnium/badgerbatcher
Version: 0.1
Author: Zomnium
Author URI: http://zomnium.com/
Description: Badger the batch processing helper.
*/

/**
 * Require
 */

require 'BadgerBatch.php';

/**
 * Plugin
 */

class BadgerBatcher
{
	private $batches;
	private $logs;
	private $ui;

	public function __construct()
	{
		// Create batches registry
		$this->batches = array();

		// Register action hook
		add_action( 'admin_menu', array( $this, 'AdminNavigation' ) );
	}

	/**
	 * Add
	 * @var string Name
	 * @var string Class
	 * @return null
	 */
	public function add($name, $class)
	{
		// Save batch process in registry
		$this->batches[$name] = $class;
	}

	/**
	 * AdminNavigation
	 * Registers options page to admin navigation.
	 */
	public function AdminNavigation()
	{
		// Add tools menu item
		add_management_page(
			'Badger Batcher',			// Page title
			'Batch Process',			// Navigation title
			'manage_options',			// Capabilities
			'badger-batcher',			// Navigation slug
			array( $this, 'AdminPage' )	// Callback function
		);
	}

	/**
	 * AdminPage
	 * Create the options page in the admin user interface.
	 */
	public function AdminPage()
	{
		// Abort, use has not the capibilities to view this page
		if ( ! current_user_can( 'manage_options') )
			wp_die( 'You do not have the rights to be here, sorry.' );

		// Show admin home
		include 'views/admin-home.php';
	}
}

// Initialize plugin
$badgerbatcher = new BadgerBatcher();

// Batch Example
include 'ExampleBatch.php';

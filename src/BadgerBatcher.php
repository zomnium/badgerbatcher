<?php

/**
 * Badger Batcher
 * The plugin class itself.
 */

class BadgerBatcher
{
	private $batches;

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
		if ( ! isset( $_POST['batch'] ) )
			return include 'views/admin-home.php';

		// Invalid batch was send
		if ( ! in_array( $_POST['batch'], $this->batches ) )
		{
			echo 'Error!';
			return false;
		}

		// Let's batch!
		$batch = $this->batch( $_POST['batch'] );
		$logs = $batch->getLogs();
		include 'views/admin-batch.php';
	}

	/**
	 * Batch
	 * Runs the batch process itself.
	 * @var string $batch
	 * @return null
	 */
	public function batch($batch)
	{
		// Batch class does not exist
		if ( ! class_exists($batch) )
			return false;

		// Create batch instance
		$batch = new $batch;

		// Get content
		$content = $batch->content();

		// Content was found
		if ($batch->execute($content))
		{
			// Loop through content
			while ($batch->execute($content))
			{
				// When valid execute task
				if ($batch->validate($content))
					$batch->task($content);
			}

			// Return batch object
			return $batch;
		}

		// No content found... to be implemented
		else
		{
			echo 'niiiiets';
		}
	}
}

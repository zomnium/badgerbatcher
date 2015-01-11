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
	 * Get
	 * @return array
	 */
	public function get()
	{
		return $this->batches;
	}
}

// Initialize plugin
$badgerbatcher = new BadgerBatcher();

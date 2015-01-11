<?php

/**
 * Example Batch
 * Does absolutely nothing :) 
 */

class ExampleBatch extends BadgerBatcherAPI implements BadgerBatch
{
	/**
	 * Content
	 * Get the content that needs processing.
	 */
	public function content()
	{}

	/**
	 * Execute
	 * Loop through filtered results.
	 */
	public function execute()
	{}

	/**
	 * Preprocess
	 * Runs before the process, useful for any validation.
	 */
	public function preprocess()
	{}

	/**
	 * Process
	 * Execute the task(s) that need to be done.
	 */
	public function process()
	{}

	/**
	 * Postprocess
	 * Executed after the process, used for updating the content in WordPress.
	 */
	public function postprocess()
	{}
}

// Add batch process to Badger Batcher
$badgerbatcher->add('Example: does nothing', 'ExampleBatch');

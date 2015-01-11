<?php

/**
 * Example Batch
 * Does absolutely nothing :) 
 */

// class ExampleBatch extends BadgerBatcherAPI implements BadgerBatch
class ExampleBatch implements BadgerBatch
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
	 * Validate
	 * See if the current post meets your requirements before proceeding.
	 */
	public function validate();

	/**
	 * Task
	 * Execute the task(s) that need to be done.
	 */
	public function task();
}

// Add batch process to Badger Batcher
if ( class_exists('BadgerBatcher') && isset($badgerbatcher) )
	$badgerbatcher->add('Example: does nothing', 'ExampleBatch');

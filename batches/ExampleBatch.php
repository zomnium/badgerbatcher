<?php

/**
 * Example Batch
 * Does absolutely nothing :) 
 */

class ExampleBatch extends BadgerBatchApi implements BadgerBatch
{
	/**
	 * Content
	 * Get the content that needs processing.
	 */
	public function content()
	{
		return new WP_Query( array(
			'post_type' => 'post',
			'post_per_page' => 3,
			'post_status' => 'publish',
		) );
	}

	/**
	 * Execute
	 * Loop through filtered results.
	 */
	public function execute($content)
	{
		return $content->have_posts();
	}

	/**
	 * Validate
	 * See if the current post meets your requirements before proceeding.
	 */
	public function validate($item)
	{
		return true;
	}

	/**
	 * Task
	 * Execute the task(s) that need to be done.
	 */
	public function task($item)
	{
		$item->the_post();
		$this->log(get_the_ID(), get_the_title());
	}
}

// Add batch process to Badger Batcher
if ( class_exists('BadgerBatcher') && isset($badgerbatcher) )
	$badgerbatcher->add('Example: does nothing', 'ExampleBatch');

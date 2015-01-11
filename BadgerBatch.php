<?php

/**
 * BadgerBatch
 * Template for batch workflow.
 */

interface BadgerBatch
{
	/**
	 * Content
	 * Get the content that needs processing.
	 */
	public function content();

	/**
	 * Execute
	 * Loop through filtered results.
	 */
	public function execute($content);

	/**
	 * Validate
	 * See if the current post meets your requirements before proceeding.
	 */
	public function validate($item);

	/**
	 * Task
	 * Execute the task(s) that need to be done.
	 */
	public function task($item);
}

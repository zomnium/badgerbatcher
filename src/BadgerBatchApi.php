<?php

/**
 * BadgerBatch
 * Template for batch workflow.
 */

abstract class BadgerBatchApi
{
	private $logs;

	/**
	 * Log
	 * @var string $postId
	 * @var string $message
	 * @return null
	 */
	public function log($postId, $message)
	{
		if ( ! is_array($this->logs) )
			$this->logs = array();

		$this->logs[$postId] = $message;
	}

	/**
	 * Get Logs
	 * @return array
	 */
	public function getLogs()
	{
		return $this->logs;
	}
}

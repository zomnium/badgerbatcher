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

require 'src/BadgerBatch.php';
require 'src/BadgerBatchApi.php';
require 'src/BadgerBatcher.php';

/**
 * Initialize plugin
 */

$badgerbatcher = new BadgerBatcher();

/**
 * Default batches
 */

include 'batches/ExampleBatch.php';

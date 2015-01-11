
# Badger Batcher

Plugin for batch processing data within WordPress.


## How to use

Create an class that extends `BadgerBatchApi` and implements `BadgerBatch`, like so:

	class ExampleBatch extends BadgerBatchApi implements BadgerBatch
	{
		// Put functions here...
	}

Then you have four functions that need to be implemented:


### public function content() { ... }

This function returns an data object like `WP_Query`. Use the filters that you need. So only the needed data will be processed.


### public function execute($content) { ... }

Manages the loop, this function will be injected in a while-loop. So when you want to process posts it could be something like this:

	return $content->have_posts();


### public function validate($item) { ... }

Can be used for validation per content item. To see if an item must be processed or not. Just return a boolean (true or false). If you wish to not use this function just add `return true`.


### public function task(item) { ... }

Here you can put the task itself, the task thats needs to be done. If you want to log warnings or debug info to the results screen you can use `$this->log( $post_id, $message );`.


### Register your batch

Adding you batch process to Badger Batcher is quite easy. But it's important to check for Badger Batcher first. So when it's not available everything continues to work fine.

	if ( class_exists('BadgerBatcher') && isset($badgerbatcher) )
		$badgerbatcher->add('Example: does nothing', 'ExampleBatch');


Check out the example batch in the plugin directory for an example.

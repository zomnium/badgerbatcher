
<div class="wrap">
	<h2>Badger Batcher</h2>
	<div style="max-width:45em;">
		<p><strong>Important:</strong> always run a backup first. There is no undo button! That means you can't go back. When something doesn't work out the way you would like, you're pretty much screwed if you didn't make a backup.</p>
		<p>That had to be said, now let's have some fun! :)</p>
	</div>
	<hr>
	<h3>Let the badger run through your content!</h3>
	<form action="">
		<select name="batch" id="batch">
		<option disabled selected>Choose your batch process</option>
		<?php foreach ($this->batches as $key => $value) : ?>
			<option value="<?php echo $value; ?>"><?php echo $key; ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Let the badger batch!">
	</form>
</div>

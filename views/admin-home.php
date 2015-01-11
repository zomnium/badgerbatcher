
<div class="wrap">
	<h2>Badger Batcher</h2>
	<h3></h3>
	<p>Always run a backup first. So if something goes wrong you'll still have your content. There is no undo button! Please, do this first.</p>
	<hr>
	<h3>Let's run some batch processes on your content!</h3>
	<form action="">
		<select name="batch" id="batch">
		<option disabled selected>Choose your batch process</option>
		<?php foreach ($this->batches as $key => $value) : ?>
			<option value="<?php echo $value; ?>"><?php echo $key; ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Batch the badger!">
	</form>
</div>

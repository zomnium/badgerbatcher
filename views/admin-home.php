
<div class="wrap">
	<h2>Badger Batcher</h2>
	<div style="max-width:45em;">
		<p><strong>Important:</strong> always run a backup first. There is no undo button! That means you can't go back. When something doesn't work out the way you would like, you're pretty much screwed if you didn't make a backup.</p>
		<p>That had to be said, now let's have some fun! :)</p>
	</div>
	<hr>
	<h3>Let the badger run through your content!</h3>
	<p>Please select which batch process you want to run right now:</p>
	<form action="" method="POST">
		<?php foreach ($this->batches as $key => $value) : ?>
		<p>
			<label for="<?php echo $value; ?>">
				<input type="radio" value="<?php echo $value; ?>" id="<?php echo $value; ?>" name="batch"> 
				<?php echo $key; ?>
			</label>
		</p>
		<?php endforeach; ?>
		</select>
		<p><input id="submit" class="button button-primary" type="submit" value="Let the badger batch!" name="submit"></p>
	</form>
</div>

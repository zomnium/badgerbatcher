
<div class="wrap">
	<h2>Badger Batcher</h2>
	<h3>[batch name]</h3>
	<hr>
	<table class="widefat importers" cellspacing="0">
		<tbody>
			<?php foreach ($logs as $id => $message) : ?>
			<tr>
				<td class="row-title"><?php echo $id; ?></td>
				<td class="desc"><?php echo $message; ?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>

</div>

<?php if (isset($matkul)): ?>
	<?php foreach ($matkul as $mk): ?>
		<option value="<?=$mk->id?>"><?=$mk->nama_mata_kuliah?></option>
	<?php endforeach ?>
<?php endif ?>

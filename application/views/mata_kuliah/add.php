<?=form_open('mata_kuliah/insert', array('autocomplete' => 'off'))?>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Mata Kuliah</h1>

			<a href="<?=base_url('mata_kuliah')?>">
				<button type="button" class="btn btn-dark">Back</button>
			</a>
		</div>

		<div>
			<div class="form-group">
				<label for="inputName">Mahasiswa</label>
				<select name="f_mahasiswa" required="TRUE" class="form-control">
					<option value="">--- Choose ---</option>
					<?php if (isset($mahasiswa)): ?>
						<?php foreach ($mahasiswa as $mhs): ?>
							<option value="<?=$mhs->id?>">[<?=$mhs->id?>] <?=$mhs->nama?></option>
						<?php endforeach ?>
					<?php endif ?>
				</select>
			</div>
			<div class="form-group">
				<label for="inputMataKuliah">Nama Mata Kuliah</label>
				<input type="text" name="f_nama_mata_kuliah" required="TRUE" class="form-control">
			</div>
			<div class="form-group" align="right">
				<input type="submit" name="f_save" value="Save" class="btn btn-primary">
			</div>
		</div>

		<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
	</main>
<?=form_close()?>
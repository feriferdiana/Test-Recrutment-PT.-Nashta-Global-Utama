<script type="text/javascript">
	$(document).ready(function(){
		var url = $('#base-url').html();

		$('select[name=f_mahasiswa]').change(function(){
			var id_mahasiswa = $(this).val();

			$('select[name=f_mata_kuliah]').load(url+'data_nilai/load_matkul', {js_id_mahasiswa : id_mahasiswa});

			return false;
		});
	});
</script>

<?=form_open('data_nilai/insert', array('autocomplete' => 'off'))?>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Data Nilai</h1>

			<a href="<?=base_url('data_nilai')?>">
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
				<select name="f_mata_kuliah" required="TRUE" class="form-control">
					<option value="">--- Choose ---</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputNilai">Nilai</label>
				<input type="text" name="f_nilai" required="TRUE" class="form-control">
			</div>
			<div class="form-group">
				<label for="inputKet">Keterangan</label>
				<textarea name="f_keterangan" class="form-control"></textarea>
			</div>
			<div class="form-group" align="right">
				<input type="submit" name="f_save" value="Save" class="btn btn-primary">
			</div>
		</div>

		<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
	</main>
<?=form_close()?>
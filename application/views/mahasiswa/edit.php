<?=form_open('mahasiswa/update', array('autocomplete' => 'off'))?>	
	<input type="hidden" name="f_id" value="<?=$row->id?>">
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Mahasiswa</h1>

			<a href="<?=base_url('mahasiswa')?>">
				<button type="button" class="btn btn-dark">Back</button>
			</a>
		</div>

		<div>
			<div class="form-group">
				<label for="inputName">Nama</label>
				<input type="text" name="f_nama" class="form-control" id="inputName" value="<?=$row->nama?>" required="TRUE">
			</div>
			<div class="form-group">
				<label for="inputAlamat">Alamat</label>
				<textarea name="f_alamat" id="inputAlamat" class="form-control" required="TRUE"><?=$row->alamat?></textarea>
			</div>
			<div class="form-group" align="right">
				<input type="submit" name="f_update" value="Update" class="btn btn-primary">
			</div>
		</div>

		<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
	</main>
<?=form_close()?>
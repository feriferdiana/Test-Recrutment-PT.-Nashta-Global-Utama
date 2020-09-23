<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Mahasiswa</h1>

		<a href="<?=base_url('mahasiswa/add')?>">
			<button type="button" class="btn btn-dark">Add</button>
		</a>
	</div>

	<div>
		<table id="table_id" class="display">
				<thead>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Action</th>
				</thead>
			<?php if (isset($result)): ?>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($result as $rs): ?>
						<tr>
							<td><?=$no?></td>
							<td><?=$rs->nama?></td>
							<td><?=$rs->alamat?></td>
							<td>
								<a href="<?=base_url('mahasiswa/edit/'.$rs->id)?>">
									<button type="button" class="btn btn-warning">Nilai Rata-Rata</button>
								</a>
								<a href="<?=base_url('mahasiswa/edit/'.$rs->id)?>">
									<button type="button" class="btn btn-warning">Edit</button>
								</a>
								<a href="<?=base_url('mahasiswa/delete/'.$rs->id)?>" onclick="return confirm('Are you sure want to delete?')">
									<button type="button" class="btn btn-danger">Delete</button>
								</a>
							</td>
						</tr>
					<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			<?php endif ?>
		</table>		
	</div>

	<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>
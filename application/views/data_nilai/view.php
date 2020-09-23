<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Data Nilai <?=$row->nama?></h1>

		<a href="<?=base_url('data_nilai')?>">
			<button type="button" class="btn btn-dark">Back</button>
		</a>
	</div>

	<div>
		<table id="table_id" class="display">
			<thead>
				<th>ID Mahasiswa</th>
				<th>Nama</th>
				<th>Mata Kuliah</th>
				<th>Nilai Rata-rata</th>
			</thead>
			<?php if (isset($row)): ?>
				<tbody>
					<tr>
						<td><?=$row->id_mahasiswa?></td>
						<td><?=$row->nama?></td>
						<td><?=$row->nama_mata_kuliah?></td>
						<td><?=$row->rata_rata?></td>
					</tr>
				</tbody>
			<?php endif ?>
		</table>		
	</div>

	<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>
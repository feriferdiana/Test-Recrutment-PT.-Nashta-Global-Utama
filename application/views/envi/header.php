<!doctype html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v4.1.1">
		<title>Data Mahasiswa</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

		<!-- Bootstrap core CSS -->
		<link href="<?=base_url('style/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('style/css/dashboard.css')?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?=base_url('style/css/jquery.dataTables.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('style/css/datatables.css')?>">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	
	<!-- Custom styles for this template -->
	<script src="<?=base_url('style/js/jquery-3.1.1.min.js')?>"></script>
	<script src="<?=base_url('style/js/jquery-3.5.1.slim.min.js')?>" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="<?=base_url('style/js/jquery.slim.min.js')?>"><\/script>')</script>
	<script src="<?=base_url('style/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?=base_url('style/js/feather.min.js')?>"></script>
	<script src="<?=base_url('style/js/Chart.min.js')?>"></script>
	<script src="<?=base_url('style/js/dashboard.js')?>"></script>
	<script type="text/javascript" charset="utf8" src="<?=base_url('style/js/jquery.dataTables.js')?>"></script>
	<script type="text/javascript" charset="utf8" src="<?=base_url('style/js/jquery.datatables.jS')?>"></script>
	
</head>
	
<body>

	<div id="base-url" style="display: none"><?=base_url()?></div>

	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Data Mahasiswa</a>
			<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap text-light bg-dark">
					Test Recrutment PT. Nashta Global Utama
				</li>
			</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
				<div class="sidebar-sticky pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('mahasiswa')?>">
								<span data-feather="home"></span>
									Mahasiswa <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('mata_kuliah')?>">
								<span data-feather="file"></span>
									Mata Kuliah
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('data_nilai')?>">
								<span data-feather="shopping-cart"></span>
									Data Nilai
							</a>
						</li>
					</ul>
				</div>
			</nav>

			
		</div>
	</div>
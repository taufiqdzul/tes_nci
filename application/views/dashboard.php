<!DOCTYPE html>
<html>
<head>
	<title>Tes NCI</title>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/"; ?>bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/datatables/css/"; ?>dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap-datepicker/css/"; ?>bootstrap-datapicker3.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/font-awesome/css/"; ?>font-awesome.min.css">
	<style type="text/css">
		.btn{
			border-radius: 0px;
		}
		.form-control{
			border-radius: 0px;
		}
	</style>
	<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
</head>
<body>
	<div class="col-md-5 col-md-offset-1">
		<h1>Parkir Masuk</h1>
		<form action="<?php echo base_url()."index.php/MyController/parkir_masuk" ?>" method="POST">
			<div class="form-group">
				<label>Tanggal Masuk</label>
				<input type="datetime-local" name="tgl_masuk" placeholder="NIS" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Parkir</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>

	<div class="col-md-5">
		<h1>Parkir Keluar</h1>
		<form action="<?php echo base_url()."index.php/MyController/parkir_keluar" ?>" method="POST">
			<div class="form-group">
				<label>Nomor parkir</label>
				<input type="text" name="id_masuk" placeholder="Masukan nomor parkir" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Keluar</button>
			<button type="reset" class="btn btn-default">Reset</button>
		</form>
	</div>

	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered" style="margin-top: 40px;">
			<thead>
				<tr>
					<th>Jenis</th>
					<th>Masuk</th>
					<th>Keluar</th>
					<th>Durasi</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php $pendapatan = 0; ?>
				<?php foreach($data as $row) { ?>
				<?php
					// if($row['id_kendaraan'] == 1) {
					// 	$total = $row['total']*90/100;
					// } else if($row['id_kendaraan'] == 2) {
					// 	$total = $row['total']*90/100;
					// }  else if($row['id_kendaraan'] == 3) {
					// 	$total = $row['total']*80/100;
					// }  else if($row['id_kendaraan'] == 4) {
					// 	$total = $row['total']*85/100;
					// }  else if($row['id_kendaraan'] == 5) {
					// 	$total = $row['total']*75/100;
					// }  else if($row['id_kendaraan'] == 6) {
					// 	$total = $row['total']*70/100;
					// }  else if($row['id_kendaraan'] == 7) {
					// 	$total = $row['total']*90/100;
					// }  else if($row['id_kendaraan'] == 8) {
					// 	$total = $row['total']*80/100;
					// } else {
					// 	$total = 0;
					// }
				?>
				<tr>
					<td><?php echo $row['jenis'] ?></td>
					<td><?php echo $row['tgl_masuk'] ?></td>
					<td><?php echo $row['tgl_keluar'] ?></td>
					<td><?php echo $row['durasi'] ?></td>
					<td><?php echo $row['total']*$row['tarif']/100 ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>

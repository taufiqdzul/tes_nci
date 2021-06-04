<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa SMKN 1 Katapang</title>
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
	<div class="col-md-offset-3">
		<h1 style="font-size:20pt;">Data Siswa SMKN 1 Katapang</h1>
		<h4 style="margin-bottom:30px;">Tahun Ajaran 2016/2017</h4>
		<div class="container modal-content col-md-8" style="margin-bottom:50px;">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="modal-header">
					<h1 class="modal-title" id="myModalLabel" style="font-size:40pt;">
						<a href="<?php echo base_url()."index.php/CrudController/lihat_detail/".$nis; ?>" data-toggle="tooltip" data-placement="left" title="Lihat Detail"><strong><i class="fa fa-chevron-left"></i></strong></a>
						<strong>Edit Data</strong>
					</h1>
				</div>
				<form action="<?php echo base_url()."index.php/CrudController/do_edit_data" ?>" method="POST">
					<div class="modal-body">
						<input type="hidden" name="nis" value="<?php echo $nis; ?>" class="form-control">
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Nama</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Alamat</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<textarea class="form-control" name="alamat" style="height:34px;"><?php echo $alamat; ?></textarea>
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Jenis Kelamin</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<?php
									if($jenis_kelamin == "Laki-Laki"){
										?>
										<select class="form-control" name="jenis_kelamin">
				 							<option>Jenis Kelamin</option>
				 							<option value="Laki-Laki" selected>Laki-Laki</option>
				 							<option value="Perempuan">Perempuan</option>
				 						</select>
									<?php } 
									else{
										?>
										<select class="form-control" name="jenis_kelamin">
				 							<option>Jenis Kelamin</option>
				 							<option value="Laki-Laki">Laki-Laki</option>
				 							<option value="Perempuan" selected>Perempuan</option>
				 						</select>
									<?php } ?>
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Tempat Lahir</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Tanggal Lahir</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Asal Sekolah</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="text" name="asal_sekolah" value="<?php echo $asal_sekolah; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Nama Ayah</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="text" name="nama_ayah" value="<?php echo $nama_ayah; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Pekerjaan Ayah</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="text" name="pekerjaan_ayah" value="<?php echo $pekerjaan_ayah; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Nama Ibu</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
								<input type="text" name="nama_ibu" value="<?php echo $nama_ibu; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
							<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
								<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Pekerjaan Ibu</button>
							</div>
							<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0; margin-bottom:15px;">
								<input type="text" name="pekerjaan_ibu" value="<?php echo $pekerjaan_ibu; ?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="modal-footer col-md-12 col-sm-12 col-xs-12" style="margin-right:0; padding-right:0;">
						<button type="reset" class="btn btn-default">Reset</button>
 						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
	 			</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var save_method; //for save method string
		var table;

		$(document).ready(function() {

		    //datatables
		    table = $('#table').DataTable({ 
		        //Set column definition initialisation properties.
		        "columnDefs": [
		        { 
		            "targets": [ -1 ], //last column
		            "orderable": false, //set not orderable
		        },
		        ],
		    });
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>
</html>
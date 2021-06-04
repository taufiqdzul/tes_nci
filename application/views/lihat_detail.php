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
		.input-group-addon{
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
						<a href="<?php echo base_url()."index.php/DashboardController/index" ?>" data-toggle="tooltip" data-placement="left" title="Dashboard"><strong><i class="fa fa-chevron-left"></i></strong></a>
						<strong>Data Siswa</strong>
						<a href="<?php echo base_url()."index.php/CrudController/edit_data/".$nis; ?>" class="btn btn-default btn-lg col-md-offset-2"><i class="fa fa-edit"></i> Edit Data</a>
					</h1>
				</div>
				<div class="modal-body">
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>NIS</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $nis ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Nama</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $nama ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Alamat</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $alamat ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Jenis Kelamin</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $jenis_kelamin ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Tempat Lahir</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $tempat_lahir ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Tanggal Lahir</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $tanggal_lahir ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Asal Sekolah</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $asal_sekolah ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Nama Ayah</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $nama_ayah ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Pekerjaan Ayah</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $pekerjaan_ayah ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Nama Ibu</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $nama_ibu ?></div>
						</div>
					</div>
					<div class="form-group container col-md-12 col-sm-12 col-xs-12" style="margin:0; padding:0; margin-top:5px; margin-bottom:15px;">
						<div class="col-md-3 col-sm-2 col-xs-2" style="margin:0; padding:0;">
							<button class="form-control btn-primary" style="border-right:0px; background-color:#333; border:#333;" disabled>Pekerjaan Ibu</button>
						</div>
						<div class="col-md-9 col-sm-10 col-xs-10" style="margin:0; padding:0;">
							<div class="form-control"><?php echo $pekerjaan_ibu ?></div>
						</div>
					</div>
				</div>
				<div class="modal-footer col-md-12 col-sm-12 col-xs-12" style="margin-right:0; padding-right:0;">
						<p class="text-left" style="font-size:15pt;">&copy;kelompok7</p>
				</div>
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
<html>
<head>
    <title>Nota</title>
    <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/"; ?>bootstrap.min.css">
</head>
<body>
    <div class="col-md-5">
			<h1>Parkir Keluar</h1>
			<form action="<?php echo base_url()."index.php/MyController/transaksi" ?>" method="POST">
                <div class="form-group">
					<label>Nomor parkir</label>
					<input type="text" name="id_masuk" class="form-control" value="<?php echo $id_masuk; ?>">
				</div>
				<div class="form-group">
					<label>Tgl Keluar</label>
					<input type="datetime-local" name="tgl_keluar" placeholder="Masukan nomor parkir" class="form-control">
				</div>
                <div class="form-group">
					<label>Jenis Kendaraan</label>
					<select name="id_kendaraan" id="" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php foreach($kendaraan as $row) { ?>
                        <option value="<?php echo $row['id_kendaraan'] ?>"><?php echo $row['jenis'] ?></option>
                        <?php } ?>
                    </select>
				</div>
				<button type="submit" class="btn btn-success">Keluar</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
		</div>
</body>
</html>
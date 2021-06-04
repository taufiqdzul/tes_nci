<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 				<h4 class="modal-title" id="myModalLabel">Tambah Data Siswa</h4>
 			</div>
 			<form action="<?php echo base_url()."index.php/CrudController/tambah_data" ?>" method="POST">
 				<div class="modal-body">
 					<div class="form-group">
 						<label>NIS</label>
 						<input type="text" name="nis" placeholder="NIS" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Nama</label>
 						<input type="text" name="nama" placeholder="Nama" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Alamat</label>
 						<textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
 					</div>
 					<div class="form-group">
 						<label>Jenis Kelamin</label>
 						<select class="form-control" name="jenis_kelamin">
 							<option>Jenis Kelamin</option>
 							<option value="Laki-Laki">Laki-Laki</option>
 							<option value="Perempuan">Perempuan</option>
 						</select>
 					</div>
 					<div class="form-group">
 						<label>Tempat Lahir</label>
 						<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Tanggal Lahir</label>
 						<input type="date" name="tanggal_lahir" placeholder="Tanggal Lair" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Asal Sekolah</label>
 						<input type="text" name="asal_sekolah" placeholder="Asal Sekolah" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Nama Ayah</label>
 						<input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Pekerjaan Ayah</label>
 						<input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Nama Ibu</label>
 						<input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>Pekerjaan Ibu</label>
 						<input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" class="form-control">
 					</div>
 				</div>
 				<div class="modal-footer">
 					<button type="reset" class="btn btn-default">Reset</button>
 					<button type="submit" class="btn btn-primary">Save changes</button>
 				</div>
 			</form>
 		</div>
 	</div>
</div>
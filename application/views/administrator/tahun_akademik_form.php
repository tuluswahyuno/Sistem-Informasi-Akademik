<div class="container-fluid">
	<form method="POST" action="<?php echo base_url('administrator/tahun_akademik/tambah_tahunakademik_aksi') ?>">

		<div class="alert alert-success" role="alert">
    		<i class="fas fa-university"> </i> Form Input Tahun Akademik
   		 </div>

		<div class="form-group">
			<label>Tahun Akademik</label>
			<input type="text" name="tahun_akademik" class="form-control">
			<?php echo form_error('tahun_akademik','<div class="text-danger small ml-3">') ?>
		</div>

		<div class="form-group">
			<label>Semester</label>
			<select name="semester" class="form-control">
				<option>Ganjil</option>
				<option>Genap</option>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option>Aktif</option>
				<option>Tidak Aktif</option>
			</select>
		</div>

		

		<button type="submit" class="btn btn-primary mb-5">Simpan</button>


		
	</form>
</div>
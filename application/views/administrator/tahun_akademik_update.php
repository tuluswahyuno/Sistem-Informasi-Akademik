<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-edit"> </i> Form Update Tahun Akademik
    </div>

    <?php foreach($tahun_akademik as $ak) : ?>

    	<form method="POST" action="<?php echo base_url('administrator/tahun_akademik/update_aksi') ?>">

		<div class="form-group">
			<label>Tahun Akademik</label>
			<input type="hidden" name="id" value="<?php echo $ak->id ?>">
			<input type="text" name="tahun_akademik" class="form-control" value="<?php echo $ak->tahun_akademik ?>">
		</div>


		<div class="form-group">
			<label>Semester</label>
			<select name="semester" class="form-control">
				<option><?php echo $ak->semester ?></option>
				<option>Ganjil</option>
				<option>Genap</option>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option><?php echo $ak->status ?></option>
				<option>Aktif</option>
				<option>Tidak Aktif</option>
			</select>
		</div>

		
		
		<button type="submit" class="btn btn-primary">Simpan</button>

		<?php echo anchor('administrator/matakuliah','<div class="btn btn-info">Kembali</div>') ?>

    <?php endforeach ?>

	

		
	</form>
</div>
<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"> </i> Tahun Akademik
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/tahun_akademik/tambah_tahunakademik','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Matakuliah</button>') ?>
	
	<table class="table table-hover table-bordered table-striped">
		<tr>
			<th>NO</th>
			<th>TAHUN AKADEMIK</th>
			<th>SEMESTER</th>
			<th>STATUS</th>
			<th colspan="2" style="text-align: center;">AKSI</th>
		</tr>

		<?php $no=1; foreach($tahun_akademik as $ak) : ?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $ak->tahun_akademik ?></td>
			<td><?php echo $ak->semester ?></td>
			<td><?php echo $ak->status ?></td>

			<td width="20px"><?php echo anchor('administrator/tahun_akademik/update/'.$ak->id_thn_ak,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>

			<!-- td width="20px"><?php echo anchor('administrator/tahun_akademik/delete/'.$ak->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-trash"></i></div>') ?></td> -->

			<td width="20px" data-toggle="modal" data-target="#confirm-delete"> <div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div> </td>    	

		</tr>

		<?php endforeach; ?>

	</table>

	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <strong>Konfirmasi Hapus Data</strong>
            </div>

            <div class="modal-body">
                Apakah anda yakin akan menghapus data ini?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
                <a><?php echo anchor('administrator/tahun_akademik/delete/'.$ak->id_thn_ak,'<div class="btn btn-sm btn-danger">Hapus Data</div>')?></a>
            </div>
        </div>
	    </div>
	</div>

</div>

</div>
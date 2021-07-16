<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"> </i> Program Studi
    </div>


    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/prodi/tambah_prodi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Prodi</button>') ?>
    

    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>NO</th>
    		<th>KODE PRODI</th>
    		<th>NAMA PRODI</th>
            <th>NAMA JURUSAN</th>
    		<th colspan="2">AKSI</th>
    	</tr>

    	<?php 
    		$no = 1;
    		foreach ($prodi as $prd) : ?>


    		<tr>
    			<td width="20px"><?php echo $no++ ?></td>
    			<td><?php echo $prd->kode_prodi ?>  </td>
    			<td><?php echo $prd->nama_prodi ?>  </td>
                <td><?php echo $prd->nama_jurusan ?>  </td>

    			<td width="20px"> <?php echo anchor('administrator/prodi/update/'.$prd->id_prodi,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>

    			<td width="20px" data-toggle="modal" data-target="#confirm-delete"> <div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div> </td>    			
    		</tr>


    		<?php endforeach ?>
    	 

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
                <a><?php echo anchor('administrator/prodi/delete/'.$prd->id_prodi,'<div class="btn btn-sm btn-danger">Hapus Data</div>')?></a>
            </div>
        </div>
	    </div>
	</div>

</div>
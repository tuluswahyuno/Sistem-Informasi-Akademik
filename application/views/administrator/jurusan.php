<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"> </i> Jurusan
    </div>


    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/jurusan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Jurusan</button>') ?>
    

    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>NO</th>
    		<th>KODE JURUSAN</th>
    		<th>NAMA JURUSAN</th>
    		<th colspan="2">AKSI</th>
    	</tr>

    	<?php 
    		$no = 1;
    		foreach ($jurusan as $jrs) : ?>


    		<tr>
    			<td width="20px"><?php echo $no++ ?></td>
    			<td><?php echo $jrs->kode_jurusan ?>  </td>
    			<td><?php echo $jrs->nama_jurusan ?>  </td>

    			<td width="20px"> <?php echo anchor('administrator/jurusan/update/'.$jrs->id_jurusan,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>

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
                <a><?php echo anchor('administrator/jurusan/delete/'.$jrs->id_jurusan,'<div class="btn btn-sm btn-danger">Hapus Data</div>')?></a>
            </div>
        </div>
	    </div>
	</div>

</div>
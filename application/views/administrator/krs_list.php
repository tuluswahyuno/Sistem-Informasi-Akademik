<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"> </i> Kartu Rencana Studi (KRS)
    </div>

    <center class="mb-4">
    	<legend class="mt-3"><strong>KARTU RENCAN STUDI</strong></legend>

    	<table>
    		<tr>
    			<td><strong>NIM</strong></td>
    			<td>&nbsp;: <?php echo $nim ?></td>
    		</tr>

    		<tr>
    			<td><strong>Nama Lengkap</strong></td>
    			<td>&nbsp;: <?php echo $nama_lengkap ?></td>
    		</tr>

    		<tr>
    			<td><strong>Program Studi</strong></td>
    			<td>&nbsp;: <?php echo $nama_prodi ?></td>
    		</tr>

    		<tr>
    			<td><strong>Tahun Akademik (Semester)</strong></td>
    			<td>&nbsp;: <?php echo $tahun_akademik.'&nbsp;('.$semester.')' ?></td>
    		</tr>



    	</table>
    </center>

    <?php echo anchor('administrator/krs/tambah','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data KRS</button>') ?>

    <?php echo anchor('administrator/krs/tambah','<button class="btn btn-sm btn-info mb-3"><i class="fas fa-print fa-sm"></i> Print</button>') ?>

    <table class="table table-bordered table-hover table-striped">
    	<tr>
    		<th>NO</th>
    		<th>KODE MATA KULIAH</th>
    		<th>NAMA MATA KULIAH</th>
    		<th>SKS</th>
    		<th colspan="2">AKSI</th>
    	</tr>

    	<?php 
    		$no=1;
    		foreach ($krs_data as $krs) :
    	 ?>

    	 <tr>
    	 	<td width="20px"><?php echo $no++ ?></td>
    	 	<td><?php echo $krs->kode_matakuliah ?></td>
    	 	<td><?php echo $krs->nama_matakuliah ?></td>
    	 	<td><?php echo $krs->sks ?></td>
    	 	<td>
    	 		<?php 
    	 			echo $krs->sks;
    	 			$jumlahSks+=$krs->sks;
    	 		 ?>
    	 	</td>

    	 	<td width="20px"> <?php echo anchor('administrator/krs/update/'.$krs->id_krs,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?></td>

    			<td width="20px" data-toggle="modal" data-target="#confirm-delete"> <div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div> </td>  
    	 </tr>

    	 <tr>
    	 	<td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
    	 	<td><strong><?php echo $jumlahSks ?></strong></td>
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
                <a><?php echo anchor('administrator/prodi/delete/'.$krs->id_krs,'<div class="btn btn-sm btn-danger">Hapus Data</div>')?></a>
            </div>
        </div>
	    </div>
	</div>

</div>
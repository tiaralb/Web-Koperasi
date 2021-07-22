<div class="container">
<?php echo form_open('petugas_koperasi/cari') ?>
	<div class="col-md-4 col-md-offset-8">
	<?php 
		if(count($petugas) == 0) 
			echo "data tidak ada";
	?>
    	<div class="input-group">
      		<input type="text" name="nama" class="form-control">
      		<span class="input-group-btn">
        		<input class="btn btn-primary" type="submit" name="cari" value="Cari">
      		</span>
    	</div>
  	</div>
<?php echo form_close() ?>
 <div style="height:50px;"></div>
<table class="table table-hover table-bordered">
	<thead>
		<th>No.</th>
		<th>ID Anggota</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No. Telelpon</th>
		<th>Tempat Tangal Lahir</th>		
		<th>Ket</th>
		<th>Tools</th>
	</thead>
	<tbody>
		<?php
		$i=1;
			foreach ($petugas as $p) {
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $p['id_petugas'] ?></td>
			<td><?php echo $p['nama'] ?></td>
			<td><?php echo $p['alamat'] ?></td>
			<td><?php echo $p['no_telp'] ?></td>
			<td><?php echo $p['tmp_lahir'].", ".$p['tgl_lahir'] ?></td>			
			<td><?php echo $p['ket'] ?></td>
			<td><?php 
						echo anchor('petugas/hapus/'.$p['id_petugas'],"<div class='btn btn-xs btn-danger'>Hapus</div>",
						"onclick=\"return cekHapus('Hapus?".$p['id_petugas']."')\"")." ";
						echo anchor('petugas/edit/'.$p['id_petugas'],"<div class='btn btn-xs btn-info'>Edit</div>") 
				?>
			</td>
			
		</tr>
		<?php $i++;		
		} 
		?>
	</tbody>
</table>
</div>
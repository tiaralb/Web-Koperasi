<div class="container">
<?php echo form_open('anggota/cari') ?>
	<div class="col-md-4 col-md-offset-8">
	<?php if(count($anggota) == 0) echo "data tidak ada";?>
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
		<th>ID Petugas</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Tempat Tangal Lahir</th>
		<th>JK</th>
		<th>Status</th>
		<th>No. Telelpon</th>
		<th>Keterangan</th>
		<th>Tools</th>
	</thead>
	<tbody>
		<?php
		$i=1;
			foreach ($anggota as $ag) {
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $ag['id_anggota'] ?></td>
			<td><?php echo $ag['id_petugas'] ?></td>
			<td><?php echo $ag['nama'] ?></td>
			<td><?php echo $ag['alamat'] ?></td>
			<td><?php echo $ag['tmp_lahir'].", ".$ag['tgl_lahir'] ?></td>
			<td><?php echo $ag['j_kel'] ?></td>
			<td><?php echo $ag['status'] ?></td>
			<td><?php echo $ag['no_telp'] ?></td>
			<td><?php echo $ag['ket'] ?></td>
			<td><?php 
						echo anchor('anggota/hapus/'.$ag['id_anggota'],"<div class='btn btn-xs btn-danger'>Hapus</div>",
						"onclick=\"return cekHapus('Hapus?".$ag['id_anggota']."')\"")." ";
						echo anchor('anggota/edit/'.$ag['id_anggota'],"<div class='btn btn-xs btn-info'>Edit</div>") 
				?>
			</td>
			
		</tr>
		<?php $i++;		
		} 
		?>
	</tbody>
</table>
</div>
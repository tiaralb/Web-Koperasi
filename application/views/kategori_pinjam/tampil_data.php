<div class="col-md-5" style="margin-left:32%;">
<table class="table table-hover table-bordered">
	<thead>
		<th>No.</th>
		<th>ID Kategori Pinjaman</th>
		<th>Nama Kategori Pinjaman</th>		
		<th>Tools</th>
	</thead>
	<tbody>
		<?php
		$i=1;
			foreach ($kategori as $k) {
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $k['id_kategori_pinjaman'] ?></td>
			<td><?php echo $k['nama_kategori_pinjaman'] ?></td>			
			<td><?php 
						echo anchor('kategori_pinjaman/hapus/'.$k['id_kategori_pinjaman'],"hapus",
						"onclick=\"return cekHapus('Hapus?".$k['id_kategori_pinjaman']."')\"");						
				?>
			</td>
			
		</tr>
		<?php $i++;		
		} 
		?>
	</tbody>
</table>
</div>
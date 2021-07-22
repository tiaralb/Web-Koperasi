<div class="" style="width:400px;margin: 0 auto">
	<table  class="table table-border" align="center">
		<tr>
			<th colspan="2" class="text-center">KOPERASI PINSIM</th>
		</tr>
		<tr>
			<td>ID Anggota</td>
			<td><?php if(isset($anggota)) echo $anggota['id_anggota'] ?></td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<td><?php echo $anggota['nama'] ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $anggota['alamat'] ?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><?php echo $anggota['status'] ?></td>
		</tr>
		<tr>
			<td>Nama Simpanan</td>
			<td><?php echo $this->session->flashdata('nama_simpanan') ?></td>
		</tr>
		<tr>
			<td>Jumlah Simpanan</td>
			<td><?php echo $this->session->flashdata('besar_simpanan') ?></td>
		</tr>
	</table>
	<div media="print" class="visible-print">
		Cianjur, <?php echo date('M:D:Y') ?>
	</div>
	<a href="#" class="btn btn-primary btn-sm hidden-print" onclick="window.print()" media="screen" style="color:#FFF">Cetak</a>
</div>
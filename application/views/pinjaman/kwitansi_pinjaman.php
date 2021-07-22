
<div class="" style="width:400px;margin: 0 auto">
	<table  class="table table-border" align="center">
		<tr>
			<th colspan="2"  class="text-center">KOPERASI SIMPAN PINJAM</th>
		</tr>
		<tr>
			<td>ID Anggota</td>
			<td><?php echo $anggota['id_anggota'] ?></td>
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
			<td>Besar Pinjaman</td>
			<td><?php echo $this->session->flashdata('besar_pinjaman') ?></td>
		</tr>
		<tr>
			<td>Jumlah Angsuran</td>
			<td><?php echo $this->session->flashdata('jumlah_angsuran') ?></td>
		</tr>
		<tr>
			<td>Tanggal Pelunasan</td>
			<td><?php echo $this->session->flashdata('tgl_pelunasan') ?></td>
		</tr>
	</table>
	<div media="print" class="visible-print">
		Cianjur, <?php echo date('M:D:Y') ?>
	</div>
	<a href="#" onclick="window.print()" class="btn btn-primary btn-sm hidden-print" media="screen" style="color:#FFF">Cetak</a>
</div>
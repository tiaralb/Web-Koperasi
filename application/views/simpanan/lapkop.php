<div class="container">
<?php echo form_open('simpanan/lapkop','class="col-md-5 hidden-print" style="margin-left:29%;"') ?>
    <div class="panel panel-default">
      	<div class="panel-heading"><b>FORM TRANSAKSI</b></div>
     	<?php if($this->input->post('searching') && count($simpanan)==0) echo '<label class="alert alert-danger text-center col-sm-12">Data Tidak Ada!</label>';?>
    	<div class="panel-body">
        	<div class="form-group">
        		<input type="text" class="form-control" name="id_anggota" placeholder="Cari anggota" required>
      		</div>
        	<input type="submit" name="searching" value="Cari" class="btn btn-primary btn-block">        
    	</div>
    </div>
</form> 
</div>
<?php if($this->input->post('searching') && count($simpanan) !=0){ ?>
<div class="" style="width:400px;margin: 0 auto">
	<table  class="table table-border" align="center">
		<tr>
			<th colspan="2" class="text-center">KOPERASI PINSIM</th>
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
		<?php 
		foreach ($simpanan as $s) {
		 	echo "<tr>";
		 		echo "<td>Total Simpanan</td>";
		 		echo "<td>".$s['besar_simpanan']."</td>";
		 	echo "</tr>";		 	
		} ?>
		
		
		
	</table>
	<div media="print" class="visible-print">
		Cianjur, <?php echo date('M:D:Y') ?>
	</div>
	<a href="#" class="btn btn-primary btn-sm hidden-print" onclick="window.print()" media="screen" style="color:#FFF">Cetak</a>
</div>
<?php } ?>
<div class="container">
<?php echo form_open('simpanan/input','class="col-md-5" style="margin-left:32%;"') ?>
    <div class="panel panel-default">
      	<div class="panel-heading"><b>FORM TRANSAKSI</b></div>
     	<?php if(count($anggota)==0) echo '<label class="alert alert-danger text-center col-sm-12">Data Tidak Ada!</label>';?>
    	<div class="panel-body">
        	<div class="form-group">
        		<input type="text" class="form-control" name="id_anggota" placeholder="Cari anggota" required>
      		</div>
        	<input type="submit" name="searching" value="Cari" class="btn btn-primary btn-block">        
    	</div>
    </div>
</form> 
</div>
<?php
if($this->input->post('searching') && count($anggota)!=0){
	$this->load->view('transaksi/tampil_satu_anggota');
	$this->load->view('simpanan/form_simpanan');	
}
?>
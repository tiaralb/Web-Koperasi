<div class="container">
<?php echo form_open('petugas_koperasi/input','class="form-horizontal col-md-5" style="margin-left:32%;"') ?>
	<div class="panel panel-default">
    <div class="panel-heading"><b>FORM INPUT PETUGAS</b></div>
    <div class="panel-body">   
      
      	<div class="form-group">
        	<label class="col-sm-4 control-label">ID Petugas</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="id_petugas" required>
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Nama</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="nama">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Alamat</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="alamat">
        	</div>
      	</div>

        <div class="form-group">
          <label class="col-sm-4 control-label">No. Telp</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="no_telp">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Tempat Lahir</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="tmp_lahir">
          </div>
        </div>        

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Tanggal Lahir</label>
        	<div class="col-sm-8">
          		<input type="date" class="form-control" name="tgl_lahir">
        	</div>
      	</div>
      	
      	<div class="form-group">
        	<label class="col-sm-4 control-label">Keterangan</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="ket">
        	</div>
      	</div>
      
      	<div class="form-group">
        	<div class="col-sm-offset-4 col-sm-8">
          		<input type="submit" name="submit" class="btn btn-primary" value="Submit">
        	</div>
      	</div>
    <?php echo form_close();
   
    ?>
    </div>
  </div>
  
</div>
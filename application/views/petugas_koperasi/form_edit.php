<div class="container">
<?php echo form_open('petugas_koperasi/update','class="form-horizontal col-md-5" style="margin-left:32%;"') ?>
	<div class="panel panel-default">
    <div class="panel-heading"><b>FORM UPDATE PETUGAS</b></div>
    <div class="panel-body">   
      
      	<div class="form-group">
        	<label class="col-sm-4 control-label">ID Petugas</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="id_petugas" value="<?php echo $petugasSatu['id_petugas'] ?>" readonly>
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Nama</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="nama" value="<?php echo $petugasSatu['nama'] ?>">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Alamat</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="alamat" value="<?php echo $petugasSatu['alamat'] ?>">
        	</div>
      	</div>

        <div class="form-group">
          <label class="col-sm-4 control-label">No. Telp</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="no_telp" value="<?php echo $petugasSatu['no_telp'] ?>">
          </div>
        </div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Tempat Lahir</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="tmp_lahir" value="<?php echo $petugasSatu['tmp_lahir'] ?>">
        	</div>
      	</div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Tanggal Lahir</label>
          <div class="col-sm-8">
              <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $petugasSatu['tgl_lahir'] ?>">
          </div>
        </div>     	  

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Keterangan</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="ket" value="<?php echo $petugasSatu['ket'] ?>">
        	</div>
      	</div>
      
      	<div class="form-group">
        	<div class="col-sm-offset-4 col-sm-8">
          		<input type="submit" name="update" class="btn btn-primary" value="Update">
        	</div>
      	</div>
    <?php echo form_close();
   
    ?>
    </div>
  </div>
  
</div>
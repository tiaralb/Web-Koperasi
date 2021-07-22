<div class="container">
<?php echo form_open('anggota/update','class="form-horizontal col-md-5" style="margin-left:32%;"') ?>
	<div class="panel panel-default">
    <div class="panel-heading"><b>FORM UPDATE ANGGOTA</b></div>
    <div class="panel-body">   
      
      	<div class="form-group">
        	<label class="col-sm-4 control-label">ID Anggota</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="id_anggota" value="<?php echo $anggotaSatu['id_anggota'] ?>" readonly>
        	</div>
      	</div>

        <div class="form-group">
          <label class="col-sm-4 control-label">ID Petugas</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="id_petugas" value="<?php echo $anggotaSatu['id_petugas'] ?>">
          </div>
        </div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Nama</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="nama" value="<?php echo $anggotaSatu['nama'] ?>">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Alamat</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="alamat" value="<?php echo $anggotaSatu['alamat'] ?>">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Tanggal Lahir</label>
        	<div class="col-sm-8">
          		<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $anggotaSatu['tgl_lahir'] ?>">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Tempat Lahir</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="tmp_lahir" value="<?php echo $anggotaSatu['tmp_lahir'] ?>">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Jenis Kelamin</label>
        	<div class="col-sm-8">
          		<select class="form-control" name="j_kel">
                <option value="<?php echo $anggotaSatu['j_kel'] ?>"><?php echo $anggotaSatu['j_kel'] ?></option>
          			<option value="L">Laki-laki</option>
          			<option value="P">Perempuan</option>
          		</select>
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Status</label>
        	<div class="col-sm-8">
          		<select class="form-control" name="status">
                <option value="<?php echo $anggotaSatu['status'] ?>"><?php echo $anggotaSatu['status'] ?></option>
          			<option value="pelajar">Pelajar</option>
          			<option value="PNS">PNS</option>
          			<option value="mahasiswa">Mahasiswa</option>
          			<option value="wiraswasta">Wiraswasta</option>
          		</select>
        	</div>
     	</div>

     	<div class="form-group">
        	<label class="col-sm-4 control-label">No. Telp</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="no_telp" value="<?php echo $anggotaSatu['no_telp'] ?>">
        	</div>
      	</div>

      	<div class="form-group">
        	<label class="col-sm-4 control-label">Keterangan</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="ket" value="<?php echo $anggotaSatu['ket'] ?>">
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
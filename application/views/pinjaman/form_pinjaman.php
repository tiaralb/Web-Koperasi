<div class="container">
<?php echo form_open('pinjaman/input','class="form-horizontal col-md-5" style="margin-left:32%;"') ?>
	<div class="panel panel-default">
    <div class="panel-heading"><b>FORM INPUT ANGGOTA</b></div>
    <div class="panel-body"> 

      	<input type="hidden" class="form-control" name="id_anggota" value="<?php echo $anggota['id_anggota'] ?>">      

      	<div class="form-group">
          <label class="col-sm-4 control-label" >Kategori Pinjaman</label>
          <div class="col-sm-8">
           <select class="form-control" name="kategori_pinjaman">
              <?php
                foreach ($kategori as $kat) {
                  echo "<option value=".$kat['id_kategori_pinjaman'].">".$kat['nama_kategori_pinjaman']."</option>";
                }
              ?>
           </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Besar pinjaman</label>
          <div class="col-sm-8">
          <div class="input-group">              
              <span class="input-group-addon">Rp.</span>
              <input type="text" class="form-control" name="besar_pinjaman" >
            </div>          
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Tanggal pengajuan</label>
          <div class="col-sm-8">
           <input type="date" class="form-control" name="tgl_pengajuan" value="<?php echo date('Y-m-d') ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Tanggal Accept</label>
          <div class="col-sm-8">
           <input type="date" class="form-control" name="tgl_acc" value="<?php echo date('Y-m-d') ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Tanggal pinjaman</label>
          <div class="col-sm-8">
           <input type="date" class="form-control" name="tgl_pinjaman" value="<?php echo date('Y-m-d') ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Tanggal pelunasan</label>
          <div class="col-sm-8">
           <input type="date" class="form-control" name="tgl_pelunasan">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Jumlah Angsuran</label>
          <div class="col-sm-8">
            <div class="input-group">              
              <input type="text" class="form-control" name="jml_angsuran">
              <span class="input-group-addon">kali</span>
            </div>            
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Keterangan </label>
          <div class="col-sm-8">
           <input type="text" class="form-control" name="ket" >
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
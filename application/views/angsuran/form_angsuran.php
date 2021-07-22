<div class="container">
<?php echo form_open('angsuran/input','class="form-horizontal col-md-5" style="margin-left:32%;"') ?>
	<div class="panel panel-default">
    <div class="panel-heading"><b>FORM INPUT ANGGOTA</b></div>
    <div class="panel-body">

          <input type="hidden" name="id_anggota" value="<?php echo $anggota['id_anggota'] ?>">
          <input type="hidden" name="id_pinjaman" value="<?php echo $pinjam['id_pinjaman'] ?>">   

          <div class="form-group">
            <label class="col-sm-4 control-label" >Tanggal Pembayaran</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tgl_pembayaran" value="<?php echo date('Y-m-d') ?>">
            </div>
          </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" >Angsuran ke-</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" name="angsuran_ke" value="<?php echo $angsuranKe ?>" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="keterangan" class="col-sm-4 control-label" >Besar Angsuran </label>
          <div class="col-sm-8">
           <input type="text" class="form-control" name="besar_angsuran">
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
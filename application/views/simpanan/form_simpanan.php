<div class="container">

<?php echo form_open('simpanan/input','class="form-horizontal col-md-5" style="margin:;"') ?>
<center>
  <div class="panel panel-default">
    <div class="panel-heading"><b>FORM INPUT SIMPANAN</b></div>
    <div class="panel-body">
      
        <div class="form-group">
          <label class="col-sm-4 control-label">Nama Simpanan</label>
          <div class="col-sm-8">
              <select class="form-control" name="nm_simpanan">
                <option value="Simpanan Pokok">Simpanan Pokok</option>
                <option value="Simpanan Wajib">Simpanan Wajib</option>
                <option value="Simpanan Rekreasi">Simpanan Rekreasi</option>
                <option value="Simpanan Darurat">Simpanan Darurat</option>
              </select>
          </div>
        </div>                

        <input type="hidden" name="id_anggota" value="<?php echo $anggota['id_anggota'] ?>">

        <div class="form-group">
          <label class="col-sm-4 control-label">Tanggal Simpanan</label>
          <div class="col-sm-8">
              <input type="date" class="form-control" name="tgl_simpanan" value="<?php echo date('Y-m-d') ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Besar Simpanan</label>
          <div class="col-sm-8">
            <div class="input-group">
              <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" name="besar_simpanan">
            </div>              
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
              <input type="submit" name="submit" class="btn btn-primary">
          </div>
        </div>  
    </div>
    </center>
  </div>
</div>
<div class="container">
<?php echo form_open('kategori_pinjaman/input','class="form-horizontal col-md-5" style="margin-left:32%;"') ?>
	<div class="panel panel-default">
    <div class="panel-heading"><b>FORM INPUT KATEGORI PINJAMAN</b></div>
    <div class="panel-body">   
      
      	<div class="form-group">
        	<label class="col-sm-4 control-label">ID Kategori Pinjaman</label>
        	<div class="col-sm-8">
          		<input type="text" class="form-control" name="id_kategori">
        	</div>
      	</div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Nama Kategori Pinjaman</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="nama_kategori">
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
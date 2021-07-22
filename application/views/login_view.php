<?php
$this->load->view('part/header_login');

echo form_open('login/cekLogin');
?>
<div class="margin-center col-md-3">
	
	<div class="login-wrapper">	
		<h3 class="login-header text-center">Login</h3>		
			<?php echo $this->session->flashdata('error') ?>
		
		<div class="form-group">			
			<img src="<?php echo base_url() ?>assets/img/logokecil.png" class="img-circle center">
		</div>	
		<div class="form-group">
			<input type="text" name="username" placeholder="Username" class="list-group-item login-form" required autofocus>
			<input type="password" name="pass" placeholder="Password" class="list-group-item login-form" required>
		</div>	
			<input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block">
		
	</div>
</div>
<?php
echo form_close();

?>
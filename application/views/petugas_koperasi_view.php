<?php 
$this->load->view("part/header");
$this->load->view("part/navigation");
if($view == 'edit')
	$this->load->view('petugas_koperasi/form_edit');
else
$this->load->view('petugas_koperasi/form_input');
$this->load->view('petugas_koperasi/tampil_data');
$this->load->view("part/footer");
?>
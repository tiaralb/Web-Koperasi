<?php 
$this->load->view("part/header");
$this->load->view("part/navigation");
if($view == 'edit')
	$this->load->view('anggota/form_edit');
else
$this->load->view('anggota/form_input');
$this->load->view('anggota/tampil_data');
$this->load->view("part/footer");
?>
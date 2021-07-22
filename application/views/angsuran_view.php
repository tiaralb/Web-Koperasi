<?php 
$this->load->view("part/header");
$this->load->view("part/navigation");

if($view == "kwitansi")
 	$this->load->view('angsuran/kwitansi_angsuran');
elseif($view == "lapangsuran")
 	$this->load->view('angsuran/lapangsuran');
else
	$this->load->view("angsuran/form_input"); 

$this->load->view("part/footer");
?>
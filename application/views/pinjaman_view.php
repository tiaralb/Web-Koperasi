<?php
$this->load->view("part/header");
$this->load->view("part/navigation");
if($view == "kwitansi")
 	$this->load->view('pinjaman/kwitansi_pinjaman');
elseif ($view=="lapindividu")
	$this->load->view('pinjaman/lapindividu');
else
	$this->load->view("pinjaman/form_input");

$this->load->view("part/footer");
?>
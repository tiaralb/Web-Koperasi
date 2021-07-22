<?php
$this->load->view("part/header");
$this->load->view("part/navigation");

if($view == "kwitansi")
	$this->load->view("simpanan/kwitansi_simpan");
else if($view == "lapindividu")
	$this->load->view("simpanan/lapindividu");
else if($view == "lapkop")
	$this->load->view("simpanan/lapkop");
else
	$this->load->view("simpanan/form_input");

$this->load->view("part/footer");
?>
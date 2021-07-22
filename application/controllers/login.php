<?php

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	
	}

	function index(){
		 
		if($this->session->userdata('status_login'))
			redirect('home');
		else
		$this->load->view('login_view');
		
	}

	function cekLogin(){
		if($this->input->post('submit')){
			$this->login_model->cekUsername($this->input->post('username'));			
		}
		redirect('login');
	
	}

	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('status_login');
		$this->session->sess_destroy();
		redirect('login');
		/*
			unset atau hapus session "username" && "status_login" biar
			bisa logout
			kemudian redirect atau dialihkan ke halaaman login
		*/

	}

	
}
?>
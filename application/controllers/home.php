<?php

class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		
	}

	function index(){
		$this->load->view('home_view1');
	}


}
?>
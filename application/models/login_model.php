<?php

class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function cekUsername(){
		$user = $this->input->post('username');
		$pass = $this->input->post('pass');

		$query = $this->db->query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
		

		if($query->num_rows()>0){
			
			$data = array(
				'username' => $user, 
				'status_login' => true
				);
			$this->session->set_userdata($data);
			
		}else{
			$this->session->set_flashdata('error',"Username atau Password salah !");
			$this->session->set_userdata('status_login',false);
		}
	}

	
}
?>
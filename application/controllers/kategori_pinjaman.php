<?php

class kategori_pinjaman extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		$this->load->model('kategori_pinjaman_model');
	}

	function index(){
		$data['kategori'] = $this->kategori_pinjaman_model->tampil();
		$this->load->view('kategori_pinjaman_view',$data);
	}

	function input(){
		if($this->input->post('submit')){
			$input = $this->kategori_pinjaman_model->input();
			if(!$input)
				echo "gagal input";
			else
				redirect('kategori_pinjaman');
		}
	}

	function update(){
		
	}

	function hapus($id){
		$query = $this->kategori_pinjaman_model->delete($id);
		if($query)
			redirect('kategori_pinjaman');
		else
			echo "gagal hapus";
	}

	function tampil(){
		
	}
}
?>
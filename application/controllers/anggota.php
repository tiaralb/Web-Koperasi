<?php

class Anggota extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		$this->load->model('anggota_model');
		$this->load->model('petugas_koperasi_model');
		/*
			if(!$this->session->userdata('status_login'))
			redirect('login');
			

			$this->load->model('anggota_model');
			$this->load->model('petugas_koperasi_model');
			
		*/
	}

	function index(){
		$data['anggota'] = $this->anggota_model->tampil();
		$data['petugas'] = $this->petugas_koperasi_model->tampil();
		$data['view'] = '';
		$this->load->view('anggota_view',$data);	

	}

	function input(){
		if($this->input->post('submit')){
			$input = $this->anggota_model->input();
			if(!$input)
				echo "gagal input";
			else
				redirect('anggota');
		}
		
	}

	function update(){
		if($this->input->post('update')){
			$input = $this->anggota_model->update();
			if(!$input)
				echo "gagal update";
			else
				redirect('anggota');
		}
	}

	function hapus($id){
		$query = $this->anggota_model->delete($id);
		if($query)
			redirect('anggota');
		else
			echo "gagal hapus";
		
	}

	function edit($id){
		$data['view'] = 'edit';
		$data['anggotaSatu'] = $this->anggota_model->tampilSatu($id);
		$data['anggota'] = $this->anggota_model->tampil();
		$this->load->view('anggota_view',$data);
		
	}

	function cari(){
		$data['view'] = '';
		$data['anggota'] = $this->anggota_model->pilihAnggota($this->input->post('nama'));
		$this->load->view('anggota_view',$data);
	}
}
?>
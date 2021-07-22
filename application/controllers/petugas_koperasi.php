<?php

class Petugas_koperasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		$this->load->model('petugas_koperasi_model');
	}

	function index(){
		$data['petugas'] = $this->petugas_koperasi_model->tampil();
		$data['view'] = '';
		$this->load->view('petugas_koperasi_view',$data);		
	}

	function input(){
		if($this->input->post('submit')){
			$input = $this->petugas_koperasi_model->input();
			if(!$input)
				echo "gagal input";
			else
				redirect('petugas_koperasi');
		}
	}

	function update(){
		if($this->input->post('update')){
			$input = $this->petugas_koperasi_model->update();
			if(!$input)
				echo "gagal update";
			else
				redirect('petugas_koperasi');
		}
	}

	function hapus($id){
		$query = $this->petugas_koperasi_model->delete($id);
		if($query)
			redirect('petugas_koperasi');
		else
			echo "gagal hapus";
	}

	function edit($id){
		$data['view'] = 'edit';
		$data['petugasSatu'] = $this->petugas_koperasi_model->tampilSatu($id);
		$data['petugas'] = $this->petugas_koperasi_model->tampil();
		$this->load->view('petugas_koperasi_view',$data);
	}

	function cari(){
		$data['view'] = '';
		$data['petugas'] = $this->petugas_koperasi_model->pilihPetugas($this->input->post('nama'));
		$this->load->view('petugas_koperasi_view',$data);
	}
}
?>
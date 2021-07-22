<?php

class Simpanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		$this->load->model('simpanan_model');
		$this->load->model('anggota_model');
	}

	function index(){
		$data['simpanan'] = $this->simpanan_model->tampil();
		$data['anggota'] = $this->anggota_model->tampil();
		$data['view'] = "";
		$this->load->view('simpanan_view',$data);
	}

	function input(){
		$data['view'] = "";
		if($this->input->post('submit')){
			$query = $this->simpanan_model->input();
			if($query){
				//flash data untuk notif pemberitahuan ketika sudah di input
				$this->session->set_flashdata('nama_simpanan',$this->input->post('nm_simpanan'));
				$this->session->set_flashdata('besar_simpanan',$this->input->post('besar_simpanan'));
				redirect('simpanan/kwitansi/'.$this->input->post('id_anggota'));
			}else
				echo "gagal input";
		}else{

			//cek anggota
			$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
			$this->load->view('simpanan_view',$data);
		}
	}

	function kwitansi($id){
		$data['view'] = "kwitansi";
		$data['anggota'] = $this->anggota_model->tampilSatu($id);
		$this->load->view('simpanan_view',$data);
	}

	function lapindividu(){
		$data['view'] = "lapindividu";
		$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
		$data['simpanan'] = $this->simpanan_model->reportIndividu($this->input->post('id_anggota'));
		$this->load->view('simpanan_view',$data);
	}

	function lapkop(){
		$data['view'] = "lapkop";
		$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
		$data['simpanan'] = $this->simpanan_model->reportKoperasi($this->input->post('id_anggota'));
		$this->load->view('simpanan_view',$data);
	}

	/*function update(){
		if($this->input->post('update')
			$input = $this->simpanan_model->update();
		if($input)
			echo "gagal update";
		else
			redirect('simpanan');
	}

	function hapus(){
		$query = $this->simpanan_model->delete($id);
		if($query)
			redirect('simpanan');
		else
			echo("gagal hapus");
	}




	function tampil(){
		
	}
	*/
}
?>
<?php

class Angsuran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		$this->load->model('angsuran_model');
		$this->load->model('anggota_model');
		$this->load->model('pinjaman_model');
	}

	function index(){
		$data['angsuran'] = $this->angsuran_model->tampil();
		$data['anggota'] = $this->anggota_model->tampil();
		$data['pinjam'] = 0;
		$data['lunas'] = 0;
		$data['view'] = "";
		$this->load->view('angsuran_view',$data);
	}

	function input(){
		$data['view'] = "";		
		if($this->input->post('submit')){
			$input = $this->angsuran_model->input();
			if($input){
				$this->session->set_flashdata('besar_angsuran',$this->input->post("besar_angsuran"));
				$this->session->set_flashdata('tgl_pembayaran',$this->input->post("tgl_pembayaran"));
				$this->session->set_flashdata('angsuran_ke',$this->input->post("angsuran_ke"));
				redirect('angsuran/kwitansi/'.$this->input->post('id_anggota'));
			}else
				echo "gagal input";
		}else{
			$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
			$data['pinjam'] = $this->pinjaman_model->cekStatusPinjam();		
			$data['angsuranKe'] = $this->angsuran_model->cekAngsuran($data['pinjam'])+1;
			$data['lunas'] = $this->pinjaman_model->cekLunas();
			
			$this->load->view('angsuran_view',$data);
		}
	}

	function kwitansi($id){
		$data['view'] = "kwitansi";
		$data['anggota'] = $this->anggota_model->tampilSatu($id);
		$this->load->view('angsuran_view',$data);
	}

	function lapangsuran(){
		$data['view'] = "lapangsuran";
		$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
		$data['angsuran'] = $this->angsuran_model->reportAngsuran($this->input->post('id_anggota'));
		$this->load->view('angsuran_view',$data);
	}


	function update(){
		if($this->inpout->post('update'))
			$input = $this->angsuran_model->update();
		if($input)
			echo "gagal update";
		else
			redirect('angsuran');
	}
	
	function hapus($id){
		$query = $this->angsuran_model->delete($id);
		if($query)
			redirect('anggota');
		else
			echo "gagal hapus";
	}

	function tampil(){
		
	}
}

?>

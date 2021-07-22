<?php

class Pinjaman extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('status_login'))
			redirect('login');
		$this->load->model('pinjaman_model');
		$this->load->model('anggota_model');
		$this->load->model('kategori_pinjaman_model');
	}

	function index(){
		$data['anggota'] = $this->anggota_model->tampil();
		$data['pinjaman'] = $this->pinjaman_model->tampil();
		$data['kategori'] = $this->kategori_pinjaman_model->tampil();
		$data['view'] = "";
		$data['lunas'] =0;
		$this->load->view('pinjaman_view',$data);
	}

	function input(){
		$data['view'] = "";
		$data['kategori'] = $this->kategori_pinjaman_model->tampil();
		if($this->input->post('submit')){
			$input = $this->pinjaman_model->input();
			if($input){
				$this->session->set_flashdata('besar_pinjaman',$this->input->post('besar_pinjaman'));
				$this->session->set_flashdata('jumlah_angsuran',$this->input->post('jml_angsuran'));
				$this->session->set_flashdata('tgl_pelunasan',$this->input->post('tgl_pelunasan'));
				redirect('pinjaman/kwitansi/'.$this->input->post('id_anggota'));
			}else
				echo "gagal input";
		}else{
			$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
			$data['sedangPinjam'] = $this->pinjaman_model->cekStatusPinjam();
			$data['lunas'] = $this->pinjaman_model->cekLunas();
			
			$this->load->view('pinjaman_view',$data);
		}
	}

	function kwitansi($id){
		$data['view'] = "kwitansi";
		$data['anggota'] = $this->anggota_model->tampilSatu($id);
		$this->load->view('pinjaman_view',$data);
	}

	function lapindividu(){
		$data['view'] = "lapindividu";
		$data['anggota'] = $this->anggota_model->tampilSatu($this->input->post('id_anggota'));
		$data['pinjaman'] = $this->pinjaman_model->reportIndividu($this->input->post('id_anggota'));
		$this->load->view('pinjaman_view',$data);
	}


	/*
	function update(){
		if($this->input->post('update')
			$input = $this->pinjaman_model->update();
		if($input)
			echo"gagal update";
		else
			redirect('pinjaman');
	}

	function hapus($id){
		$query = $this->pinjaman_model->delete($id);
		if($query)
			redirect('pinjaman');
		else
			echo "gagal hapus";
		
	}

	function tampil(){
		
	}
	*/
}
?>

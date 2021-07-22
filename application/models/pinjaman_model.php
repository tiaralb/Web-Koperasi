<?php

class Pinjaman_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		$data = array(
			'id_pinjaman' => "",
			'id_anggota' => $this->input->post('id_anggota'),
			'id_kategori_pinjaman' => $this->input->post('kategori_pinjaman'),			
			'besar_pinjaman' => $this->input->post('besar_pinjaman'),
			'tgl_pengajuan_pinjaman' => $this->input->post('tgl_pengajuan'),
			'tgl_acc_pinjaman' => $this->input->post('tgl_acc'),
			'tgl_pinjaman' => $this->input->post('tgl_pinjaman'),
			'tgl_pelunasan' => $this->input->post('tgl_pelunasan'),
			'jumlah_angsuran'=>$this->input->post('jml_angsuran'),
			'ket' => $this->input->post('ket')
			);
		$query = $this->db->insert("pinjaman",$data);
		if($query)
			return true;
		else
			return false;
	}

	/*
	function update(){
		
	}

	function delete(){
		
	}

	
	*/
	function tampil(){
		$query = $this->db->get("pinjaman");
		return $query->result_array();
	}

	function cekStatusPinjam(){
		$query = $this->db->query("
			SELECT * FROM pinjaman WHERE id_anggota='".$this->input->post('id_anggota')."'");
		return $query->row_array();
	}

	function cekLunas(){
		$query = $this->db->query("
			SELECT * FROM pinjaman WHERE id_anggota='".$this->input->post('id_anggota')."' 
			AND ket='LUNAS'");
		return $query->num_rows();
	}

	function reportIndividu($id=""){
		$query = $this->db->query("
			SELECT id_anggota, nama, tgl_lahir, id_kategori_pinjaman, SUM(besar_pinjaman) AS besar_pinjaman, ket
			FROM pinjaman_view
			WHERE id_anggota = '$id'
			GROUP BY nama, id_kategori_pinjaman
			");
		return $query->result_array();
	}
}
?>
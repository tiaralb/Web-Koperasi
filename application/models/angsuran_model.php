<?php

class Angsuran_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		$data = array(
			'id_angsuran'=>"",
			'id_pinjaman'=>$this->input->post("id_pinjaman"),
			'id_anggota'=>$this->input->post("id_anggota"),
			'tgl_pembayaran'=>$this->input->post("tgl_pembayaran"),
			'angsuran_ke'=>$this->input->post("angsuran_ke"),	
			'besar_angsuran'=>$this->input->post("besar_angsuran"),
			'ket'=>$this->input->post("ket")
			);
		$query = $this->db->insert("angsuran",$data);
		if($query)
			return true;
		else
			return false;

	}

	function tampil(){
		$query = $this->db->get("angsuran");
		return $query->result_array();
	}

	function update(){
		$query = $this->db->get("angsuran");
		return $query->result_array();
	}

	function cekAngsuran($id){
		$query = $this->db->query("SELECT * FROM angsuran WHERE id_pinjaman = '$id'");
		return $query->num_rows();
	}

	function reportAngsuran($id=""){
		$query = $this->db->query("
			SELECT id_anggota, nama, tgl_lahir, id_pinjaman,angsuran_ke, SUM(besar_angsuran) AS besar_angsuran
			FROM angsuran_view
			WHERE id_anggota = '$id'
			GROUP BY nama, id_pinjaman 
			");
		return $query->result_array();
	}

	function delete(){
		
	}

	
}
?>
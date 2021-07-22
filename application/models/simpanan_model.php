<?php

class Simpanan_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		$data = array(
			'id_simpanan' => '',
			'nm_simpanan' => $this->input->post('nm_simpanan'),
			'id_anggota' => $this->input->post('id_anggota'),
			'tgl_simpanan' => $this->input->post('tgl_simpanan'),			
			'besar_simpanan' => $this->input->post('besar_simpanan'),			
			'ket' => $this->input->post('ket') 
			);
		$query = $this->db->insert('simpanan',$data);
		if(!$query)
			return false;
		else
			return true;
	}
	/*

	function update(){
		
	}

	function delete(){
		
	}
	*/

	function tampil(){
		$query = $this->db->get('simpanan');
		return $query->result_array();
	}

	function reportIndividu($id=""){
		$query = $this->db->query("
			SELECT id_anggota, nama, tgl_lahir, tmp_lahir, nm_simpanan, SUM(besar_simpanan) AS besar_simpanan
			FROM simpanan_view
			WHERE id_anggota = '$id'
			GROUP BY nama, nm_simpanan
			");
		return $query->result_array();
			
	}

	function reportKoperasi($id=""){
		$query = $this->db->query("
			SELECT id_anggota, nama, tgl_lahir, tmp_lahir, SUM(besar_simpanan) AS besar_simpanan
			FROM simpanan_view
			WHERE id_anggota = '$id'
			GROUP BY nama
			");
		return $query->result_array();
	}
}
?>
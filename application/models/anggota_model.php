<?php

class Anggota_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		$data = array(
			'id_anggota' => $this->input->post('id_anggota'),
			'id_petugas' => $this->input->post('id_petugas'),				
			'nama' => $this->input->post('nama'), 
			'alamat' => $this->input->post('alamat'), 
			'tgl_lahir' => $this->input->post('tgl_lahir'), 
			'tmp_lahir' => $this->input->post('tmp_lahir'), 
			'j_kel' => $this->input->post('j_kel'), 
			'status' => $this->input->post('status'), 
			'no_telp' => $this->input->post('no_telp'), 
			'ket' => $this->input->post('ket') 
			);
		$query = $this->db->insert('anggota',$data);
		if(!$query)
			return false;
		else
			return true;
		
	}

	function update(){
		$data = array(
			'id_anggota' => $this->input->post('id_anggota'),
			'id_petugas' => $this->input->post('id_petugas'),			
			'nama' => $this->input->post('nama'), 
			'alamat' => $this->input->post('alamat'), 
			'tgl_lahir' => $this->input->post('tgl_lahir'), 
			'tmp_lahir' => $this->input->post('tmp_lahir'), 
			'j_kel' => $this->input->post('j_kel'), 
			'status' => $this->input->post('status'), 
			'no_telp' => $this->input->post('no_telp'), 
			'ket' => $this->input->post('ket') 
			);
		$this->db->where('id_anggota', $this->input->post('id_anggota'));
		$query = $this->db->update('anggota',$data);
		if(!$query)
			return false;
		else
			return true;
	}

	function delete($id){
		$query = $this->db->delete('anggota',array('id_anggota' => $id));
		if($query)
			return true;
		else
			return false;
		/* 
		$query = $this->db->delete('anggota',array('id_anggota' => $id));
		*/
	}

	function tampil(){
		$query = $this->db->get('anggota');
		return $query->result_array();
	}

	function tampilSatu($id){
		$query = $this->db->query("SELECT * FROM anggota WHERE id_anggota='$id'");
		return $query->row_array();

	}

	function pilihAnggota($id){
		$query =$this->db->query("SELECT * FROM anggota WHERE nama LIKE '%$id%'");
		return $query->result_array();
	}
}
?>
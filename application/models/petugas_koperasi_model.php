<?php

class Petugas_koperasi_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		$data = array(
			'id_petugas' => $this->input->post('id_petugas'),			
			'nama' => $this->input->post('nama'), 
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),	  
			'tgl_lahir' => $this->input->post('tgl_lahir'),				
			'ket' => $this->input->post('ket') 
			);
		$query = $this->db->insert('petugas_koperasi',$data);
		if(!$query)
			return false;
		else
			return true;
	}

	function update(){
		$data = array(
			'id_petugas' => $this->input->post('id_petugas'),			
			'nama' => $this->input->post('nama'), 
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),	  
			'tgl_lahir' => $this->input->post('tgl_lahir'),				
			'ket' => $this->input->post('ket') 			
			);
		$this->db->where('id_petugas', $this->input->post('id_petugas'));
		$query = $this->db->update('petugas_koperasi',$data);
		if(!$query)
			return false;
		else
			return true;
	}

	function delete($id){
		$query = $this->db->delete('petugas_koperasi',array('id_petugas' => $id));
		if($query)
			return true;
		else
			return false;
	}

	function tampil(){
		$query = $this->db->get('petugas_koperasi');
		return $query->result_array();
	}

	function tampilSatu($id){
		$query = $this->db->query("SELECT * FROM petugas_koperasi WHERE id_petugas='$id'");
		return $query->row_array();
	}

	function pilihPetugas($id){
		$query =$this->db->query("SELECT * FROM petugas_koperasi WHERE nama LIKE '%$id%'");
		return $query->result_array();
	}
}
?>
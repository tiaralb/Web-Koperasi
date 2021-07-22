<?php

class Kategori_pinjaman_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		$data = array(
			'id_kategori_pinjaman' => $this->input->post('id_kategori'), 
			'nama_kategori_pinjaman' => $this->input->post('nama_kategori')
			);
		$query = $this->db->insert('kategori_pinjaman',$data);
		if(!$query)
			return false;
		else
			return true;
	}

	function update(){
		
	}

	function delete($id){
		$query = $this->db->delete('kategori_pinjaman',array('id_kategori_pinjaman' => $id));
		if($query)
			return true;
		else
			return false;
	}

	function tampil(){
		$query = $this->db->get('kategori_pinjaman');
		return $query->result_array();
	}
}
?>
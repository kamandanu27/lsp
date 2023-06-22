<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_informasi');
			$this->db->order_by('tbl_informasi.id_informasi', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_informasi');
			$this->db->order_by('tbl_informasi.id_informasi', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_informasi');
		$this->db->where('id_informasi', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_informasi');
		$this->db->where('email', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_informasi');
		$this->db->where(array(
			'tbl_informasi.email' => $username,
			'tbl_informasi.password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_informasi', $data);
	}

	public function update($data)
	{
		$this->db->where('id_informasi', $data['id_informasi']);
		$this->db->update('tbl_informasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_informasi', $data['id_informasi']);
		$this->db->delete('tbl_informasi');
	}



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_profil');
			$this->db->order_by('tbl_profil.id_profil', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_profil');
			$this->db->order_by('tbl_profil.id_profil', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_profil');
		$this->db->where('id_profil', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_profil');
		$this->db->where('email', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_profil');
		$this->db->where(array(
			'tbl_profil.email' => $username,
			'tbl_profil.password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_profil', $data);
	}

	public function update($data)
	{
		$this->db->where('id_profil', $data['id_profil']);
		$this->db->update('tbl_profil', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_profil', $data['id_profil']);
		$this->db->delete('tbl_profil');
	}



}

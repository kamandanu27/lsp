<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pendaftaran');
			$this->db->join('tbl_asesi', 'tbl_pendaftaran.id_asesi = tbl_asesi.id_asesi');
			$this->db->join('tbl_asesor', 'tbl_pendaftaran.id_asesor = tbl_asesor.id_asesor');
			$this->db->join('tbl_skema', 'tbl_pendaftaran.id_skema = tbl_skema.id_skema');
			$this->db->order_by('tbl_pendaftaran.id_pendaftaran', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pendaftaran');
			$this->db->join('tbl_asesi', 'tbl_pendaftaran.id_asesi = tbl_asesi.id_asesi');
			$this->db->join('tbl_asesor', 'tbl_pendaftaran.id_asesor = tbl_asesor.id_asesor');
			$this->db->join('tbl_skema', 'tbl_pendaftaran.id_skema = tbl_skema.id_skema');
			$this->db->order_by('tbl_pendaftaran.id_pendaftaran', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_pendaftaran');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}


	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_pendaftaran');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_pendaftaran');
		$this->db->join('tbl_asesi', 'tbl_pendaftaran.id_asesi = tbl_asesi.id_asesi');
		$this->db->join('tbl_asesor', 'tbl_pendaftaran.id_asesor = tbl_asesor.id_asesor');
			$this->db->join('tbl_skema', 'tbl_pendaftaran.id_skema = tbl_skema.id_skema');
		$this->db->where('id_pendaftaran', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_pendaftaran');
		$this->db->where('email', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_pendaftaran');
		$this->db->where(array(
			'tbl_pendaftaran.email' => $username,
			'tbl_pendaftaran.password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pendaftaran', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pendaftaran', $data['id_pendaftaran']);
		$this->db->update('tbl_pendaftaran', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pendaftaran', $data['id_pendaftaran']);
		$this->db->delete('tbl_pendaftaran');
	}



}

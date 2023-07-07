<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Admin_model','admin');
		$this->CI->load->model('Asesi_model','asesi');
	}

	public function login_admin($username,$password)
	{
		$check = $this->CI->admin->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_admin,
				'nama'				=> $check->nama_admin,
				'level'				=> $check->level,
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}
		else{
			$q = 0;
			return $q;
		}
	}

	public function login_asesi($username,$password)
	{
		$check = $this->CI->asesi->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_asesi,
				'nama'				=> $check->nama_asesi,
				'level'				=> $check->level,
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}
		else{
			$q = 0;
			return $q;
		}
	}

	public function login_asesor($username,$password)
	{
		$check = $this->CI->asesor->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_asesor,
				'nama'				=> $check->nama_asesor,
				'level'				=> $check->level,
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}
		else{
			$q = 0;
			return $q;
		}
	}


	public function cek()
	{
		if ($this->CI->session->userdata('login') == '') {
			redirect(base_url('login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id',
			'nama',
			'id_admin',
			'id_asesi',
			'id_asesor',
			'level',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('login'),'refresh');
	}
}
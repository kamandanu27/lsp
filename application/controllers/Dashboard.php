<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth->cek();
		$this->load->model('Admin_model', 'user');
		$this->load->model('Asesi_model', 'asesi');
		$this->load->model('Asesor_model', 'asesor');
		$this->load->model('Event_model', 'event');
		$this->load->model('Informasi_model', 'informasi');
		$this->load->helper('tgl_indo');
	}
  
	public function index()
	{
		if($this->session->userdata('level') == 'Admin'){
			$data = array(
				'title'						=> $this->session->userdata('level').' - Dashboard',
				'admin'						=> $this->session->userdata('nama'),
				'jumlah_asesi' 				=> $this->asesi->tabel()->num_rows(),
				'jumlah_asesor' 			=> $this->asesor->tabel()->num_rows(),
				'jumlah_event' 				=> $this->event->tabel()->num_rows(),
				'jumlah_informasi' 			=> $this->informasi->tabel()->num_rows(),
				'content'	 				=> 'dashboard/v_content',
				'ajax'	 					=> 'dashboard/v_ajax'
			);

			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

		if($this->session->userdata('level') == 'Asesi'){
			$data = array(
				'title'						=> $this->session->userdata('level').' - Dashboard',
				'asesi'						=> $this->session->userdata('nama'),
				'jumlah_asesi' 				=> $this->asesi->tabel()->num_rows(),
				'jumlah_asesor' 			=> $this->asesor->tabel()->num_rows(),
				'jumlah_event' 				=> $this->event->tabel()->num_rows(),
				'jumlah_informasi' 			=> $this->informasi->tabel()->num_rows(),
				'content'	 				=> 'dashboard/v_content',
				'ajax'	 					=> 'dashboard/v_ajax'
			);

			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

		if($this->session->userdata('level') == 'Asesor'){
			$data = array(
				'title'						=> $this->session->userdata('level').' - Dashboard',
				'asesor'					=> $this->session->userdata('nama'),
				'jumlah_asesi' 				=> $this->asesi->tabel()->num_rows(),
				'jumlah_asesor' 			=> $this->asesor->tabel()->num_rows(),
				'jumlah_event' 				=> $this->event->tabel()->num_rows(),
				'jumlah_informasi' 			=> $this->informasi->tabel()->num_rows(),
				'content'	 				=> 'dashboard/v_content',
				'ajax'	 					=> 'dashboard/v_ajax'
			);

			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/admin/Guru.php */
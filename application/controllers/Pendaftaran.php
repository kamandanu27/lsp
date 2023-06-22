<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pendaftaran_model', 'pendaftaran');
		$this->load->model('Asesi_model', 'asesi');
		$this->load->model('Asesor_model', 'asesor');
		$this->load->model('Skema_model', 'skema');
		$this->load->helper('tgl_indo');
		$this->load->helper('security');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Data Pendaftaran',
			'data' 			=> $this->pendaftaran->tabel()->result(),
			'content'		=> 'pendaftaran/v_content',
			'ajax'	 		=> 'pendaftaran/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'list_asesi' 	=> $this->asesi->tabel()->result(),
			'list_asesor' 	=> $this->asesor->tabel()->result(),
			'list_skema' 	=> $this->skema->tabel()->result(),
			'title'			=> 'LSP',
			'judul'			=> 'Tambah Data Pendaftaran',
			'content'		=> 'pendaftaran/v_add',
			'ajax'	 		=> 'pendaftaran/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->pendaftaran->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('pendaftaran'),'refresh');
		}else{

			$data = array(
				'list_asesi' 	=> $this->asesi->tabel()->result(),
				'list_asesor' 	=> $this->asesor->tabel()->result(),
				'list_skema' 	=> $this->skema->tabel()->result(),
				'title'			=> 'LSP',
				'judul'			=> 'Edit Data Pendaftaran',
				'data' 			=> 	$this->pendaftaran->detail($id)->row_array(),
				'content'		=> 'pendaftaran/v_edit',
				'ajax'	 		=> 'pendaftaran/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

	}


	public function insert()
	{
		$this->form_validation->set_rules('no_pendaftaran', 'No Pendaftaran', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'no_pendaftaran'    			=> $this->input->post('no_pendaftaran'),
				'tgl_pendaftaran'   			=> $this->input->post('tgl_pendaftaran'),
				'id_asesi'   					=> $this->input->post('id_asesi'),
				'id_asesor'   					=> $this->input->post('id_asesor'),
				'id_skema'   					=> $this->input->post('id_skema'),
				'sertifikat'   					=> $this->input->post('sertifikat'),
				'status_pendaftaran'   			=> $this->input->post('status_pendaftaran')
			);

			$q = $this->pendaftaran->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('pendaftaran'),'refresh');

		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('pendaftaran/add'),'refresh');
		}

		
	}

	public function update()
	{
		$cek = $this->pendaftaran->detail($this->input->post('id_pendaftaran'))->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pendaftaran'),'refresh');
		}else{

				$this->form_validation->set_rules('id_pendaftaran', 'ID pendaftaran', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_pendaftaran'				=> $this->input->post('id_pendaftaran'),
						'no_pendaftaran'     			=> $this->input->post('no_pendaftaran'),
						'tgl_pendaftaran'   			=> $this->input->post('tgl_pendaftaran'),
						'id_asesi'   					=> $this->input->post('id_asesi'),
						'id_asesor'   					=> $this->input->post('id_asesor'),
						'id_skema'   					=> $this->input->post('id_skema'),
						'sertifikat'   					=> $this->input->post('sertifikat'),
						'status_pendaftaran'   			=> $this->input->post('status_pendaftaran')
					);
					$this->pendaftaran->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('pendaftaran'),'refresh');
				}else{
					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('pendaftaran/edit/'.$this->input->post('id')),'refresh');
				}

		}

		
			
	}

	public function delete($id)
	{
		$cek = $this->pendaftaran->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pendaftaran'),'refresh');
		}else{

			$data = array(
				'id_pendaftaran'	=> $id
			);
			
			$this->pendaftaran->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('pendaftaran'),'refresh');
		}
		

	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/pendaftaran/Guru.php */
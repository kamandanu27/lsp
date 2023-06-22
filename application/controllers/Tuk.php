<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tuk_model', 'tuk');
		$this->load->helper('tgl_indo');
		$this->load->helper('security');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Data Tuk',
			'data' 			=> $this->tuk->tabel()->result(),
			'content'		=> 'tuk/v_content',
			'ajax'	 		=> 'tuk/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Tambah Data Tuk',
			'content'		=> 'tuk/v_add',
			'ajax'	 		=> 'tuk/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->tuk->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('tuk'),'refresh');
		}else{

			$data = array(
				'title'			=> 'LSP',
				'judul'			=> 'Edit Data Tuk',
				'data' 			=> 	$this->tuk->detail($id)->row_array(),
				'content'		=> 'tuk/v_edit',
				'ajax'	 		=> 'tuk/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

	}


	public function insert()
	{
		$this->form_validation->set_rules('kode_tuk', 'Kode tuk', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'kode_tuk'     			=> $this->input->post('kode_tuk'),
				'jenis_tuk'     		=> $this->input->post('jenis_tuk'),
				'nama_tuk'    			=> $this->input->post('nama_tuk'),
				'alamat_tuk'   			=> $this->input->post('alamat_tuk')
			);

			$q = $this->tuk->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('tuk'),'refresh');

		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('tuk/add'),'refresh');
		}

		
	}

	public function update()
	{
		$cek = $this->tuk->detail($this->input->post('id_tuk'))->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('tuk'),'refresh');
		}else{

				$this->form_validation->set_rules('id_tuk', 'ID tuk', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_tuk'				=> $this->input->post('id_tuk'),
						'kode_tuk'    			=> $this->input->post('kode_tuk'),
						'jenis_tuk'    			=> $this->input->post('jenis_tuk'),
						'nama_tuk'     			=> $this->input->post('nama_tuk'),
						'alamat_tuk'   			=> $this->input->post('alamat_tuk')
					);
					$this->tuk->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('tuk'),'refresh');
				}else{
					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('tuk/edit/'.$this->input->post('id')),'refresh');
				}

		}

		
			
	}

	public function delete($id)
	{
		$cek = $this->tuk->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('tuk'),'refresh');
		}else{

			$data = array(
				'id_tuk'	=> $id
			);
			
			$this->tuk->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('tuk'),'refresh');
		}
		

	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/tuk/Guru.php */
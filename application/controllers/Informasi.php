<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Informasi_model', 'informasi');
		$this->load->helper('tgl_indo');
		$this->load->helper('security');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Data Informasi',
			'data' 			=> $this->informasi->tabel()->result(),
			'content'		=> 'informasi/v_content',
			'ajax'	 		=> 'informasi/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Tambah Data Informasi',
			'content'		=> 'informasi/v_add',
			'ajax'	 		=> 'informasi/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->informasi->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('informasi'),'refresh');
		}else{

			$data = array(
				'title'			=> 'LSP',
				'judul'			=> 'Edit Data Informasi',
				'data' 			=> 	$this->informasi->detail($id)->row_array(),
				'content'		=> 'informasi/v_edit',
				'ajax'	 		=> 'informasi/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

	}


	public function insert()
	{
		$this->form_validation->set_rules('judul_informasi', 'Judul Informasi', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$image 								= time().'-'.$_FILES["foto_informasi"]['name']; //data post dari form
			$config['upload_path'] 				= './public/image/upload/informasi/'; //lokasi folder foto produk
			$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
			$config['max_size']  				= '25000'; //maksimal 25Mb
			$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

			$this->load->library('upload', $config); //panggil librarys upload
			$this->upload->do_upload('foto_informasi'); //upload foto produk

			$data = array(
				'judul_informasi'    		=> $this->input->post('judul_informasi'),
				'foto_informasi'			=> $image,
				'isi_informasi'   			=> $this->input->post('isi_informasi')
			);

			$q = $this->informasi->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah Data Berhasil');
			redirect(base_url('informasi'),'refresh');
		}else{
			$this->session->set_flashdata('error', '<i class="fa fa-close"></i> gagal, Data Tidak Lengkap');
			redirect(base_url('informasi'),'refresh');
		}

		
	}

	public function update()
	{
		$cek = $this->informasi->detail($this->input->post('id_informasi'))->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('informasi'),'refresh');
		}else{

			if($_FILES["foto_informasi"]['name'] !== ""){ //jika tidak ada upload foto

				$image 								= time().'-'.$_FILES["foto_informasi"]['name']; //data post dari form
				$config['upload_path'] 				= './public/image/upload/informasi/'; //lokasi folder foto produk
				$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
				$config['max_size']  				= '25000'; //maksimal 25Mb
				$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

				$this->load->library('upload', $config); //panggil librarys upload
				$this->upload->do_upload('foto_informasi'); //upload foto produk

					$data = array(
						'id_informasi'				=> $this->input->post('id_informasi'),
						'foto_informasi'			=> $image
					);
					
					$q = $this->informasi->update($data);
		
			}

				$data = array(
					'id_informasi'				=> $this->input->post('id_informasi'),
					'judul_informasi'    		=> $this->input->post('judul_informasi'),
					'isi_informasi'   			=> $this->input->post('isi_informasi')
			);

				$this->informasi->update($data);
				$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
				redirect(base_url('informasi'),'refresh');
		}

		
			
	}

	public function delete($id)
	{
		$cek = $this->informasi->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('informasi'),'refresh');
		}else{

			$data = array(
				'id_informasi'	=> $id
			);
			
			$this->informasi->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('informasi'),'refresh');
		}
		

	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/informasi/Guru.php */
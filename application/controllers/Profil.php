<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profil_model', 'profil');
		$this->load->helper('tgl_indo');
		$this->load->helper('security');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Data Profil',
			'data' 			=> $this->profil->tabel()->result(),
			'content'		=> 'profil/v_content',
			'ajax'	 		=> 'profil/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Tambah Data Profil',
			'content'		=> 'profil/v_add',
			'ajax'	 		=> 'profil/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->profil->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('profil'),'refresh');
		}else{

			$data = array(
				'title'			=> 'LSP',
				'judul'			=> 'Edit Data Profil',
				'data' 			=> 	$this->profil->detail($id)->row_array(),
				'content'		=> 'profil/v_edit',
				'ajax'	 		=> 'profil/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

	}


	public function insert()
	{
		$this->form_validation->set_rules('visimisi', 'Visimisi', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$image 								= time().'-'.$_FILES["struktur_organisasi"]['name']; //data post dari form
			$config['upload_path'] 				= './public/image/upload/profil/'; //lokasi folder foto produk
			$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
			$config['max_size']  				= '25000'; //maksimal 25Mb
			$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

			$this->load->library('upload', $config); //panggil librarys upload
			$this->upload->do_upload('struktur_organisasi'); //upload foto produk

			$data = array(
				'visimisi'     				=> $this->input->post('visimisi'),
				'struktur_organisasi'		=> $image,
				'sejarah_tugas'   			=> $this->input->post('sejarah_tugas'),
				'kontak'   					=> $this->input->post('kontak')
			);

			$q = $this->profil->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah Data Berhasil');
			redirect(base_url('profil'),'refresh');
		}else{
			$this->session->set_flashdata('error', '<i class="fa fa-close"></i> gagal, Data Tidak Lengkap');
			redirect(base_url('profil'),'refresh');
		}

	}

	public function update()
	{
		$cek = $this->profil->detail($this->input->post('id_profil'))->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('profil'),'refresh');
		}else{

			if($_FILES["struktur_organisasi"]['name'] !== ""){ //jika tidak ada upload foto

				$image 								= time().'-'.$_FILES["struktur_organisasi"]['name']; //data post dari form
				$config['upload_path'] 				= './public/image/upload/profil/'; //lokasi folder foto produk
				$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
				$config['max_size']  				= '25000'; //maksimal 25Mb
				$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

				$this->load->library('upload', $config); //panggil librarys upload
				$this->upload->do_upload('struktur_organisasi'); //upload foto produk

					$data = array(
						'id_profil'						=> $this->input->post('id_profil'),
						'struktur_organisasi'			=> $image
					);
					
					$q = $this->profil->update($data);
		
			}

				$data = array(
					'id_profil'					=> $this->input->post('id_profil'),
					'visimisi'     				=> $this->input->post('visimisi'),
					'sejarah_tugas'   			=> $this->input->post('sejarah_tugas'),
					'kontak'   					=> $this->input->post('kontak')
			);

				$this->profil->update($data);
				$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
				redirect(base_url('profil'),'refresh');
		}

	}

	public function delete($id)
	{
		$cek = $this->profil->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('profil'),'refresh');
		}else{

			$data = array(
				'id_profil'	=> $id
			);
			
			$this->profil->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('profil'),'refresh');
		}
		
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/profil/Guru.php */
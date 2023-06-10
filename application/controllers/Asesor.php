<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Asesor_model', 'asesor');
		$this->load->helper('tgl_indo');
		$this->load->helper('security');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Data Asesor',
			'data' 			=> $this->asesor->tabel()->result(),
			'content'		=> 'asesor/v_content',
			'ajax'	 		=> 'asesor/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> 'LSP',
			'judul'			=> 'Tambah Data Asesor',
			'content'		=> 'asesor/v_add',
			'ajax'	 		=> 'asesor/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->asesor->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('asesor'),'refresh');
		}else{

			$data = array(
				'title'			=> 'LSP',
				'judul'			=> 'Edit Data Asesor',
				'data' 			=> 	$this->asesor->detail($id)->row_array(),
				'content'		=> 'asesor/v_edit',
				'ajax'	 		=> 'asesor/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}

	}


	public function insert()
	{
		$this->form_validation->set_rules('jeniskelamin_asesor', 'required',
		array( 'required'  => '%s harus diisi!'));

			$image 								= time().'-'.$_FILES["foto_asesor"]['name']; //data post dari form
			$config['upload_path'] 				= './public/image/upload/asesor/'; //lokasi folder foto produk
			$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
			$config['max_size']  				= '25000'; //maksimal 25Mb
			$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

			$this->load->library('upload', $config); //panggil librarys upload
			$this->upload->do_upload('foto_asesor'); //upload foto produk

			$data = array(
				'noregister_asesor'   			=> $this->input->post('noregister_asesor'),
				'nik_asesor'   			=> $this->input->post('nik_asesor'),
				'nama_asesor'   			=> $this->input->post('nama_asesor'),
				'alamat_asesor'   			=> $this->input->post('alamat_asesor'),
				'notlp_asesor'   			=> $this->input->post('notlp_asesor'),
				'jeniskelamin_asesor'     => $this->input->post('jeniskelamin_asesor'),
				'agama_asesor'   			=> $this->input->post('agama_asesor'),
				'tempatlahir_asesor'   			=> $this->input->post('tempatlahir_asesor'),
				'tanggallahir_asesor'   			=> $this->input->post('tanggallahir_asesor'),
				'provinsi_asesor'   			=> $this->input->post('provinsi_asesor'),
				'kotakab_asesor'   			=> $this->input->post('kotakab_asesor'),
				'jurusan_asesor'   			=> $this->input->post('jurusan_asesor'),
				'programstudi_asesor'   			=> $this->input->post('programstudi_asesor'),
				'email_asesor'   			=> $this->input->post('email_asesor'),
				'password_asesor'   			=> $this->input->post('password_asesor'),
				'sertifikat_asesor'   			=> $this->input->post('sertifikat_asesor'),
				'foto_asesor'		=> $image
			);

			$q = $this->asesor->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('asesor'),'refresh');

		
		
	}

	public function update()
	{
		$cek = $this->asesor->detail($this->input->post('id_asesor'))->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('asesor'),'refresh');
		}else{

				$this->form_validation->set_rules('id_asesor', 'ID asesor', 'required',
				array( 'required'  => '%s harus diisi!'));

				if($_FILES["foto_asesor"]['name'] == ""){ //jika tidak ada upload foto

					$data = array(
						'id_asesor'				=> $this->input->post('id_asesor'),
						'noregister_asesor'   			=> $this->input->post('noregister_asesor'),
						'nik_asesor'   			=> $this->input->post('nik_asesor'),
						'nama_asesor'   			=> $this->input->post('nama_asesor'),
						'alamat_asesor'   			=> $this->input->post('alamat_asesor'),
						'notlp_asesor'   			=> $this->input->post('notlp_asesor'),
						'jeniskelamin_asesor'     => $this->input->post('jeniskelamin_asesor'),
						'agama_asesor'   			=> $this->input->post('agama_asesor'),
						'tempatlahir_asesor'   			=> $this->input->post('tempatlahir_asesor'),
						'tanggallahir_asesor'   			=> $this->input->post('tanggallahir_asesor'),
						'provinsi_asesor'   			=> $this->input->post('provinsi_asesor'),
						'kotakab_asesor'   			=> $this->input->post('kotakab_asesor'),
						'jurusan_asesor'   			=> $this->input->post('jurusan_asesor'),
						'programstudi_asesor'   			=> $this->input->post('programstudi_asesor'),
						'email_asesor'   			=> $this->input->post('email_asesor'),
						'password_asesor'   			=> $this->input->post('password_asesor'),
						'sertifikat_asesor'   			=> $this->input->post('sertifikat_asesor')
						);

						$q = $this->asesor->update($data);

				}else{//jika ada upload foto

					$image 								= time().'-'.$_FILES["foto_asesor"]['name']; //data post dari form
					$config['upload_path'] 				= './public/image/upload/asesor/'; //lokasi folder foto produk
					$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
					$config['max_size']  				= '25000'; //maksimal 25Mb
					$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

					$this->load->library('upload', $config); //panggil librarys upload
					$this->upload->do_upload('foto_asesor'); //upload foto produk

						$data = array(
							'id_asesor'				=> $this->input->post('id_asesor'),
							'noregister_asesor'   			=> $this->input->post('noregister_asesor'),
							'nik_asesor'   			=> $this->input->post('nik_asesor'),
							'nama_asesor'   			=> $this->input->post('nama_asesor'),
							'alamat_asesor'   			=> $this->input->post('alamat_asesor'),
							'notlp_asesor'   			=> $this->input->post('notlp_asesor'),
							'jeniskelamin_asesor'     => $this->input->post('jeniskelamin_asesor'),
							'agama_asesor'   			=> $this->input->post('agama_asesor'),
							'tempatlahir_asesor'   			=> $this->input->post('tempatlahir_asesor'),
							'tanggallahir_asesor'   			=> $this->input->post('tanggallahir_asesor'),
							'provinsi_asesor'   			=> $this->input->post('provinsi_asesor'),
							'kotakab_asesor'   			=> $this->input->post('kotakab_asesor'),
							'jurusan_asesor'   			=> $this->input->post('jurusan_asesor'),
							'programstudi_asesor'   			=> $this->input->post('programstudi_asesor'),
							'email_asesor'   			=> $this->input->post('email_asesor'),
							'password_asesor'   			=> $this->input->post('password_asesor'),
							'sertifikat_asesor'   			=> $this->input->post('sertifikat_asesor'),
							'foto_asesor'		=> $image

						);
						
						$q = $this->asesor->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					$this->asesor->update($data);
					redirect(base_url('asesor'),'refresh');
				}
			}
	}

	public function delete($id)
	{
		$cek = $this->asesor->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('asesor'),'refresh');
		}else{

			$data = array(
				'id_asesor'	=> $id
			);
			
			$this->asesor->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('asesor'),'refresh');
		}
		

	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/asesor/Guru.php */
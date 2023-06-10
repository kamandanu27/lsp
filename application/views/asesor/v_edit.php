
        <section class="content-header">
          <h1>
            <?= $judul ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?= $judul ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-success">
                <div class="box-header with-border">
                    <?php
                    echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
                    if ($this->session->flashdata('success'))
                    {
                        echo '<div class="alert alert-success alert-dismissible " role="alert">';
                        echo $this->session->flashdata('success');
                        echo '</div>';
                    }
                    if ($this->session->flashdata('error'))
                    {
                        echo '<div class="alert alert-danger alert-dismissible " role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }

                ?>
                </div><!-- /.box-header -->

                

                <!-- form start -->
                <form action="<?php echo base_url() ?>asesor/update" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="row">
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="noregister_asesor">No. Register</label>
                          <div class="input-group col-md-8">
                              <input class="form-control" type="hidden" id="id_asesor" name="id_asesor" value="<?= $data['id_asesor'] ?>" required>
                              <input type="number" class="form-control" placeholder="No. Register" name="noregister_asesor" value="<?= $data['noregister_asesor'] ?>" required>
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash(); ?>" style="display: none">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="nik_asesor">Nik</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="Nik" name="nik_asesor" value="<?= $data['nik_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="nama_asesor">Nama</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Nama Asesor" name="nama_asesor" value="<?= $data['nama_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="alamat_asesor">Alamat</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Alamat" name="alamat_asesor" value="<?= $data['alamat_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="notlp_asesor">No. Telp</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="No. Telp" name="notlp_asesor" value="<?= $data['notlp_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
											  	<label class="col-md-4 control-label" for="exampleInputEmail1">Jenis Kelamin Pemohon:</label>
                          <select class="input-group col-sm-8 col-md-8" id="jeniskelamin_asesor" name="jeniskelamin_asesor">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
							         	</div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="exampleInputEmail1">Agama Pemohon:</label>
                          <select class="input-group col-sm-8 col-md-8" id="agama_asesor" name="agama_asesor">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                          </select>
							        	</div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tempatlahir_asesor">Tempat Lahir</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir_asesor" value="<?= $data['tempatlahir_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tanggallahir_asesor">Tanggal Lahir</label>
                          <div class="input-group col-md-8">
                              <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggallahir_asesor" value="<?= $data['tanggallahir_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="provinsi_asesor">Provinsi</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Provinsi" name="provinsi_asesor" value="<?= $data['provinsi_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="kotakab_asesor">Kota / Kabupaten</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Kota / Kabupaten" name="kotakab_asesor" value="<?= $data['kotakab_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="jurusan_asesor">Jurusan</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Jurusan" name="jurusan_asesor" value="<?= $data['jurusan_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="programstudi_asesor">Program Studi</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Program Studi" name="programstudi_asesor" value="<?= $data['programstudi_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="email_asesor">Email</label>
                          <div class="input-group col-md-8">
                              <input type="email" class="form-control" placeholder="Email" name="email_asesor" value="<?= $data['email_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="password_asesor">Password</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Password" name="password_asesor" value="<?= $data['password_asesor'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 col-form-label">Foto Asesor</label>
                            <div class="input-group col-sm-8 col-md-8">
                             <input type="file" class="form-control" id="foto_asesor" name="foto_asesor" id="exampleInputUpload Foto1" placeholder="Upload Foto">
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="sertifikat_asesor">Sertifikat</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Sertifikat" name="sertifikat_asesor" value="<?= $data['sertifikat_asesor'] ?>" required>
                          </div>
                        </div>

                    </div>



                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-4 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                          <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
                          <a href="<?= base_url() ?>asesor" class="btn btn-danger">Batal</a>
                        </div>
                      </div>
                    </div>

                  </div><!-- /.box-body -->

                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
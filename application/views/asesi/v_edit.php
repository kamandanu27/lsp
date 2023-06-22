
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
                <form action="<?php echo base_url() ?>asesi/update" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="row">
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nim_asesi">Nim</label>
                          <div class="input-group col-md-8">
                              <input class="form-control" type="hidden" id="id_asesi" name="id_asesi" value="<?= $data['id_asesi'] ?>" required>
                              <input type="number" class="form-control" placeholder="Nim" name="nim_asesi" value="<?= $data['nim_asesi'] ?>" required>
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash(); ?>" style="display: none">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nik_asesi">Nik</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="Nik" name="nik_asesi" value="<?= $data['nik_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nama_asesi">Nama</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Nama Asesi" name="nama_asesi" value="<?= $data['nama_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="alamat_asesi">Alamat</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Alamat" name="alamat_asesi" value="<?= $data['alamat_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="notlp_asesi">No. Telp</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="No. Telp" name="notlp_asesi" value="<?= $data['notlp_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
											  	<label class="col-md-3 control-label" for="exampleInputEmail1">Jenis Kelamin Pemohon</label>
                          <div class="input-group col-sm-8 col-md-8">
                              <select class="form-control" id="jeniskelamin_asesi" name="jeniskelamin_asesi">
                                <option value="">Pilih</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="exampleInputEmail1">Agama Pemohon</label>
                          <div class="input-group col-sm-8 col-md-8">
                              <select class="form-control" id="agama_asesi" name="agama_asesi">
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="tempatlahir_asesi">Tempat Lahir</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir_asesi" value="<?= $data['tempatlahir_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="tanggallahir_asesi">Tanggal Lahir</label>
                          <div class="input-group col-md-8">
                              <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggallahir_asesi" value="<?= $data['tanggallahir_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="provinsi_asesi">Provinsi</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Provinsi" name="provinsi_asesi" value="<?= $data['provinsi_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="kotakab_asesi">Kota / Kabupaten</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Kota / Kabupaten" name="kotakab_asesi" value="<?= $data['kotakab_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="tahunmasuk_asesi">Tahun Masuk</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="Tahun Masuk" name="tahunmasuk_asesi" value="<?= $data['tahunmasuk_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="tahunlulus_asesi">Tahun Lulus</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="Tahun Lulus" name="tahunlulus_asesi" value="<?= $data['tahunlulus_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="jurusan_asesi">Jurusan</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Jurusan" name="jurusan_asesi" value="<?= $data['jurusan_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="programstudi_asesi">Program Studi</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Program Studi" name="programstudi_asesi" value="<?= $data['programstudi_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email_asesi">Email</label>
                          <div class="input-group col-md-8">
                              <input type="email" class="form-control" placeholder="Email" name="email_asesi" value="<?= $data['email_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nik_asesi">Password</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Password" name="password_asesi" value="<?= $data['password_asesi'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Foto Asesi</label>
                            <div class="input-group col-sm-8 col-md-8">
                             <input type="file" class="form-control" id="foto_asesi" name="foto_asesi" id="exampleInputUpload Foto1" placeholder="Upload Foto">
                            </div>
                      </div>

                    </div>



                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-3 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                          <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
                          <a href="<?= base_url() ?>asesi" class="btn btn-danger">Batal</a>
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
        <!-- Content Header (Page header) -->
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
            <div class="col-xs-12">

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
                  <h3 class="box-title">Data Asesor</h3>
                  <div style="padding-top: 10px;">
                  <p><a href="<?= base_url(); ?>asesor/add" class="btn btn-sm btn-success icon-btn"><i class="fa fa-plus"></i> Tambah Data</a></p>
                  </div>
            
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                      <thead>
                          <tr>
                              <th style="width: 5%;text-align: center;">#</th>
                              <th style="width: 13%;text-align: center;">No. Register</th>
                              <th style="width: 13%;text-align: center;">Nik</th>
                              <th style="width: 13%;text-align: center;">Nama</th>
                              <th style="width: 13%;text-align: center;">Alamat</th>
                              <th style="width: 13%;text-align: center;">No. Telp</th>
                              <th style="width: 13%;text-align: center;">Jenis Kelamin</th>
                              <th style="width: 13%;text-align: center;">Agama</th>
                              <th style="width: 13%;text-align: center;">Tempat Lahir</th>
                              <th style="width: 13%;text-align: center;">Tanggal Lahir</th>
                              <th style="width: 13%;text-align: center;">Provinsi</th>
                              <th style="width: 13%;text-align: center;">Kota / Kabupaten</th>
                              <th style="width: 13%;text-align: center;">Jurusan</th>
                              <th style="width: 13%;text-align: center;">Program Studi</th>
                              <th style="width: 13%;text-align: center;">Email</th>
                              <th style="width: 13%;text-align: center;">Password</th>
                              <th style="width: 13%;text-align: center;">Foto</th>
                              <th style="width: 13%;text-align: center;">Sertifikat</th>
                              <th style="width: 13%;text-align: center;">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $total= 0; $no=1; foreach($data as $row){  ?>
                          <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $row->noregister_asesor ?></td>
                              <td><?= $row->nik_asesor ?></td>
                              <td><?= $row->nama_asesor ?></td>
                              <td><?= $row->alamat_asesor ?></td>
                              <td><?= $row->notlp_asesor ?></td>
                              <td><?= $row->jeniskelamin_asesor ?></td>
                              <td><?= $row->agama_asesor ?></td>
                              <td><?= $row->tempatlahir_asesor ?></td>
                              <td><?= $row->tanggallahir_asesor ?></td>
                              <td><?= $row->provinsi_asesor ?></td>
                              <td><?= $row->kotakab_asesor ?></td>
                              <td><?= $row->jurusan_asesor ?></td>
                              <td><?= $row->programstudi_asesor ?></td>
                              <td><?= $row->email_asesor ?></td>
                              <td><?= $row->password_asesor ?></td>
                              <td>
									              <img src="<?= base_url() ?>/public/image/upload/asesor/<?= $row->foto_asesor ?>" style="width: 80px; height: 100px;">
						            			</td>
                              <td><?= $row->sertifikat_asesor ?></td>

                              <td style="text-align: center;">
                                  <form action="<?= base_url() ?>asesor/delete/<?= $row->id_asesor ?>" method="post">
                                      <div class="btn-group">
                                          <a href="<?= base_url() ?>asesor/edit/<?= $row->id_asesor ?>" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>

                                          <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button>
                                      </div>
                                  </form>
                              </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
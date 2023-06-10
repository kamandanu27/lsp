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
                  <h3 class="box-title">Data Pendaftaran</h3>
                  <div style="padding-top: 10px;">
                  <p><a href="<?= base_url(); ?>pendaftaran/add" class="btn btn-sm btn-success icon-btn"><i class="fa fa-plus"></i> Tambah Data</a></p>
                  </div>
            
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                      <thead>
                          <tr>
                              <th style="width: 5%;text-align: center;">#</th>
                              <th style="width: 15%;text-align: center;">No. Pendaftaran</th>
                              <th style="width: 15%;text-align: center;">Tanggal</th>
                              <th style="width: 15%;text-align: center;">Asesi</th>
                              <th style="width: 15%;text-align: center;">Asesor</th>
                              <th style="width: 15%;text-align: center;">Skema</th>
                              <th style="width: 15%;text-align: center;">apl01</th>
                              <th style="width: 15%;text-align: center;">apl02</th>
                              <th style="width: 15%;text-align: center;">Sertifikat</th>
                              <th style="width: 15%;text-align: center;">Status</th>
                              <th style="width: 13%;text-align: center;">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $total= 0; $no=1; foreach($data as $row){  ?>
                          <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $row->no_pendaftaran ?></td>
                              <td><?= $row->tgl_pendaftaran ?></td>
                              <td><?= $row->nama_asesi ?></td>
                              <td><?= $row->nama_asesor ?></td>
                              <td><?= $row->nama_skema ?></td>
                              <td><?= $row->apl01 ?></td>
                              <td><?= $row->apl02 ?></td>
                              <td><?= $row->sertifikat ?></td>
                              <td><?= $row->status_pendaftaran ?></td>

                              <td style="text-align: center;">
                                  <form action="<?= base_url() ?>pendaftaran/delete/<?= $row->id_pendaftaran ?>" method="post">
                                      <div class="btn-group">
                                          <a href="<?= base_url() ?>pendaftaran/edit/<?= $row->id_pendaftaran ?>" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>

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

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
                <form action="<?php echo base_url() ?>profil/update" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="row">
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="ttl">Visimisi</label>
                          <div class="input-group col-md-8">
                              <input class="form-control" type="hidden" id="id_profil" name="id_profil" value="<?= $data['id_profil'] ?>" required>
                              <input type="text" class="form-control" placeholder="Visimisi" name="visimisi" value="<?= $data['visimisi'] ?>" required>
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash(); ?>" style="display: none">
                          </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Struktur Organisasi</label>
                            <div class="input-group col-sm-8 col-md-8">
                             <input type="file" class="form-control" id="struktur_organisasi" name="struktur_organisasi" id="exampleInputUpload Foto1" placeholder="Upload Foto">
                            </div>
                       </div>

                       <div class="form-group">
                          <label class="col-md-3 control-label" for="ttl">Sejarah Tugas</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Sejarah Tugas" name="sejarah_tugas" value="<?= $data['sejarah_tugas'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="ttl">Kontak</label>
                          <div class="input-group col-md-8">
                              <input type="number" class="form-control" placeholder="Kontak" name="kontak" value="<?= $data['kontak'] ?>" required>
                          </div>
                        </div>
                    </div>



                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-3 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                          <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
                          <a href="<?= base_url() ?>admin" class="btn btn-danger">Batal</a>
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

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
                <form action="<?php echo base_url() ?>skema/update" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="row">
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="kode_skema">Kode</label>
                          <div class="input-group col-md-8">
                              <input class="form-control" type="hidden" id="id_skema" name="id_skema" value="<?= $data['id_skema'] ?>" required>
                              <input type="text" class="form-control" placeholder="Kode Skema" name="kode_skema" value="<?= $data['kode_skema'] ?>" required>
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash(); ?>" style="display: none">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nama_skema">Nama</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="Nama Skema" name="nama_skema" value="<?= $data['nama_skema'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="apl01">apl01</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="apl01" name="apl01" value="<?= $data['apl01'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="apl02">apl02</label>
                          <div class="input-group col-md-8">
                              <input type="text" class="form-control" placeholder="apl02" name="apl02" value="<?= $data['apl02'] ?>" required>
                          </div>
                        </div>

                    </div>



                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-3 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                          <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
                          <a href="<?= base_url() ?>skema" class="btn btn-danger">Batal</a>
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
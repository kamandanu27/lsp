
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
                <form action="<?php echo base_url() ?>pendaftaran/update" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="row">
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="no_pendaftaran">No. Pendaftaran</label>
                          <div class="input-group col-md-8">
                              <input class="form-control" type="hidden" id="id_pendaftaran" name="id_pendaftaran" value="<?= $data['id_pendaftaran'] ?>" required>
                              <input type="text" class="form-control" placeholder="No. Pendaftaran" name="no_pendaftaran" value="<?= $data['no_pendaftaran'] ?>" required>
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash(); ?>" style="display: none">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="tgl_pendaftaran">Tanggal</label>
                          <div class="input-group col-md-8">
                              <input type="date" class="form-control" placeholder="Tanggal Pendaftaran" name="tgl_pendaftaran" value="<?= $data['tgl_pendaftaran'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
									       <label class="col-md-3 control-label">Asesi</label>
                         <div class="input-group col-sm-8 col-md-8">
                            <select class="form-control" id="id_asesi" name="id_asesi">
                                <option value="<?= $data['id_asesi'] ?>"><?= $data['nama_asesi'] ?></option>
                                <option value="">Pilih</option>
                                <?php foreach($list_asesi as $row){ ?>
                                  <option value="<?= $row->id_asesi ?>"><?= $row->nama_asesi ?></option>
                                <?php } ?>
                            </select>
                          </div>
							      	</div>

                      <div class="form-group">
									       <label class="col-md-3 control-label">Asesor</label>
                         <div class="input-group col-sm-8 col-md-8">
                            <select class="form-control" id="id_asesor" name="id_asesor">
                                <option value="<?= $data['id_asesor'] ?>"><?= $data['nama_asesor'] ?></option>
                                <option value="">Pilih</option>
                                <?php foreach($list_asesor as $row){ ?>
                                  <option value="<?= $row->id_asesor ?>"><?= $row->nama_asesor ?></option>
                                <?php } ?>
                            </select>
                          </div>
							      	</div>

                      <div class="form-group">
									       <label class="col-md-3 control-label">Skema</label>
                         <div class="input-group col-sm-8 col-md-8">
                            <select class="form-control" id="id_skema" name="id_skema">
                                <option value="<?= $data['id_skema'] ?>"><?= $data['nama_skema'] ?></option>
                                <option value="">Pilih</option>
                                <?php foreach($list_skema as $row){ ?>
                                  <option value="<?= $row->id_skema ?>"><?= $row->nama_skema ?></option>
                                <?php } ?>
                            </select>
                          </div>
							      	</div>

                      <div class="form-group">
									       <label class="col-md-3 control-label">apl01</label>
                         <div class="input-group col-sm-8 col-md-8">
                            <select class="form-control" id="id_skema" name="id_skema">
                                <option value="<?= $data['id_skema'] ?>"><?= $data['apl01'] ?></option>
                                <option value="">Pilih</option>
                                <?php foreach($list_skema as $row){ ?>
                                  <option value="<?= $row->id_skema ?>"><?= $row->apl01 ?></option>
                                <?php } ?>
                            </select>
                          </div>
							      	</div>

                      <div class="form-group">
									       <label class="col-md-3 control-label">apl02</label>
                         <div class="input-group col-sm-8 col-md-8">
                            <select class="form-control" id="id_skema" name="id_skema">
                                <option value="<?= $data['id_skema'] ?>"><?= $data['apl02'] ?></option>
                                <option value="">Pilih</option>
                                <?php foreach($list_skema as $row){ ?>
                                  <option value="<?= $row->id_skema ?>"><?= $row->apl02 ?></option>
                                <?php } ?>
                            </select>
                          </div>
							      	</div>

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="sertifikat">Sertifikat</label>
                        <div class="input-group col-md-8">
                             <input type="text" class="form-control" placeholder="Sertifikat Pendaftaran" name="sertifikat" value="<?= $data['sertifikat'] ?>" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="status_pendaftaran">Status</label>
                         <div class="input-group col-md-8">
                             <input type="text" class="form-control" placeholder="Status Pendaftaran" name="status_pendaftaran" value="<?= $data['status_pendaftaran'] ?>" required>
                         </div>
                       </div>

                    </div>



                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-3 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                          <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
                          <a href="<?= base_url() ?>pendaftaran" class="btn btn-danger">Batal</a>
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
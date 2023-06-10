
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
                <form action="<?php echo base_url() ?>event/update" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="row">

                        <div class="form-group">
                            <label class="col-md-4 control-label">No. Pendaftaran</label>
                            <div class="input-group col-sm-8 col-md-8">
                                <select class="form-control" id="id_pendaftaran" name="id_pendaftaran">
                                    <option value="">Pilih</option>
                                    <?php foreach($list_pendaftaran as $row){ ?>
                                      <option value="<?= $row->id_pendaftaran ?>"><?= $row->no_pendaftaran ?></option>
                                    <?php } ?>
                                </select>
                              </div>
							        	</div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="nama_event">Nama Event</label>
                          <div class="input-group col-md-8">
                              <input class="form-control" type="hidden" id="id_event" name="id_event" value="<?= $data['id_event'] ?>" required>
                              <input type="text" class="form-control" placeholder="Nama Event" name="nama_event" value="<?= $data['nama_event'] ?>" required>
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash(); ?>" style="display: none">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tanggal_event">Tanggal</label>
                          <div class="input-group col-md-8">
                              <input type="date" class="form-control" placeholder="Tanggal" name="tanggal_event" value="<?= $data['tanggal_event'] ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="jam_event">Jam</label>
                          <div class="input-group col-md-8">
                              <input type="time" class="form-control" placeholder="Jam" name="jam_event" value="<?= $data['jam_event'] ?>" required>
                          </div>
                        </div>

                    </div>



                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-4 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                          <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
                          <a href="<?= base_url() ?>event" class="btn btn-danger">Batal</a>
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
<div class="row">

    <?php if($this->session->userdata('level') == 'Admin'){ ?>
    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $jumlah_asesi ?></h3>
                <p>Jumlah Asesi</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url() ?>asesi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $jumlah_asesor ?></h3>
                <p>Jumlah Asesor</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url() ?>asesor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $jumlah_event ?></h3>
                <p>Jumlah Event</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url() ?>event" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $jumlah_informasi ?></h3>
                <p>Jumlah Informasi</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-arrow-dropup-circle"></i>
            </div>
            <a href="<?= base_url() ?>informasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <?php } ?>



    <?php if($this->session->userdata('level') == 'Asesi'){ ?>
    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $jumlah_asesi ?></h3>
                <p>Jumlah Asesi</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url() ?>asesi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $jumlah_asesor ?></h3>
                <p>Jumlah Asesor</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url() ?>asesor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $jumlah_event ?></h3>
                <p>Jumlah Event</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url() ?>event" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $jumlah_informasi ?></h3>
                <p>Jumlah Informasi</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-arrow-dropup-circle"></i>
            </div>
            <a href="<?= base_url() ?>informasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <?php } ?>



    <?php if($this->session->userdata('level') == 'Asesor'){ ?>
    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $jumlah_asesi ?></h3>
                <p>Jumlah Asesi</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url() ?>asesi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $jumlah_asesor ?></h3>
                <p>Jumlah Asesor</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url() ?>asesor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $jumlah_event ?></h3>
                <p>Jumlah Event</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url() ?>event" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $jumlah_informasi ?></h3>
                <p>Jumlah Informasi</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-arrow-dropup-circle"></i>
            </div>
            <a href="<?= base_url() ?>informasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <?php } ?>

</div>
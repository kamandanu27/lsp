<!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url() ?>public/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?= $this->session->userdata('nama'); ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <?php if($this->session->userdata('level') == 'Admin'){ ?>
              <li class="dashboard" id="dashboard">
                <a href="<?= base_url() ?>dashboard">
                  <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
              </li>

              
              <li class="admin" id="admin">
                <a href="<?= base_url() ?>admin">
                  <i class="fa fa-user"></i> <span>Admin</span>
                </a>
              </li>

            <?php } ?>



            <?php if($this->session->userdata('level') == 'Asesi'){ ?>
              <li class="dashboard" id="dashboard">
                <a href="<?= base_url() ?>dashboard">
                  <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
              </li>

              
              <li class="asesi" id="asesi">
                <a href="<?= base_url() ?>asesi">
                  <i class="fa fa-user"></i> <span>Asesi</span>
                </a>
              </li>

            <?php } ?>



            <?php if($this->session->userdata('level') == 'Asesor'){ ?>
              <li class="dashboard" id="dashboard">
                <a href="<?= base_url() ?>dashboard">
                  <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
              </li>

              
              <li class="asesor" id="asesor">
                <a href="<?= base_url() ?>asesor">
                  <i class="fa fa-user"></i> <span>Asesor</span>
                </a>
              </li>

            <?php } ?>



            <li>
              <a href="<?= base_url() ?>login/logout">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
              </a>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
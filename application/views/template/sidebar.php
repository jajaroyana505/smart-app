  <!-- Page Wrapper -->
  <div id="wrapper">




      <!-- Sidebar -->


      <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">


          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center bg-white" href="index.html">

              <div class="sidebar-brand-text mx-3 ">
                  <img src="<?= base_url('assets/img/logo1.png') ?>" width="100" alt="">

              </div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url("admin") ?>">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Rukun Tetangga
          </div>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa-solid fa-users"></i>
                  <span>Penduduk</span>
              </a>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="<?= base_url("penduduk") ?>">Data Penduduk</a>
                      <a class="collapse-item" href="<?= base_url("kematian") ?>">Data Meninggal</a>
                  </div>
              </div>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="<?= base_url("tamu") ?>">
                  <i class="fa-solid fa-house-user"></i>
                  <span>Tamu</span>
              </a>
              <a class="nav-link" href="<?= base_url("surat") ?>">
                  <i class="fa-solid fa-file-lines"></i>
                  <span>Surat</span>
              </a>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Akun
          </div>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url("user/profile") ?>">
                  <i class="fa-solid fa-user-large"></i>
                  <span>User Profile</span>
              </a>
              <a class="nav-link" href="<?= base_url("auth/logout") ?>">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <span>Logout</span>
              </a>
          </li>



      </ul>
      <!-- End of Sidebar -->







      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-success">
                      <i class="fa fa-bars"></i>
                  </button>


                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">



                      <div class="topbar-divider d-none d-sm-block">

                      </div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">

                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php if ($this->session->userdata('role') == "admin") { ?>
                                  <div class="badge badge-warning p-1 m-1">Administrator</div>
                              <?php } else { ?>
                                  <div class="badge badge-warning m-1">Ketua RT</div>
                              <?php } ?>
                              <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/profile/<?= $this->session->userdata('foto'); ?>">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu custom-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="<?= base_url("user/profile") ?>">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-dark"></i>
                                  Profile
                              </a>

                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?= base_url("auth/logout") ?>">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark"></i>
                                  Logout
                              </a>
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">
                  <div class="flashdata-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
                  <div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
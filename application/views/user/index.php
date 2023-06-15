<style>
  .bg {
    background-image: url(<?= base_url('assets/img/bg2.jpg') ?>);
    background-repeat: no-repeat;
    background-size: cover;
    height: 90vh;

  }
</style>



<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('assets/img/logo1.png') ?>" width="150" alt="">
    </a>
    <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center mb-2 mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav list-group ml-auto mr-auto" id="list-tab" role="tablist">
        <a class="nav-link active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
        <a class="nav-link " id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="settings">Profile</a>
      </div>
      <br>
      <a href="<?= base_url('auth/logout') ?>" class="btn bg-white text-success">
        <i class="fa-solid fa-power-off mr-2"></i>
        Logout
      </a>
    </div>
  </div>
</nav>
<div class="">
  <div class="tab-content" id="nav-tabContent">
    <div class="bg tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <div class="container pb-5">
        <div class="container pt-5 mb-5 d-flex align-items-center flex-column">
          <br>
          <!-- <img class="" src="<?= base_url("assets/img/") ?>logo.png" alt="..." width="300" /> -->
          <!-- <div class="row text-white">
            <div class=""><i class="fas fa-star pt-4"></i></div>
            <div class=""><i class="fas fa-star pt-4"></i></div>
            <div class=""><i class="fas fa-star pt-4"></i></div>
          </div> -->
          <p class="display-1 text-white">Selamat Datang</p>
          <h1 class=" font-weight-bold shadow text-white pt-3">Sistem Manajemen Administrasi Rukun Tetangga</h1>
          <br>
        </div>

        <div class="row">
          <div class=" col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-s font-weight-bold text-secondary text-uppercase mb-1">
                      Daftar</div>
                    <div class="h4 mb-0 font-weight-bold text-success">Tetangga Saya</div>
                    <a href="<?= base_url('user/tetangga') ?>" class="btn btn-success mt-3">Lihat Tetangga</a>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-solid fa-users fa-4x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-s font-weight-bold text-secondary text-uppercase mb-1">
                      Pelayanan</div>
                    <div class="h4 mb-0 font-weight-bold text-success">Pembuatan Surat</div>
                    <a href="<?= base_url('user/buat_surat') ?>" class="btn btn-success mt-3">Buat Surat</a>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-solid fa-envelopes-bulk fa-4x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-s font-weight-bold text-secondary text-uppercase mb-1">
                      Pelayanan</div>
                    <div class="h4 mb-0 font-weight-bold text-success">Buku Tamu</div>
                    <a href="<?= base_url('user/buku_tamu') ?>" class="btn btn-success mt-3">Isi Buku Tamu</a>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-house-user fa-4x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="tab-pane fade  mt-4" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card shadow">
              <div class="card-header">
                <i class="fa-solid fa-user mr-3"></i>Data Pribadi
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img class="img-thumbnail" src="<?= base_url('assets/img/profile/') . $this->session->userdata('foto'); ?>" alt="">
                    <a href="#" class="btn btn-success btn-icon-split mt-3 mb-3" data-toggle="modal" data-target="#ubah_foto">
                      <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                      </span>
                      <span class="text">Ganti Foto</span>
                    </a>
                  </div>
                  <div class="col-md-8">
                    <div class="card">

                      <div class="card-body">
                        <div class="form-group">
                          <label>No. Induk Kependudukan</label>
                          <input type="text" readonly class="form-control" value="<?= $nik ?>">
                        </div>
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" readonly class="form-control" value="<?= $nama ?>">
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" readonly class="form-control" value="<?= $kelamin ?>">
                        </div>
                        <div class="form-group">
                          <label>Tempat, Tanggal Lahir</label>
                          <input type="text" readonly class="form-control" value="<?= $ttl ?>">
                        </div>
                        <div class="form-group">
                          <label>Agama</label>
                          <input type="text" readonly class="form-control" value="<?= $agama ?>">
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" readonly class="form-control" value="<?= $alamat ?>">
                        </div>
                        <div class="form-group">
                          <label>Status Pernikahan</label>
                          <input type="text" readonly class="form-control" value="<?= $status_perkawinan ?>">
                        </div>
                        <div class="form-group">
                          <label>Pendidikan</label>
                          <input type="text" readonly class="form-control" value="<?= $pendidikan ?>">
                        </div>
                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input type="text" readonly class="form-control" value="<?= $pekerjaan ?>">
                        </div>
                        <div class="form-group">
                          <label>Nama Ayah</label>
                          <input type="text" readonly class="form-control" value="<?= $nama_ayah ?>">
                        </div>
                        <div class="form-group">
                          <label>Nama Ibu</label>
                          <input type="text" readonly class="form-control" value="<?= $nama_ibu ?>">
                        </div>
                        <div class="">
                          <a href="<?= base_url('user/ubah/') . $this->session->userdata('id'); ?>" class="float-right btn mb-3 btn-success btn-icon-split">
                            <span class="text">Ubah</span>
                            <span class="icon text-white-50">
                              <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow mb-4">
              <div class="card-header">
                <i class="fa-solid fa-key mr-3"></i>Ganti Password
              </div>
              <div class="card-body">
                <form action="<?= base_url('user/changepassword'); ?>" method="post">
                  <div class="form-group">
                    <label for="current_password">Password Lama</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                  </div>
                  <div class="form-group">
                    <label for="new_password1">Password Baru</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                  </div>
                  <div class="form-group">
                    <label for="new_password2">Ulangi Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Password</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="card shadow">

              <div class="card-header">
                <i class="fa-solid fa-clock-rotate-left mr-3"></i>Riwayat Pengajuan Surat
              </div>
              <div class="card-body">
                <?php if ($surat == null) { ?>
                  <div class="text-center">Kosong</div>
                <?php } ?>
                <ul class="list-group">
                  <?php foreach ($surat as $_surat) { ?>
                    <li class="list-group-item">
                      <?= $_surat->jenis == "SP" ? "Surat Pengantar" : "SK Tidak Mampu"; ?>
                      <?php if ($_surat->status == 2) { ?>
                        <span class="badge badge-success ml-2">DITERIMA</span>
                        <a target="_blank" href="<?= base_url('surat/cetak_surat/') . $_surat->no_surat ?>" class="btn btn-secondary btn-circle btn-sm float-right ">
                          <i class="fas fa-print"></i>
                        </a>
                      <?php } else if ($_surat->status == 1) { ?>
                        <span class="badge badge-warning ml-2">MENUNGGU</span>
                        <a class="btn btn-secondary btn-circle btn-sm float-right disabled">
                          <i class="fa-solid fa-rotate"></i>
                        </a>

                      <?php } else { ?>
                        <span class="badge badge-danger ml-2">DITOLAK</span>
                        <a class="btn btn-secondary btn-circle btn-sm float-right ">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      <?php } ?>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="modal fade" id="ubah_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-success" id="exampleModalLabel">Ganti foto</h5>
                  <button class="close text-success" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form action="<?= base_url('penduduk/ubah_foto/') . $id ?>" method="post" enctype="multipart/form-data">
                  <div class="card">
                    <img src="http://placehold.it/180" id="blah" class="card-img-top mt-3" alt="...">
                    <input class="form-control pt-2 mt-3" type='file' onchange="readURL(this);" name="foto" style="padding-bottom: 40px;" />
                    <input type="text" name="id" value="<?= $id ?>" hidden>
                    <input type="text" name="foto_lama" value="<?= $foto ?>" hidden>
                    <button type="submit" class="btn btn-success mt-3">
                      <i class="fas fa-upload"></i> Upload
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>

      <script>
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#blah')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>
    </div>

  </div>

</div>
</div>

<!-- </div> -->
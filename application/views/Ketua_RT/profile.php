<div class="row">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header font-weight-bold text-white bg-success">
                <i class="fa-solid fa-id-card mr-2"></i> User Profile

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-thumbnail" src="<?= base_url('assets/img/profile/') . $this->session->userdata('foto'); ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card p-3">
                            <div class="form-group">
                                <label>No. Induk</label>
                                <input type="text" readonly class="form-control" value="<?= $nik ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" readonly class="form-control" value="<?= $nama ?>">
                            </div>
                            <div class="">
                                <a href="<?= base_url('penduduk/detail_penduduk/') . $this->session->userdata('id'); ?>" class="float-right btn mb-3 btn-success btn-icon-split">
                                    <span class="text">Data Pribadi</span>
                                    <span class="icon text-white-50">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">
                                Ganti Password
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('admin/changepassword'); ?>" method="post">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
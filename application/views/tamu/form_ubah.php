<div class="row">
    <div class="col-md-7">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 text-success font-weight-bold">
                    <i class="fa-solid fa-pen-to-square mr-3"></i>
                    Form Tambah Tamu
                </h6>
            </div>
            <!-- <?php var_dump($data_tamu) ?> -->
            <div class="card-body">
                <form action="<?= base_url('tamu/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_tamu" id="id_tamu" value=" <?= $data_tamu->id_tamu ?>">
                    <div class="form-group ml-2 mr-2">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" id="nama" name="nama" value=" <?= $data_tamu->nama ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group ml-2 mr-2">
                        <label for="kel_tujuan">Keluarga Tujuan</label>
                        <input type="text" class="form-control <?= form_error('kel_tujuan') ? 'is-invalid' : ''; ?>" id="kel_tujuan" name="kel_tujuan" value=" <?= $data_tamu->keluarga_tujuan ?>">
                        <div class="invalid-feedback">
                            <?= form_error('kel_tujuan'); ?>
                        </div>
                    </div>
                    <div class="form-group ml-2 mr-2">
                        <label for="keperluan">Keperluan</label>
                        <textarea class="form-control <?= form_error('keperluan') ? 'is-invalid' : ''; ?>" id="keperluan" rows="2" name="keperluan"><?= $data_tamu->keperluan ?></textarea>
                        <div class="invalid-feedback">
                            <?= form_error('keperluan'); ?>
                        </div>
                    </div>
                    <div class="form-group ml-2 mr-2">
                        <label for="alamat">Asal Tamu</label>
                        <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : ''; ?>" id="alamat" rows="3" name="alamat"><?= $data_tamu->alamat ?></textarea>
                        <div class="invalid-feedback">
                            <?= form_error('alamat'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tgl">Tanggal Datang</label>
                            <input type="date" class="form-control <?= form_error('tanggal_datang') ? 'is-invalid' : ''; ?>" id="tgl" name="tanggal" value="<?= $data_tamu->tanggal; ?>">
                            <div class="invalid-feedback">
                                <?= form_error('tanggal_lahir'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tgl_pergi">Tanggal Pergi</label>
                            <input type="date" class="form-control <?= form_error('tanggal_datang') ? 'is-invalid' : ''; ?>" id="tgl_pergi" name="tanggal_pergi" value="<?= $data_tamu->tanggal_pergi; ?>">
                            <div class="invalid-feedback">
                                <?= form_error('tanggal_lahir'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-2 mr-2">
                        <label for="ktp">Upload KTP</label>
                        <input type="file" class="form-control pt-2 pl-2 <?= form_error('ktp') ? 'is-invalid' : ''; ?>" id="ktp" name="ktp" style="padding: 40px;">
                        <div class="invalid-feedback">
                            <?= form_error('ktp'); ?>
                        </div>
                    </div>
                    <hr class="bg-success mt-5">
                    <div>
                        <button type="submit" class="btn btn-success btn-icon-split mt-4 ml-2">
                            <span class="icon text-white-50">
                                <i class="fa-solid fa-circle-plus"></i>
                            </span>
                            <span class="text">Ubah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
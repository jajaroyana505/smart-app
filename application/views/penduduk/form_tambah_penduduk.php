<div class="card">
    <div class="card-header  bg-success text-white text-center ">
        <h6 class="m-0 font-weight-bold">Formulir Penduduk Baru</h6>
    </div>
    <form action="<?= base_url('penduduk/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row justify-content-around">
                <div class="col-md-5 ">
                    <h3 class="text-dark">Data Pribadi</h3>
                    <div class="form-group">
                        <label for="nik">No. Induk Kependudukan</label>
                        <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : ''; ?>" id="nik" name="nik" value="<?php echo set_value('nik'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nik'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama" value="<?php echo set_value('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control <?= form_error('tempat_lahir') ? 'is-invalid' : ''; ?>" id="tempat" name="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('tempat_lahir'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control <?= form_error('tanggal_lahir') ? 'is-invalid' : ''; ?>" id="tgl_lahir" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('tanggal_lahir'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label for="agama">Agama</label>
                            <div class="form-group">
                                <select id="rt" class="form-control <?= form_error('agama') ? 'is-invalid' : ''; ?>" name="agama">
                                    <option></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Katholik">Katholik</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= form_error('agama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="">Kelamin</label>
                            <div class="form-check ">
                                <input class="form-check-input <?= form_error('kelamin') ? 'is-invalid' : ''; ?>" type="radio" name="kelamin" id="gridRadios1" value="Laki-laki">
                                <label class="form-check-label " for="gridRadios1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input <?= form_error('kelamin') ? 'is-invalid' : ''; ?>" type="radio" name="kelamin" id="gridRadios2" value="Perempuan">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pendidikan">Pendidikan</label>
                            <div class="form-group ">
                                <select id="rt" class="form-control <?= form_error('pendidikan') ? 'is-invalid' : ''; ?>" name="pendidikan">
                                    <option></option>
                                    <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                    <option value="Tamat SLTP/Sederajat">Tamat SLTP/Sederajat</option>
                                    <option value="Tamat SLTA/Sederajat">Tamat SLTA/Sederajat</option>
                                    <option value="D3/Sederajat">D3/Sederajat</option>
                                    <option value="S1/Sederajat">S1/Sederajat</option>
                                    <option value="S2/Sederajat">S2/Sederajat</option>
                                    <option value="S3/Sederajat">S3/Sederajat</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= form_error('pendidikan'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan">Pekerjaan</label>
                            <div class="form-group ">
                                <select id="rt" class="form-control <?= form_error('pekerjaan') ? 'is-invalid' : ''; ?>" name="pekerjaan">
                                    <option></option>
                                    <option value="Belum bekerja">Belum bekerja</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="PNS">PNS</option>
                                    <option value="TNI">TNI</option>
                                    <option value="Polri">Polri</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= form_error('pekerjaan'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="status_perkawinan">Status perkawinan</label>
                            <div class="form-group">
                                <select id="rt" class="form-control <?= form_error('status_perkawinan') ? 'is-invalid' : ''; ?>" name="status_perkawinan">
                                    <option></option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum menikah">Belum Menikah</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= form_error('status_perkawinan'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pekerjaan">Pas photo</label>
                            <div class="custom-file">
                                <label class="custom-file-label" for="image">Pilih Foto</label>
                                <input type="file" class="custom-file-input <?= form_error('foto') ? 'is-invalid' : ''; ?>" id="image" name="image">
                                <div class="invalid-feedback">
                                    <?= form_error('foto'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="text-dark">Data Orang Tua</h3>
                    <div class="form-group">
                        <label for="nama_ayah">Nama ayah</label>
                        <input type="text" class="form-control <?= form_error('nama_ayah') ? 'is-invalid' : ''; ?>" id="nama_ayah" name="nama_ayah" value="<?php echo set_value('nama_ayah'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama_ayah'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control <?= form_error('nama_ibu') ? 'is-invalid' : ''; ?>" id="nama_ibu" name="nama_ibu" value="<?php echo set_value('nama_ibu'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama_ibu'); ?>
                        </div>
                    </div>
                    <br>
                    <h3 class="text-dark">Alamat</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_rumah">Nomor Rumah</label>
                                <input type="text" class="form-control <?= form_error('no_rumah') ? 'is-invalid' : ''; ?>" id="no_rumah" name="no_rumah" value="<?php echo set_value('no_rumah'); ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('no_rumah'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- form input RT -->
                        <div class="form-group col-md-4">
                            <label for="rt">RT</label>
                            <?php if ($this->session->userdata('role') == "admin") { ?>
                                <!-- form input RT untuk role admin -->
                                <select id="rt" class="form-control <?= form_error('rt') ? 'is-invalid' : ''; ?>" name="rt">
                                    <option></option>
                                    <?php foreach ($rt as $_rt) { ?>
                                        <option value="<?= $_rt['kode_rt'] ?>"><?= $_rt['no_rt'] ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <!-- form input RT untuk role Ketua_rt -->
                                <input type="text" class="form-control " id="rt" name="rt" value="<?= $rt ?>" readonly>
                            <?php } ?>
                            <div class="invalid-feedback">
                                <?= form_error('rt'); ?>
                            </div>
                        </div>


                        <!-- form input RW -->
                        <div class="form-group col-md-4">
                            <label for="rw">RW</label>
                            <?php if ($this->session->userdata('role') == "admin") { ?>
                                <!-- input RW untuk Role admin -->
                                <select id="rw" class="form-control <?= form_error('rw') ? 'is-invalid' : ''; ?>" name="rw">
                                    <option></option>
                                    <?php foreach ($rw as $_rw) { ?>
                                        <option value="<?= $_rw['kode_rw'] ?>"><?= $_rw['no_rw'] ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <!-- input RW untuk role ketua RT -->
                                <input type="text" class="form-control" id="rw" name="rw" value="<?= $rw ?>" readonly>
                            <?php } ?>
                            <div class="invalid-feedback">
                                <?= form_error('rw'); ?>
                            </div>
                        </div>


                        <!-- form input dusun -->
                        <div class="form-group col-12">
                            <label for="dusun">Dusun</label>
                            <?php if ($this->session->userdata('role') == "admin") { ?>
                                <!-- input dusun untuk role admin -->
                                <select id="dusun" class="form-control <?= form_error('dusun') ? 'is-invalid' : ''; ?>" name="dusun">
                                    <option></option>
                                    <?php foreach ($dusun as $_dusun) { ?>
                                        <option value="<?= $_dusun['kode_dusun'] ?>"><?= $_dusun['nama_dusun'] ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <!-- input Dusun untuk role ketua RT -->
                                <input type="text" class="form-control" id="rw" name="dusun" value="<?= $dusun ?>" readonly>
                            <?php } ?>
                            <div class="invalid-feedback">
                                <?= form_error('dusun'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-5">
                        <button type="button" class="btn text-white bg-success" onclick="window.history.go(-1)"><i class="fas fa-ban"></i> Kembali</button>
                        <button type="submit" class="btn text-white bg-success"><i class="fas fa-plus-circle"></i> Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
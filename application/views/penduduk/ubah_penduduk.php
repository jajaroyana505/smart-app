<div class="card">
    <div class="card-header  bg-success text-white text-center ">
        <h6 class="m-0 font-weight-bold">Ubah Data Penduduk</h6>
    </div>
    <form action="<?= base_url('penduduk/update') ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $data_penduduk->id ?>" hidden>
        <div class="card-body">
            <div class="row justify-content-around">
                <div class="col-md-5 ">
                    <h3 class="text-dark">Data Pribadi</h3>
                    <div class="form-group">
                        <label for="nik">No. Induk Kependudukan</label>
                        <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : ''; ?>" id="nik" name="nik" value="<?= $data_penduduk->nik ?>" readonly>
                        <div class="invalid-feedback">
                            <?= form_error('nik'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama" value="<?= $data_penduduk->nama ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control <?= form_error('tempat_lahir') ? 'is-invalid' : ''; ?>" id="tempat" name="tempat_lahir" value="<?= $data_penduduk->tempat_lahir ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('tempat_lahir'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control <?= form_error('tanggal_lahir') ? 'is-invalid' : ''; ?>" id="tgl_lahir" name="tanggal_lahir" value="<?= $data_penduduk->tanggal_lahir; ?>">
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
                                <select id="rt" class="form-control" name="agama">

                                    <option value="Islam" <?= $data_penduduk->agama == "Islam" ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Hindu" <?= $data_penduduk->agama == "Hindu" ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Budha" <?= $data_penduduk->agama == "Khatolik" ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= $data_penduduk->agama == "Kristen" ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Khatolik" <?= $data_penduduk->agama == "Khatolik" ? 'selected' : ''; ?>>Islam</option>

                                </select>
                                <div class="invalid-feedback">
                                    <?= form_error('agama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="">Kelamin</label>
                            <div class="form-check ">
                                <input class="form-check-input " type="radio" name="kelamin" id="gridRadios1" value="Laki-laki" checked>
                                <label class="form-check-label " for="gridRadios1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="gridRadios2" value="Perempuan">
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
                                <select id="rt" class="form-control " name="pendidikan">

                                    <option value="Tamat SD/Sederajat" <?= $data_penduduk->pendidikan == "Tamat SD/Sederajat" ? 'selected' : ''; ?>>Tamat SD/Sederajat</option>
                                    <option value="Tamat SLTP/Sederajat" <?= $data_penduduk->pendidikan == "Tamat SLTP/Sederajat" ? 'selected' : ''; ?>>Tamat SLTP/Sederajat</option>
                                    <option value="Tamat SLTA/Sederajat" <?= $data_penduduk->pendidikan == "Tamat SLTA/Sederajat" ? 'selected' : ''; ?>>Tamat SLTA/Sederajat</option>
                                    <option value="D3/Sederajat" <?= $data_penduduk->pendidikan == "D3/Sederajat" ? 'selected' : ''; ?>>D3/Sederajat</option>
                                    <option value="S1/Sederajat" <?= $data_penduduk->pendidikan == "S1/Sederajat" ? 'selected' : ''; ?>>S1/Sederajat</option>
                                    <option value="S2/Sederajat" <?= $data_penduduk->pendidikan == "S2/Sederajat" ? 'selected' : ''; ?>>S2/Sederajat</option>
                                    <option value="S3/Sederajat" <?= $data_penduduk->pendidikan == "S3/Sederajat" ? 'selected' : ''; ?>>S3/Sederajat</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan">Pekerjaan</label>
                            <div class="form-group ">
                                <select id="rt" class="form-control" name="pekerjaan">

                                    <option value="Belum bekerja" <?= $data_penduduk->pekerjaan == "Belum bekerja" ? 'selected' : ''; ?>>Belum bekerja</option>
                                    <option value="Petani" <?= $data_penduduk->pekerjaan == "Petani" ? 'selected' : ''; ?>>Petani</option>
                                    <option value="Buruh" <?= $data_penduduk->pekerjaan == "Buruh" ? 'selected' : ''; ?>>Buruh</option>
                                    <option value="Wiraswasta" <?= $data_penduduk->pekerjaan == "Wiraswasta" ? 'selected' : ''; ?>>Wiraswasta</option>
                                    <option value="PNS" <?= $data_penduduk->pekerjaan == "PNS" ? 'selected' : ''; ?>>PNS</option>
                                    <option value="TNI" <?= $data_penduduk->pekerjaan == "TNI" ? 'selected' : ''; ?>>TNI</option>
                                    <option value="Polri" <?= $data_penduduk->pekerjaan == "Polri" ? 'selected' : ''; ?>>Polri</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="status_perkawinan">Status perkawinan</label>
                            <div class="form-group">
                                <select id="rt" class="form-control" name="status_perkawinan">
                                    <option></option>
                                    <option value="Menikah" <?= $data_penduduk->status_perkawinan == "Menikah" ? 'selected' : ''; ?>>Menikah</option>
                                    <option value="Belum menikah" <?= $data_penduduk->status_perkawinan == "Belum menikah" ? 'selected' : ''; ?>>Belum Menikah</option>
                                </select>

                            </div>
                        </div>


                    </div>


                </div>
                <div class="col-md-5">
                    <h5 class="text-dark">Data Orang Tua</h5>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control <?= form_error('nama_ayah') ? 'is-invalid' : ''; ?>" id="nama_ayah" name="nama_ayah" value="<?= $data_penduduk->nama_ayah ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama_ayah'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control <?= form_error('nama_ibu') ? 'is-invalid' : ''; ?>" id="nama_ibu" name="nama_ibu" value="<?= $data_penduduk->nama_ibu ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama_ibu'); ?>
                        </div>
                    </div>
                    <br>
                    <h5 class="text-dark">Alamat</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_rumah">Nomor Rumah</label>
                                <input type="text" class="form-control <?= form_error('no_rumah') ? 'is-invalid' : ''; ?>" id="no_rumah" name="no_rumah" value="<?= $data_penduduk->no_rumah ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('no_rumah'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="rt">RT</label>
                            <?php if ($this->session->userdata('role') == "admin") { ?>
                                <select id="rt" class="form-control " name="rt">

                                    <?php foreach ($rt as $_rt) { ?>
                                        <option value="<?= $_rt['kode_rt'] ?>" <?= $data_penduduk->kode_rt == $_rt['kode_rt'] ? 'selected' : ''; ?>><?= $_rt['no_rt'] ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <input type="text" class="form-control " id="rt" name="rt" value="<?= $rt ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rw">RW</label>
                            <?php if ($this->session->userdata('role') == "admin") { ?>
                                <select id="rw" class="form-control " name="rw">
                                    <option></option>
                                    <?php foreach ($rw as $_rw) { ?>
                                        <option value="<?= $_rw['kode_rw'] ?>" <?= $data_penduduk->kode_rw == $_rw['kode_rw'] ? 'selected' : ''; ?>><?= $_rw['no_rw'] ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <input type="text" class="form-control " id="rw" name="rw" value="<?= $rw ?>" readonly>
                            <?php } ?>
                        </div>
                        <div class="form-group col-12">
                            <label for="dusun">Dusun</label>
                            <?php if ($this->session->userdata('role') == "admin") { ?>
                                <select id="dusun" class="form-control " name="dusun">
                                    <option></option>
                                    <?php foreach ($dusun as $_dusun) { ?>
                                        <option value="<?= $_dusun['kode_dusun'] ?>" <?= $data_penduduk->kode_dusun == $_dusun['kode_dusun'] ? 'selected' : ''; ?>><?= $_dusun['nama_dusun'] ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <input type="text" class="form-control " id="dusun" name="dusun" value="<?= $dusun ?>" readonly>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-5">
                    <button type="button" class="btn text-white bg-success" onclick="window.history.go(-1)"><i class="fas fa-ban"></i> Kembali</button>
                    <button type="submit" class="btn text-white bg-warning"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
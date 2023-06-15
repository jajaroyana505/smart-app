<div class="card shadow mb-4">
    <div class="card-header text-success ">
        <h6 class="m-0 font-weight-bold">
            <i class="fa-solid fa-pen-to-square mr-3"></i>
            Form Pengajuan Surat
        </h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('user/simpan_pengajuan') ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row justify-content-around">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>No. Induk Kependudukan</label>
                            <input type="text" class="form-control" name="nik" readonly value="<?= $nik ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" disabled value="<?= $nama ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" disabled value="<?= $kelamin ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tempat, Tanggal lahir</label>
                                    <input type="text" class="form-control" disabled value="<?= $ttl ?> Tahun">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" disabled value="<?= $alamat ?>">
                        </div>
                    </div>
                    <div class="col-md-5 ">
                        <div class="form-group">
                            <label for="jenis">Pilih Surat</label>
                            <select name="jenis" class="form-control <?= form_error('jenis') ? 'is-invalid' : ''; ?>" id="jenis">
                                <option></option>
                                <option value="SP" <?= set_value('jenis') == "SP" ? 'selected' : ''; ?>>Surat Pengantar RT</option>
                                <option value="SKTM" <?= set_value('jenis') == "SKTM" ? 'selected' : ''; ?>>Surat Keterangan Tidak Mampu</option>
                            </select>

                            <div class="invalid-feedback">
                                <?= form_error('jenis'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="keperluan">Keperluan</label>
                            <textarea type="text" class="form-control <?= form_error('keperluan') ? 'is-invalid' : ''; ?>" name="keperluan" value="<?php echo set_value('keperluan'); ?>"></textarea>
                            <div class="invalid-feedback">
                                <?= form_error('keperluan'); ?>
                            </div>
                        </div>

                        <div class="modal-footer mt-5">
                            <button type="button" class="btn text-white bg-success" onclick="window.history.go(-1)"><i class="fas fa-ban"></i> Kembali</button>
                            <button type="submit" class="btn text-white bg-warning"><i class="fas fa-plus-circle"></i> Ajukan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="card">
    <div class="card-header  bg-success text-white text-center ">
        <h6 class="m-0 font-weight-bold">Penduduk Meninggal</h6>
    </div>
    <form action="<?= base_url('kematian/simpan_data') ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row justify-content-around">
                <div class="col-md-5 ">
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
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" disabled value="<?= $alamat ?>">
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="form-group">
                        <label for="tanggal_meninggal">Tanggal Meninggal</label>
                        <input type="date" class="form-control <?= form_error('tanggal_meninggal') ? 'is-invalid' : ''; ?>" id="tanggal_meninggal" name="tanggal_meninggal">
                        <div class="invalid-feedback">
                            <?= form_error('tanggal_meninggal'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penyebab_meninggal">Penyebab Meninggal</label>
                        <input type="text" class="form-control <?= form_error('penyebab_meninggal') ? 'is-invalid' : ''; ?>" id="penyebab_meninggal" name="penyebab_meninggal">
                        <div class="invalid-feedback">
                            <?= form_error('penyebab_meninggal'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_meninggal">Tempat Meninggal</label>
                        <input type="text" class="form-control <?= form_error('tempat_meninggal') ? 'is-invalid' : ''; ?>" id="tempat_meninggal" name="tempat_meninggal">
                        <div class="invalid-feedback">
                            <?= form_error('tempat_meninggal'); ?>
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
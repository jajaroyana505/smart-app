<div class="card card-shadow mb-4">
    <div class="card-header bg-success text-white">

        <h6 class="m-0 font-weight-bold">
            <i class="fa-solid fa-square-poll-horizontal"></i>
            Datail Surat
        </h6>
    </div>
    <div class="card-body">
        <!-- <form action="<?= base_url('surat/simpan_pengajuan') ?>" method="post" enctype="multipart/form-data"> -->
        <div class="card-body">
            <div class="row justify-content-around">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>No. Induk Kependudukan</label>
                        <input type="text" class="form-control" readonly value="<?= $nik ?>">
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
                                <input type="text" class="form-control" disabled value="<?= $ttl ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" disabled value="<?= $alamat ?>">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="jenis">No. Surat</label>
                        <input type="text" class="form-control" readonly value="<?= $no_surat ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Surat</label>
                        <input type="text" class="form-control" readonly value="<?= $jenis_surat ?>">
                    </div>
                    <div class="form-group">
                        <label id="keperluan">Keperluan</label>
                        <input type="text" class="form-control" readonly value="<?= $keperluan ?>">
                    </div>
                    <div class="form-group">
                        <label id="keperluan">Dibuat pada</label>
                        <input type="text" class="form-control" readonly value="<?= $tanggal ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->
    </div>
    <div class="card-footer pb-1 pt-3">
        <div class="row">
            <div class="col-auto">
                <a href="#" onclick="window.history.go(-1)" class="btn mb-3 mx-2 btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa-solid fa-angles-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
                <a href="<?= base_url('surat/cetak_surat/') . $this->uri->segment('3'); ?>" target="_blank" class="btn mb-3 mx-2 btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa-solid fa-print"></i>
                    </span>
                    <span class="text">Cetak</span>
                </a>
            </div>
        </div>
    </div>
</div>
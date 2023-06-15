<div class="col-lg">
    <a href="#" class="btn mb-3 btn-success btn-icon-split" data-toggle="modal" data-target="#suratModal">
        <span class="icon text-white">
            <i class="fa-solid fa-file-circle-plus"></i>
        </span>
        <span class="text">Buat Surat</span>
    </a>
    <a href="<?= base_url('surat/riwayat_pengajuan') ?>" class="btn mb-3 btn-success btn-icon-split">
        <span class="icon text-white">
            <i class="fa-solid fa-clock-rotate-left"></i>
        </span>
        <span class="text">Riwayat pengajuan</span>
    </a>
    <div class="row mt-2">
        <div class="col-md-4">

            <div class="card shadow mb-4">
                <div class="card-header text-success  py-3">
                    <h6 class="m-0 font-weight-bold"><i class="fa-solid fa-list-check mr-2"></i>Daftar Pengajuan</h6>
                </div>
                <div class="card-body p-sm-0">
                    <div class="accordion" id="accordionExample">
                        <div class="card p-2">
                            <?php foreach ($pengajuan as $_pengajuan) { ?>
                                <div class="card border-left-success mb-2">
                                    <div class="card-header p-0" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn  btn-block text-left" data-toggle="collapse" data-target="#no_pengajuan<?= $_pengajuan->no_surat ?>" aria-expanded="false" aria-controls="no_pengajuan<?= $_pengajuan->no_surat ?>">
                                                <?php if ($_pengajuan->jenis == "SP") { ?>
                                                    <p class="font-weight-bold mb-0">Surat Pengantar</p>
                                                <?php } else { ?>
                                                    <p class="font-weight-bold mb-0">Surat Keterangan Tidak Mampu</p>
                                                <?php } ?>
                                                <p>A/n <?= $_pengajuan->nama ?></p>
                                            </button>
                                        </h2>
                                    </div>


                                    <div id="no_pengajuan<?= $_pengajuan->no_surat ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-md-auto">
                                                    <p class="font-weight-bold mb-0"> Keperluan :</p>
                                                    <p class="mt-0"><?= $_pengajuan->keperluan ?></p>

                                                    <small> Diajukan pada tanggal :</small>
                                                    <small class="font-italic"><?= format_tanggal($_pengajuan->tanggal) ?></small>
                                                </div>
                                                <div class="col-md-auto">
                                                    <a href="<?= base_url('surat/tolak/') . $_pengajuan->no_surat ?>" class="p-2 badge badge-danger"><i class="fa-solid fa-xmark"></i> Tolak</a>
                                                    <a href="<?= base_url('surat/terima/') . $_pengajuan->no_surat ?>" class="p-2 badge badge-success"><i class="fa-solid fa-check"></i> Setujui</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header text-success  py-3">
                    <h6 class="m-0 font-weight-bold"><i class="fa-solid fa-envelopes-bulk mr-2"></i>Surat Terbuat</h6>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Jenis Surat</th>
                                <th scope="col">Atas Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                            foreach ($surat as $_surat) { ?>
                                <tr>
                                    <th scope="row"><?= ++$i ?></th>
                                    <td><?php if ($_surat->jenis == "SP") { ?>
                                            Surat Pengantar
                                        <?php } else { ?>
                                            Surat Keterangan Tidak Mampu
                                        <?php } ?>
                                    </td>
                                    <td><?= $_surat->nama ?></td>
                                    <td>
                                        <center>
                                            <a href="<?= base_url('surat/detail/') . $_surat->no_surat ?>" class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-info"></i>
                                            </a>
                                            <a target="_blank" href="<?= base_url('surat/cetak_surat/') . $_surat->no_surat ?>" class="btn btn-warning btn-circle btn-sm">
                                                <i class="fas fa-print"></i>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="suratModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Masukan NIK Penduduk</h5>
                <button class="close text-success" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('surat/form') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" name="nik" placeholder="NIK">
                    </div>
                    <button type="submit" class="btn btn-success">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
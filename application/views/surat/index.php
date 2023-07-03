<div class="col">
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
                <div class="card-header text-success py-3">
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
                                                    <a data-toggle="modal" data-target="#tolakModal" class="p-2 badge badge-danger" style="cursor: pointer;"><i class="fa-solid fa-xmark"></i> Tolak</a>
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
                    <table class="table table-bordered text-center">
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
                                        <a href="<?= base_url('surat/detail/') . $_surat->no_surat ?>" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info"></i>
                                        </a>
                                        <a target="_blank" href="<?= base_url('surat/cetak_surat/') . $_surat->no_surat ?>" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-print"></i>
                                        </a>
                                        <a href="<?= base_url('surat/hapusSurat/') . $_surat->no_surat ?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
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
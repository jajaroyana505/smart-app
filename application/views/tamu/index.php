<a href="<?= base_url('tamu/tambah_tamu') ?>" class="btn btn-success btn-icon-split mb-3">
    <span class="icon text-white">
        <i class="fa-solid fa-circle-plus"></i>
    </span>
    <span class="text">Tambah Tamu Baru</span>
</a>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header text-success e py-3">
                <h6 class="m-0 font-weight-bold"><i class="fa-solid fa-book mr-2"></i>Buku Tamu</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Datang</th>
                            <th scope="col">Tanggal Pergi</th>
                            <th scope="col">Asal Tamu</th>
                            <th scope="col">Maksud Kedatangan</th>
                            <th scope="col">Keluarga Yang Dituju</th>
                            <th scope="col">Kode RT</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($tamu as $_tamu) { ?>
                            <tr>
                                <th><?= ++$i ?></th>
                                <td><?= $_tamu->nama ?></td>
                                <td><?= format_tanggal($_tamu->tanggal) ?></td>
                                <td>
                                    <?php if ($_tamu->tanggal_pergi == "" or $_tamu->tanggal_pergi == "NULL") { ?>
                                        <span class="text-secondary"><i class="fa fa-exclamation-circle fa-lg"></i> &nbsp; Tamu Belum Pergi</span>
                                    <?php } else { ?>
                                        <?= format_tanggal($_tamu->tanggal) ?>
                                    <?php } ?>
                                </td>
                                <td><?= $_tamu->alamat ?></td>
                                <td><?= $_tamu->keperluan ?>
                                </td>
                                <td><?= $_tamu->keluarga_tujuan ?></td>
                                <td><?= $_tamu->kode_rt ?></td>
                                <td>
                                    <center>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#id_<?= $_tamu->id_tamu ?>">
                                            Lihat KTP
                                        </button>
                                    </center>
                                </td>
                                <td>
                                    <a href="<?= base_url('tamu/form_ubah_tamu/') . $_tamu->id_tamu ?>" class="btn btn-success btn-icon-split mb-3">
                                        <center>
                                            <button type="button" class="btn btn-success">
                                                Ubah
                                            </button>
                                        </center>
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
<?php foreach ($tamu as $_tamu) { ?>
    <div class=" modal fade" id="id_<?= $_tamu->id_tamu ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $_tamu->nama ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="<?= base_url('assets/img/ktp/') . $_tamu->ktp ?>" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
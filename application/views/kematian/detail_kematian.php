<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header bg-success text-white pb-1">
                    <h4>Detail Kematian</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="mb-4 text-dark ">Data Diri Penduduk</h5>
                            <div class="row p-0">
                                <div class="col-sm-5">
                                    <p class="mb-0">No. Induk Kependudukan</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark "><?= $nik ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $nama ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $kelamin ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Tempat, Tanggal lahir</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $ttl ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $agama ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $alamat ?></p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Pekerjaan</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $pekerjaan ?></p>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-6 ">
                        <div class="card-body">
                            <h5 class="mb-4 text-dark ">Data Kematian</h5>
                            <div class="row p-0">
                                <div class="col-sm-5">
                                    <p class="mb-0">Hari meninggal</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark "><?= $hari ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Tanggal meninggal</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $tanggal ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Umur meninggal</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $umur ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Penyebab meninggal</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $penyebab ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="mb-0">Tempat meninggal</p>
                                </div>
                                <div class="col-sm-7">
                                    <p class=" mb-0 text-dark"><?= $tempat ?></p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="card-footer mt-5">
                    <a href="<?= base_url('kematian') ?>" class="btn btn-success">Kembali</a>

                </div>

            </div>
        </div>


    </div>
</div>
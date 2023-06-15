<div class="col-lg-12">
    <a data-toggle="modal" data-target="#meninggalModal" class="btn btn-success btn-icon-split mb-3">
        <span class="icon text-white">
            <i class="fa-solid fa-circle-plus"></i>
        </span>
        <span class="text">Tambah Penduduk Meninggal</span>
    </a>
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-success">
            <h6 class="m-0 font-weight-bold"><i class="fa-solid fa-users mr-3"></i>Data Penduduk Meninggal</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable text-center text-dark" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Tanggal meninggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;
                                    foreach ($penduduk_meninggal as $_penduduk_meninggal) { ?>
                                        <tr>
                                            <td><?= ++$start; ?></td>
                                            <td><?= $_penduduk_meninggal['nik'] ?></td>
                                            <td><?= $_penduduk_meninggal['nama'] ?></td>
                                            <td><?= $_penduduk_meninggal['umur'] ?> </td>
                                            <td><?= date("d F Y", strtotime($_penduduk_meninggal['tanggal_meninggal'])) ?> </td>
                                            <td>
                                                <a href="<?= base_url('kematian/detail_kematian/' . $_penduduk_meninggal['id_kematian']); ?>" class="badge badge-success p-2"><i class="fas fa-search"></i> DETAIL</a>
                                                <!-- <a href="<?= base_url("ketua_rt/") ?>ubah_penduduk" class="badge badge-warning p-2"><i class="fas fa-edit"></i> UBAH</a> -->
                                                <!-- <a href="<?= base_url('penduduk/hapus_penduduk/' . $_penduduk_meninggal['id']); ?>" class="badge badge-danger p-2"><i class="fas fa-trash"></i> HAPUS</a> -->
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7 text-dark">
                            <div class="dataTables_info pt-3 pb-3" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-1 pl-4 ml-4 mt-5">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="meninggalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Tambah Penduduk</h5>
                <button class="close text-success" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('kematian/form') ?>" method="post" enctype="multipart/form-data">
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
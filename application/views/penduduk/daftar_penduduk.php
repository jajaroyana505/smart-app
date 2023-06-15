<a href="<?= base_url("penduduk") ?>/form_tambah" class="btn mb-3 btn-success btn-icon-split">
    <span class="icon text-white">
        <i class="fas fa-user-plus"></i>
    </span>
    <span class="text">Tambah Penduduk Baru</span>
</a>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-success ">
                <h6 class="m-0 font-weight-bold"><i class="fa-solid fa-users mr-3"></i>Data Penduduk</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable text-center text-dark" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead class="">
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //var_dump($penduduk) 
                                        ?>
                                        <?php $i = 0;
                                        foreach ($penduduk as $_penduduk) { ?>
                                            <tr>
                                                <td><?= ++$start; ?></td>
                                                <td><?= $_penduduk['nik'] ?></td>
                                                <td><?= $_penduduk['nama'] ?></td>
                                                <td><?= $_penduduk['kelamin'] ?></td>
                                                <td><?= $_penduduk['nama_dusun'] ?> <?= "No." . $_penduduk['no_rumah'] ?> <?= $_penduduk['kode_rt'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('penduduk/detail_penduduk/' . $_penduduk['id']); ?>" class="badge badge-success p-2"><i class="fas fa-search"></i> DETAIL</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7 text-dark">
                                <div class="dataTables_info pt-3 pb-3" id="dataTable_info" role="status" aria-live="polite">Total data <?= $total_rows ?> entries</div>
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
</div>
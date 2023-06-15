<div class="col-lg">
    <a href="<?= base_url("ketua_rt/") ?>tambah_tamu" class="btn mb-5 card-shadow bg-success text-white">
        <i class="fas fa-file-alt"></i> Tambah Tamu</a>
    <div class="card card-shadow mb-4">
        <div class="card-header py-3 bg-success text-white">
            <h6 class="m-0 font-weight-bold">Data Tamu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 ml-1 col-md-6 text-dark">
                            <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> Entries</label></div>
                        </div>
                        <div class="col-sm-12 ml-1 mb-3 col-md-6 text-dark">
                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable text-center text-dark" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tamu</th>
                                        <th>Tanggal</th>
                                        <th>Alamat</th>
                                        <th>Keperluan</th>
                                        <th>KTP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rizky Syaputra</td>
                                        <td>19-11-1999</td>
                                        <td>Karawang</td>
                                        <td>...</td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#ktpModal" class="badge badge-success p-2"><i class="fas fa-search"></i> LIHAT</a>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="" class="badge badge-warning p-2"><i class="fas fa-edit"></i> UBAH</a>
                                                <a href="" class="badge badge-danger p-2"><i class="fas fa-trash"></i> HAPUS</a>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 text-dark">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <center>
                            <div class="col-1 pl-4 ml-4 mt-5">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link text-success border-success">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link bg-success border-success text-white">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link bg-white border-success text-success">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link bg-white border-success text-success">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link bg-white border-success text-success">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link bg-white border-success text-success">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link bg-white border-success text-success">6</a></li>
                                        <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link text-success border-success">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
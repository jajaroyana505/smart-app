<div class="col-lg">
    <a href="<?= base_url("ketua_rt/") ?>tambah_surat" class="btn mb-5 card-shadow bg-success text-white">
        <i class="fas fa-file-alt"></i> Tambah Surat</a>
    <div class="card card-shadow mb-4">
        <div class="card-header py-3 bg-success text-white">
            <h6 class="m-0 font-weight-bold">Data Surat</h6>
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
                                        <th>Jenis Surat</th>
                                        <th>Tanggal</th>
                                        <th>Keperluan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Surat Pengantar</td>
                                        <td>21-07-2022</td>
                                        <td>...</td>
                                        <td>Diterima</td>
                                        <td>
                                            <a href="" class="badge badge-success p-2"><i class="fas fa-search"></i> LIHAT</a>
                                            <a href="<?= base_url("ketua_rt/") ?>ubah_surat" class="badge badge-warning p-2"><i class="fas fa-edit"></i> UBAH</a>
                                            <a href="" class="badge badge-danger p-2"><i class="fas fa-trash"></i> HAPUS</a>
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

<div class="modal fade" tabindex="-1" id="ktpModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Member</h5>
                <button type="" class="text-white btn btn-user" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="<?= base_url('member'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row p-2">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="text-white btn btn-user">Log in</button>
                    <a href="#" data-toggle="modal" data-target="#daftarModal" class="text-white btn btn-user">Registrasi</a>
                </div>
            </form>
        </div>
    </div>
</div>
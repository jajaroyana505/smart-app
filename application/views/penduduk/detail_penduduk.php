<div class="">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/img/profile/') . $foto ?>" alt="avatar" class=" img-thumbnail" width="250">
                    <h5 class="my-3 text-dark "><?= $nama ?></h5>
                    <div class="d-flex justify-content-center mb-2">

                        <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#ubah_foto">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Ganti Foto</span>
                        </a>

                        <!-- <button type="button" class="btn btn-success">Ubah Foto</button> -->
                        <!-- <button type="button" class="btn btn-outline-success ms-1">Message</button> -->
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5>Detail Penduduk</h5>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-body">
                            <div class="row p-0">
                                <div class="col-sm-4">
                                    <p class="mb-0">No. Induk Kependudukan</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark "><?= $nik ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $nama ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $kelamin ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Tempat, Tanggal lahir</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $ttl ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $agama ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $alamat ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Status</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $status_perkawinan ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Pendidikan</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $pendidikan ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Pekerjaan</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $pekerjaan ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Nama Ayah</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $nama_ayah ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Nama Ibu</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class=" mb-0 text-dark"><?= $nama_ibu ?></p>
                                </div>
                            </div>
                            <hr class="">
                            <div class="row justify-content-start mt-4">
                                <div class="col-md-auto mt-3">
                                    <a href="<?= base_url('penduduk/ubah/') . $id ?>" class="btn btn-warning btn-icon-split ">
                                        <span class="icon text-white-50 left">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah Data</span>
                                    </a>
                                </div>
                                <div class="col-auto mt-3">

                                    <a href="<?= base_url('penduduk/hapus_penduduk/') . $id ?>" class="btn btn-danger btn-icon-split ms-3 ">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus Data</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ubah_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-success" id="exampleModalLabel">Ganti Foto</h5>
                        <button class="close text-success" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('penduduk/ubah_foto/') . $id ?>" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <img src="http://placehold.it/180" id="blah" class="card-img-top mt-3" alt="...">
                            <input class="form-control pt-2 mt-3" type='file' onchange="readURL(this);" name="foto" style="padding-bottom: 40px;" />
                            <input type="text" name="id" value="<?= $id ?>" hidden>
                            <input type="text" name="foto_lama" value="<?= $foto ?>" hidden>


                            <button type="submit" class="btn btn-success mt-3">
                                <i class="fas fa-upload"></i> Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
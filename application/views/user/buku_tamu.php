<div class="row">
   <div class="col-md-6">
      <div class="card shadow">
         <div class="card-header">
            <h6 class="m-0 text-success font-weight-bold">
               <i class="fa-solid fa-pen-to-square mr-3"></i>
               Form Tamu
            </h6>
         </div>
         <div class="card-body">
            <form action="<?= base_url('user/buku_tamu') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                  <div class="invalid-feedback">
                     <?= form_error('nama'); ?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="keperluan">Keperluan</label>
                  <textarea class="form-control <?= form_error('keperluan') ? 'is-invalid' : ''; ?>" id="keperluan" rows="2" name="keperluan"></textarea>
                  <div class="invalid-feedback">
                     <?= form_error('keperluan'); ?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="alamat">Alamat Lengkap</label>
                  <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : ''; ?>" id="alamat" rows="3" name="alamat"></textarea>
                  <div class="invalid-feedback">
                     <?= form_error('alamat'); ?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="ktp">Upload KTP</label>
                  <input type="file" class="form-control <?= form_error('ktp') ? 'is-invalid' : ''; ?>" id="ktp" name="ktp">
                  <div class="invalid-feedback">
                     <?= form_error('ktp'); ?>
                  </div>
               </div>
               <div>
                  <button type="submit" class="btn btn-success btn-icon-split mt-4">
                     <span class="icon text-white-50">
                        <i class="fa-solid fa-circle-plus"></i>
                     </span>
                     <span class="text">Tambah</span>
                  </button>
               </div>
            </form>

         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="card shadow">
         <div class="card-header">

            <h6 class="m-0 text-success font-weight-bold">
               <i class="fa-solid fa-list-ul mr-3"></i>
               Daftar Tamu
            </h6>
         </div>
         <div class="card-body">
            <ul class="list-group">

               <li class="list-group-item">

                  <span class="badge badge-success">diterima</span>
                  <a class="btn btn-secondary btn-circle btn-sm float-right ">
                     <i class="fas fa-trash-can"></i>
                  </a>

               </li>

            </ul>
         </div>
      </div>
   </div>
</div>
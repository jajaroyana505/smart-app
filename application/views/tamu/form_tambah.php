<div class="row">
   <div class="col-md-7">
      <div class="card shadow">
         <div class="card-header">
            <h6 class="m-0 text-success font-weight-bold">
               <i class="fa-solid fa-pen-to-square mr-3"></i>
               Form Tambah Tamu
            </h6>
         </div>
         <div class="card-body">
            <form action="<?= base_url('tamu/tambah_tamu') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group ml-2 mr-2">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                  <div class="invalid-feedback">
                     <?= form_error('nama'); ?>
                  </div>
               </div>
               <div class="form-group ml-2 mr-2">
                  <label for="kel_tujuan">Keluarga Tujuan</label>
                  <input type="text" class="form-control <?= form_error('kel_tujuan') ? 'is-invalid' : ''; ?>" id="kel_tujuan" name="kel_tujuan">
                  <div class="invalid-feedback">
                     <?= form_error('kel_tujuan'); ?>
                  </div>
               </div>
               <div class="form-group ml-2 mr-2">
                  <label for="keperluan">Keperluan</label>
                  <textarea class="form-control <?= form_error('keperluan') ? 'is-invalid' : ''; ?>" id="keperluan" rows="2" name="keperluan"></textarea>
                  <div class="invalid-feedback">
                     <?= form_error('keperluan'); ?>
                  </div>
               </div>
               <div class="form-group ml-2 mr-2">
                  <label for="alamat">Asal Tamu</label>
                  <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : ''; ?>" id="alamat" rows="3" name="alamat"></textarea>
                  <div class="invalid-feedback">
                     <?= form_error('alamat'); ?>
                  </div>
               </div>
               <div class="form-group ml-2 mr-2">
                  <label for="ktp">Upload KTP</label>
                  <input type="file" class="form-control pt-2 pl-2 <?= form_error('ktp') ? 'is-invalid' : ''; ?>" id="ktp" name="ktp" style="padding: 40px;">
                  <div class="invalid-feedback">
                     <?= form_error('ktp'); ?>
                  </div>
               </div>
               <hr class="bg-success mt-5">
               <div>
                  <button type="submit" class="btn btn-success btn-icon-split mt-4 ml-2">
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
</div>
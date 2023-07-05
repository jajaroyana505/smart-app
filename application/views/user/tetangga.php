<!-- Just an image -->




<div class="container">
   <div class="card shadow">
      <div class="card-body">
         <?php foreach ($tetangga as $_tetangga) { ?>
            <div class="card border-left-success border-success mb-3">
               <div class="card-body row align-items-center">
                  <div class="col-md-2">
                     <img src="<?= base_url("assets/img/profile/") . $_tetangga->foto ?>" alt="" class="rounded" width="100">
                  </div>
                  <div class="col-md-8">
                     <h5><?= $_tetangga->nama ?></h5>
                     <hr class="bg-success">
                     <span class="mr-3"><?= $_tetangga->nama_dusun ?></span>
                     <span class="mr-3">No.<?= $_tetangga->no_rumah ?></span>
                     <span class="mr-3"><?= $_tetangga->kode_rt ?></span>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</div>
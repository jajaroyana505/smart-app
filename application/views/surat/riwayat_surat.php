<div class="row">
   <div class="col-md-12">
      <div class="card shadow">
         <div class="card-header text-success e py-3">
            <h6 class="m-0 font-weight-bold"><i class="fa-solid fa-clock-rotate-left mr-2"></i>Riwayat Pengajuan Surat</h6>
         </div>
         <div class="card-body">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">Tanggal</th>
                     <th scope="col">Jenis Surat</th>
                     <th scope="col">Atas Nama</th>
                     <th scope="col">Keperluan</th>
                     <th scope="col">Status</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($riwayat as $_riwayat) { ?>
                     <tr>
                        <td><?= $_riwayat['tanggal'] ?></td>
                        <td><?= $_riwayat['jenis'] == 'SP' ? "Surat Pengantar" : "Surat Keterangan Tidak Mampu"; ?></td>
                        <td><?= $_riwayat['nama'] ?></td>
                        <td><?= $_riwayat['keperluan'] ?></td>
                        <td>
                           <?php if ($_riwayat['status'] == 2) { ?>
                              <div class="badge badge-success">Disetujui</div>
                           <?php } else { ?>
                              <div class="badge badge-danger">Ditolak</div>
                           <?php } ?>
                        </td>
                     </tr>
                  <?php } ?>

               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
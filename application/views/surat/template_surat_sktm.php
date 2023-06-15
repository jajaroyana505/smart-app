<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <title><?= $jenis_surat ?> <?= $nama ?></title>

</head>

<style>
   body {
      font-family: 'Times New Roman', Times, serif;
      /* font-size: 12px !important; */
   }
</style>

<body>
   <div class="container" style=" width: 600px ;">
      <div class="row " style="border-bottom: 3px solid black;">
         <div class="col-2 text-center">
            <img src="<?= base_url('assets/img/lambang.png'); ?>" alt="" width="70">
         </div>
         <div class="col-10 text-left">
            <div class="fs-5 fw-bolder">RUKUN TETANGGA <?= $rt ?>/<?= $rw ?></div>
            <div class="fs-6 fw-bolder">KELURAHAN CIKAMPEK TIMUR </div>
            <div class="fs-6 fw-bolder">KECAMATAN CIKAMPEK KABUPATEN KARAWANG</div>

         </div>
      </div>
      <div class="text-center mt-5">
         <div class="fs-5 fw-bold"><u>SURAT KETERANGAN TIDAK MAMPU</u></div>
         <p>Nomor : <?= $no_surat ?></p>
      </div>
      <div class="fs-6 text-align-center">
         <p>&emsp; &emsp; &emsp;Yang bertanda tangan dibawah ini ketua RT <?= $rt ?>/<?= $rw ?> Kelurahan Cikampek Timur, Kecamatan Cikampek Kabupaten Karawang dengan ini menerangkan:</p>
      </div>
      <div class="fs-6 ms-5">
         <table>
            <tr>
               <td>NIK </td>
               <td>:</td>
               <td><?= $nik ?></td>
            </tr>
            <tr>
               <td>Nama </td>
               <td>:</td>
               <td><?= $nama ?></td>
            </tr>
            <tr>
               <td>Jenis Kelamin </td>
               <td>:</td>
               <td><?= $kelamin ?></td>
            </tr>
            <tr>
               <td>Tempat/Tgl Lahir </td>
               <td>:</td>
               <td><?= $ttl ?></td>
            </tr>
            <tr>
               <td>Alamat pada KTP </td>
               <td>:</td>
               <td><?= $alamat ?></td>
            </tr>
            <tr>
               <td>Maksud dan Tujuan </td>
               <td>:</td>
               <td><?= $keperluan ?></td>
            </tr>
         </table>
      </div>
      <br>
      <div class="fs-6 text-align-center" style="text-align:justify ;">
         <p>&emsp; &emsp; Nama tersebut adalah benar-benar warga kami dan berstatus <strong>Tidak Mampu</strong>. Demikan surat pengantar ini kami berikan guna proses tindank lanjut ke ke tingkat selanjutnya.
         </p>
         <div class="row justify-content-end">
            <div class="col-auto">
               <div class="row mt-6  justify-content-center">
                  <div class="col-auto fs-6 mt-5" style="text-align: center ;">
                     Cikampek, <?= $tanggal ?> <br>
                     Ketuan RT
                  </div>
                  <div class="col ps-5 mt-4">
                     <img src="<?= base_url('assets/img/qrcode.jpg'); ?>" alt="" width="150px" class="ms-4">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
      // window.open()
      window.print()
   </script>
</body>

</html>
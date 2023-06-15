<!-- Just an image -->




<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <?php foreach ($tamu as $t) { ?>
                <div class="card border-left-success border-success mb-3">
                    <div class="card-body row align-items-center">
                        <div class="col-md-8">
                            <h5><?= $t->nama ?></h5>
                            <hr class="bg-success">
                            <table>
                                <tr>
                                    <td>Tanggal</td>
                                    <td class="pr-2 pl-2">:</td>
                                    <td><?= $t->tanggal ?></td>
                                </tr>
                                <tr>
                                    <td>Asal</td>
                                    <td class="pr-2 pl-2">:</td>
                                    <td><?= $t->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td class="pr-2 pl-2">:</td>
                                    <td><?= $t->keperluan ?></td>
                                </tr>
                                <tr>
                                    <td>Keluarga Tujuan</td>
                                    <td class="pr-2 pl-2">:</td>
                                    <td><?= $t->keluarga_tujuan ?></td>
                                </tr>
                                <tr>
                                    <td>RT</td>
                                    <td class="pr-2 pl-2">:</td>
                                    <td><?= $t->kode_rt ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

</div>
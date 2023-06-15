<div class="row mt-5">
    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Penduduk</div>
                        <div class="h5 mb-0 font-weight-bold text-secondary"><?= $jml_penduduk ?> Penduduk</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Tamu</div>
                        <div class="h5 mb-0 font-weight-bold text-secondary"><?= $jml_tamu ?> Tamu</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-house-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Surat Terbuat</div>
                        <div class="h5 mb-0 font-weight-bold text-secondary"><?= $jml_surat_terbuat ?> Surat</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelopes-bulk fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr class="bg-success">
<br>
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header   py-3 ">
                <h6 class="m-0 font-weight-bold text-success">Tingkat Pendidikan Penduduk</h6>
            </div>
            <div class="card-body">
                <div class="">
                    <canvas id="pendidikan"></canvas>
                </div>
            </div>
        </div>
        <script>
            var xValues = ["SD/Sederajat", "SLTP/Sederajat", "SLTA/Sederajat", "D3/Sederajat", "S1/Sederajat", "S2/Sederajat", "S3/Sederajat"];
            var yValues = [
                <?= $pendidikan['Tamat SD/Sederajat'] ?>,
                <?= $pendidikan['Tamat SLTP/Sederajat'] ?>,
                <?= $pendidikan['Tamat SLTA/Sederajat'] ?>,
                <?= $pendidikan['D3/Sederajat'] ?>,
                <?= $pendidikan['S1/Sederajat'] ?>,
                <?= $pendidikan['S2/Sederajat'] ?>,
                <?= $pendidikan['S3/Sederajat'] ?>,
            ];
            var barColors = [
                "#4e73df",
                "#1cc88a",
                "#36b9cc",
                "#f6c23e",
                "#e74a3b",
                "#858796",
                "#5a5c69"
            ];

            new Chart("pendidikan", {
                type: "doughnut",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },

                options: {
                    maintainAspectRatio: false,

                    plugins: {
                        legend: {
                            display: false,

                        }
                    },

                    title: {
                        display: true,
                        text: "World Wide Wine Production 2018"
                    }
                }
            });
        </script>
    </div>
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <h6 class="m-0 font-weight-bold text-success">Tingkat Pekerjaan Penduduk</h6>
            </div>
            <div class="card-body">
                <div class="">
                    <canvas id="pekerjaan"></canvas>
                </div>
            </div>
        </div>
        <script>
            var xValues = ["Petani", "Buruh", "Wiraswata", "PNS", "TNI", "Polri", "Belum bekerja"];
            var yValues = [
                <?= $pekerjaan['petani'] ?>,
                <?= $pekerjaan['buruh'] ?>,
                <?= $pekerjaan['wiraswasta'] ?>,
                <?= $pekerjaan['pns'] ?>,
                <?= $pekerjaan['tni'] ?>,
                <?= $pekerjaan['polri'] ?>,
                <?= $pekerjaan['belum bekerja'] ?>,
            ];
            var barColors =

                "#1cc88a"

            ;

            new Chart("pekerjaan", {
                type: "bar",

                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },

                options: {
                    plugins: {
                        legend: {
                            display: false,

                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    title: {
                        display: true,
                        text: "World Wide Wine Production 2018"
                    },


                }
            });
        </script>
    </div>

</div>
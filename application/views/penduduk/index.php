<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>UI Penduduk</title>
    <link rel="canonical" href="https://codepen.io/piyushpd139/pen/gOYvZPG">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <script src="https://kit.fontawesome.com/b20261a34a.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        i {
            margin-right: 10px;
        }


        .navbar-logo {
            padding: 15px;
            background-color: white;
            border-radius: 10px;
        }

        .navbar-logo:hover {
            color: #fff;
            transform: scale(1.05);
        }


        .navbar-mainbg {
            background-color: #28a745;
            padding: 0px;
        }

        #navbarSupportedContent {
            overflow: hidden;
            position: relative;
        }

        #navbarSupportedContent ul {
            padding: 0px;
            margin: 0px;
        }

        #navbarSupportedContent ul li a i {
            margin-right: 10px;
        }

        #navbarSupportedContent li {
            list-style-type: none;
            float: left;
        }

        #navbarSupportedContent ul li a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 15px;
            display: block;
            padding: 20px 20px;
            transition-duration: 0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
        }

        #navbarSupportedContent>ul>li.active>a {
            color: #28a745;
            background-color: transparent;
            transition: all 0.7s;
        }

        #navbarSupportedContent a:not(:only-child):after {
            content: "\f105";
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 14px;
            font-family: "Font Awesome 5 Free";
            display: inline-block;
            padding-right: 3px;
            vertical-align: middle;
            font-weight: 900;
            transition: 0.5s;
        }

        #navbarSupportedContent .active>a:not(:only-child):after {
            transform: rotate(90deg);
        }

        .hori-selector {
            display: inline-block;
            position: absolute;
            height: 100%;
            top: 0px;
            left: 0px;
            transition-duration: 0.6s;
            transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            background-color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            margin-top: 10px;
        }

        .hori-selector .right,
        .hori-selector .left {
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: #fff;
            bottom: 10px;
        }

        .hori-selector .right {
            right: -25px;
        }

        .hori-selector .left {
            left: -25px;
        }

        .hori-selector .right:before,
        .hori-selector .left:before {
            content: '';
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #28a745;
        }

        .hori-selector .right:before {
            bottom: 0;
            right: -25px;
        }

        .hori-selector .left:before {
            bottom: 0;
            left: -25px;
        }


        @media(min-width: 992px) {
            .navbar-expand-custom {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-custom .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-custom .navbar-toggler {
                display: none;
            }

            .navbar-expand-custom .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
        }


        @media (max-width: 991px) {
            #navbarSupportedContent ul li a {
                padding: 12px 30px;
            }

            .hori-selector {
                margin-top: 0px;
                border-radius: 0;
                border-top-left-radius: 25px;
                border-bottom-left-radius: 25px;
            }

        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-custom navbar-mainbg fixed-top">
        <div class="container">
            <a class="navbar-brand navbar-logo m-1" href="#"><img class="" src="<?= base_url("assets/img/") ?>profile/logo1.png" alt="..." width="80" /></a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="list-tab" role="tablist">

                    <div class="hori-selector" style="top: 0px; left: 0px; height: 0px; width: 0px;">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <br>
                    <li class="nav-item active">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                        <a class="nav-link" href="#home"><i class="fas fa-home"></i>Home</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                        <a class="nav-link" href="#datapenduduk"><i class="far fa-address-book"></i>Data Penduduk</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                        <a class="nav-link" href="#buatsurat"><i class="fa fa-file-lines"></i>Buat Surat</a>
                    </li>

                    <br>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
        </div>
    </div>
    <div class="container" id="home">
        <div class="text-success text-center mb-4 pb-5 pt-5 mt-4">
            <div class="container d-flex align-items-center flex-column">
                <img class="mt-5 pt-5" src="<?= base_url("assets/img/") ?>profile/logo.png" alt="..." width="300" />
                <div class="row">
                    <div class=""><i class="fas fa-star pt-4"></i></div>
                    <div class=""><i class="fas fa-star pt-4"></i></div>
                    <div class=""><i class="fas fa-star pt-4"></i></div>
                </div>
                <p class="font-weight-light pt-3">Sistem Manajemen Administrasi Rukun Tetangga</p>
            </div>
        </div>
    </div>
    <br>
    <hr class="mt-5 text-success">
    <br>
    <div class="container" id="datapenduduk">
        <div class="card card-shadow mb-4">
            <div class="card-header py-3 bg-success text-white">
                <h6 class="m-0 font-weight-bold">Data Penduduk</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive col-sm-12">
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
                                            <th>Foto</th>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>Alamat</th>
                                            <th>Kelamin</th>
                                            <th>Status</th>
                                            <th>Status Dalam Keluarga</th>
                                            <th>Pekerjaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#fotoModal" class="badge badge-success p-2"><i class="fas fa-search"></i> LIHAT</a>
                                            </td>
                                            <td>123456789</td>
                                            <td>Ikhsan Permana</td>
                                            <td>Regency, Jambrud 4 No 4</td>
                                            <td>Laki-Laki</td>
                                            <td>Menikah</td>
                                            <td>Suami</td>
                                            <td>Karyawan Swasta</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 text-dark">
                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="mt-5">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="container" id="buatsurat">
        <center>
            <div class="card p-3 col-6">
                <div class="card-header py-3 m-3 bg-success text-white text-center ">
                    <h6 class="m-0 font-weight-bold">Tambah Surat</h6>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mt-3">
                            <label for="inputState" class="form-label">Jenis Surat</label>
                            <select id="inputState" class="form-select ml-3 pl-2 pr-2">
                                <option selected>Pilih ...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="" name="" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" name="" placeholder="Keperluan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white bg-success"><i class="fas fa-plus-circle"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </center>
    </div>
    <br>
    <hr>
    <br>
    <div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLabel">Foto</h5>
                    <button class="close text-success" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <center>
                    <img src="<?= base_url("assets/img/") ?>profile/default.jpg" alt="" width="300" class="rounded m-3">
                </center>
            </div>
        </div>
    </div>

    <footer class="sticky-footer bg-success mt-5 p-3 text-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script id="rendered-js">
        function test() {
            var tabsNewAnim = $('#navbarSupportedContent');
            var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
            var activeItemNewAnim = tabsNewAnim.find('.active');
            var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
            var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
            var itemPosNewAnimTop = activeItemNewAnim.position();
            var itemPosNewAnimLeft = activeItemNewAnim.position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });

            $("#navbarSupportedContent").on("click", "li", function(e) {
                $('#navbarSupportedContent ul li').removeClass("active");
                $(this).addClass('active');
                var activeWidthNewAnimHeight = $(this).innerHeight();
                var activeWidthNewAnimWidth = $(this).innerWidth();
                var itemPosNewAnimTop = $(this).position();
                var itemPosNewAnimLeft = $(this).position();
                $(".hori-selector").css({
                    "top": itemPosNewAnimTop.top + "px",
                    "left": itemPosNewAnimLeft.left + "px",
                    "height": activeWidthNewAnimHeight + "px",
                    "width": activeWidthNewAnimWidth + "px"
                });

            });
        }
        $(document).ready(function() {
            setTimeout(function() {
                test();
            });
        });
        $(window).on('resize', function() {
            setTimeout(function() {
                test();
            }, 500);
        });
        $(".navbar-toggler").click(function() {
            $(".navbar-collapse").slideToggle(300);
            setTimeout(function() {
                test();
            });
        });

        jQuery(document).ready(function($) {
            var path = window.location.pathname.split("/").pop();

            if (path == '') {
                path = 'index.php';
            }

            var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
            target.parent().addClass('active');
        });
    </script>





</body>

</html>
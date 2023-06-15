<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="https://kit.fontawesome.com/b20261a34a.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="<?= base_url("assets/sb-admin-2") ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url("assets") ?>/css/mystyle.css" rel="stylesheet">

    <!-- sweet alert -->
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body class="bg-success">

    <div class="container">
        <div class="flashdata-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
        <div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <label for="nik">No. Induk Kependudukan</label>
                                            <input name="nik" type="taxt" class="form-control  " id="nik">

                                        </div>
                                        <div class="form-group">
                                            <label for="nik">Password</label>
                                            <input name="password" type="text" class="form-control " id="password">
                                        </div>
                                        <small>Password default YYYY-MM-DD</small>
                                        <hr>
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url("assets/sb-admin-2/") ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url("assets/sb-admin-2/") ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url("assets/sb-admin-2/") ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url("assets/sb-admin-2/") ?>js/sb-admin-2.min.js"></script>


    <!-- sweet alert -->
    <script src="sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- my script -->
    <script src="<?= base_url('assets/js/myscript.js') ?>"></script>

</body>

</html>
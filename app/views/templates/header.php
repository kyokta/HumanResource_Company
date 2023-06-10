<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <title><?= $data['title'];  ?></title> -->
    <title>PT. TRPL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assetss/plugins/sidebar/css/styles.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assetss/plugins/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assetss/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assetss/plugins/sweetalert2/node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assetss/css/custom-styles.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">PT. TRPL</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>">DATA PRIBADI</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>/Seksi/index">SEKSI</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>/Jabatan/index">JABATAN</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>/Golongan/index">GOLONGAN</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>/Pekerjaan/index">PEKERJAAN</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>/Gaji/index">GAJI</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= BASEURL; ?>/Cuti/index">CUTI</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>
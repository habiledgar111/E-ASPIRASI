<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Data Aspirasi</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    span {
        font-weight: bold;
        color: #fff;
    }

    hr {
        border: 1px solid #1C2A60;
    }

    .sidebar {
        position: fixed;
        left: 0;
        bottom: 0;
        top: 0;
        z-index: 100;
        border-right: 1px solid #d3d3d3;
        background-color: #D1484D;
    }

    .left-sidebar {
        position: sticky;
        top: 0;
        height: 100%;
        background-color: #D1484D;
    }

    .sidebar-nav li .nav-link {
        color: #fff;
        font-weight: 500;
    }

    .sidebar-nav li .nav-link:hover {
        color: #000;
        font-weight: 500;
    }

    main {
        padding-top: 90px;
    }

    .header {
        width: 100%;
        float: right;
        height: 45px;
        text-align: right;
    }

    .title {
        float: left;
    }

    .search {
        height: 40px;
    }

    .title,
    .search {
        display: inline-block;
        position: relative;
    }

    table.rs-table-bordered {
        border: 1px solid #000;
        margin-top: 20px;
    }

    table.rs-table-bordered>thead>tr>th {
        border: 1px solid #000;
    }

    table.rs-table-bordered>tbody>tr>td {
        border: 1px solid #000;
    }

    .btn-edit {
        width: 80px;
        height: 38px;
        background: #415471;
        border-radius: 10px;
        color: #fff;
    }

    .btn-hapus {
        width: 80px;
        height: 38px;
        background: #C83737;
        border-radius: 10px;
        color: #fff;
    }

    .page-previous {
        background-color: #C7C7C7 !important;
    }

    .page-previous:hover {
        background-color: #d9d9d9 !important;
    }

    .page-number {
        color: #fff;
        background-color: #D1484D !important;
    }

    .page-next {
        background-color: #C7C7C7 !important;
    }

    .page-next:hover {
        background-color: #d9d9d9 !important;
    }

    .setting input[type=text] {
        margin-top: 10px;
        width: 800px;
        height: 50px;
        padding-left: 30px;
        padding-top: 6px;
        background: #E0D7D7;
        border: 1px solid #E0D7D7;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 14px;
    }

    .setting input[type=text]::placeholder {
        font-size: 20px;
        font-weight: bold;
    }

    .setting .btn-simpan {
        width: 140px;
        height: 50px;
        background: #D1484D;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        font-weight: bold;
        font-size: 25px;
        color: black;
    }

    .setting .btn-simpan:hover {
        width: 140px;
        height: 50px;
        background: #91272b;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        font-weight: bold;
        font-size: 25px;
        color: black;
    }

    footer {
        background-color: #F5CCCD;
        height: 60px;
        position: fixed;
        bottom: 0;
        width: 100%
    }
    </style>
</head>

<body>

    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <!-- Sidear -->
            <div class="col-md-2 d-none d-md-block sidebar" style="background-color: #D1484D;">
                <div class="left-sidebar">
                    <div class="text-center" style="margin-top: 30px;">
                        <img src="profile.png" width="70px" height="70px" class="mr-2" style="border-radius: 50%;">
                        <span>Admin</span>
                    </div>
                    <hr>
                    <ul class="nav flex-column sidebar-nav" style="margin-top: 60px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('dataaspirasi/') ?>">
                                <img src="data_aspirasi.jpg" width="20px" class="mr-2">
                                Data Aspirasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('setting/') ?>">
                                <img src="setting.jpg" width="20px" class="mr-2">
                                Setting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dataaspirasi/logout') ?>">log out</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: -25px;">
            <div class="header mb-5">

                <div class="title">
                    <h3 class="font-weight-bold">Data Aspirasi</h3>
                </div>

                <div class="search">
                    Search
                    <input type="text">
                </div>

            </div>
            <!-- <hr> -->
            <div class="table-responsive">
                <table class="table rs-table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="80px">NO</th>
                            <th scope="col">Nama Aspirator</th>
                            <th scope="col">Isi Aspirasi</th>
                            <th scope="col" width="300px">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $angka = 1; 
                        foreach($data as $row){ ?>
                        <tr>
                            <td><?= $angka; ?> </td>
                            <td>Anonymus</td>
                            <td><?= $row['aspirasi']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('dataaspirasi/delete/' . $row['kode_unik']); ?>" type="button"
                                    class="btn btn-hapus">Hapus</a>
                                <a href="<?= base_url('dataaspirasi/diterima/' . $row['kode_unik']); ?>" type="button" 
                                    class="btn btn-edit">Diterima</a>
                                <a href="<?= base_url('dataaspirasi/ditolak/' . $row['kode_unik']); ?>" type="button" 
                                    class="btn btn-edit">Ditolak</a>
                            </td>
                        </tr>
                        <?php 
                        $angka = $angka+1;
                        } ?>
                    </tbody>
                </table>

                <nav class="mt-2">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link page-previous" href="#" tabindex="-1">
                                <img src="previous.png" width="80%">
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-number" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-next" href="#">
                                <img src="next.png" width="80%">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
        <footer>

        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

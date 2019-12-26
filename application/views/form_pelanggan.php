<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPT Kalibrasi Dinas Kesehatan Kabupaten Malang</title>

    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url() ?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>assets2/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="<?php echo base_url() ?>assets2/css/creative.min.css" rel="stylesheet">


</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-default fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Form Pelanggan Kalibrasi</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo base_url('landing_page/form_pelanggan') ?>">Kalibrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Call Form Section -->
    <section class="page-section bg-dark text-Dark">
        <div class="container text-left">
            <h4>Identitas Pelanggan</h4>
            <form method="post" action="<?php echo base_url('administrator/users/tambah_users_aksi') ?>">
                <div class="form-group col-lg-6">
                    <label>Nama Instansi</label>
                    <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                    <?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group col-lg-6">
                    <label>Alamat</label>
                    <input type="text" name="password" placeholder="Masukkan Alamat" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group col-lg-6">
                    <label>Telp/Faks</label>
                    <input type="text" name="username" placeholder="Masukkan Telp/Faks" class="form-control">
                    <?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>
                </div>
                <label>Nama Pelanggan</label>
                <div class="form-group col-lg-6">
                    <label>Contact/Person</label>
                    <input type="text" name="password" placeholder="Masukkan Contact Person" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group col-lg-6">
                    <label>Jabatan</label>
                    <input type="text" name="password" placeholder="Masukkan Jabatan" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group col-lg-6">
                    <label>Telp</label>
                    <input type="text" name="password" placeholder="Masukkan Telpon Anda" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                    <br>
                </div>

                <label>Data Alat</label>
                <div class="form-group col-lg-6">
                    <label>Nama Alat</label>
                    <input type="text" name="password" placeholder="Masukkan Nama Alat" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group col-lg-6">
                    <label>Spesifikasi</label>
                    <input type="text" name="password" placeholder="Masukkan Spesifikasi" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="form-group col-lg-6">
                    <label>Merk</label>
                    <input type="text" name="password" placeholder="Masukkan Merk Alat" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                    <br>
                </div>
                <div class="form-group col-lg-6">
                    <label>Model</label>
                    <input type="text" name="password" placeholder="Masukkan Model Alat" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                    <br>
                </div>
                <div class="form-group col-lg-6">
                    <label>No Seri</label>
                    <input type="text" name="password" placeholder="Masukkan No Seri" class="form-control">
                    <?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
                    <br>
                </div>
                <div class="form-group col-lg-6">
                    <button class="btn-light btn-xl" type="button" onclick="tambahAlat(); return false;">Tambah Alat</button>
                </div>
                <a class="btn btn-light btn-xl" href="">Daftar sekarang!</a>
                <input type="hidden" id="jumlah-form" value="1">
        </div>
        </form>
    </section>

    <!--      <script>
        $(document).ready(;

            function() { // Ketika halaman sudah diload dan siap
                $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
                    var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
                    var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

                    // Kita akan menambahkan form dengan menggunakan append
                    // pada sebuah tag div yg kita beri id insert-form
                    $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
                        "<table>" +
                        "<tr>" +
                        "<td>NIS</td>" +
                        "<td><input type='text' name='nis[]' required></td>" +
                        "</tr>" +
                        "<tr>" +
                        "<td>Nama</td>" +
                        "<td><input type='text' name='nama[]' required></td>" +
                        "</tr>" +
                        "<tr>" +
                        "<td>Telepon</td>" +
                        "<td><input type='text' name='telp[]' required></td>" +
                        "</tr>" +
                        "<tr>" +
                        "<td>Alamat</td>" +
                        "<td><textarea name='alamat[]' required></textarea></td>" +
                        "</tr>" +
                        "</table>" +
                        "<br><br>");

                    $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
                });

                // Buat fungsi untuk mereset form ke semula
                $("#btn-reset-form").click(function() {
                    $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
                    $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
                });
            });
    </script>
-->
    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2019 - Alexander Jesse</div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets2/js/creative.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/jquery.min.js"></script>

</body>

</html>
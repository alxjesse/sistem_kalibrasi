<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register pelanggan UPT Kalibrasi!</h1>
                            </div>
                            <form class="user" method="post" action="<?php echo base_url('pelanggan/pelanggan/tambah_pelanggan_aksi') ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama_pelanggan" placeholder="Nama Pelanggan">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="telp_pelanggan" placeholder="Telp Pelanggan">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nama_instansi" placeholder="Nama Instansi">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="telp_instansi" placeholder="Telp Instansi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat_instansi" placeholder="Alamat Instansi">
                                </div>

                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Pelanggan
                                </button>
                                <hr>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
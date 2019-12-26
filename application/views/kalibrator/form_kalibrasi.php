<div class="container-fluid">
    <?php foreach ($alat as $alats) : ?>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Form Kalibrasi</h1>
        </div>

        <!-- isi utama -->
        <div class="card shadow my-4 text-gray-900">
            <form class="needs-validation" action="<?php echo base_url('pelanggan/pelanggan/tambah_alat_aksi') ?>" method="post" enctype="multipart/form-data" novalidate>
                <!-- data pemesan -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Alat</h6>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="nama_instansi">Nama Alat </label>
                            <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="<?php echo $alats->nama_alat ?>" readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nama_pelanggan">Spesifikasi</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $alats->spesifikasi ?>" readonly>
                            <div class="invalid-feedback">
                                Masukan Nama Pemesan
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="telp_instansi">Merk</label>
                            <input type="text" class="form-control" id="telp_instansi" name="telp_instansi" value="<?php echo $alats->merk ?>" readonly>
                            <div class="invalid-feedback">
                                Masukan Nomor Hp Pemesan
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="telp_instansi">Model</label>
                            <input type="text" class="form-control" id="telp_instansi" name="telp_instansi" value="<?php echo $alats->model ?>" readonly>
                            <div class="invalid-feedback">
                                Masukan Nomor Hp Pemesan
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="telp_instansi">Model</label>
                            <input type="text" class="form-control" id="telp_instansi" name="telp_instansi" value="<?php echo $alats->no_seri ?>" readonly>
                            <div class="invalid-feedback">
                                Masukan Nomor Hp Pemesan
                            </div>
                        </div>
                    </div>

                    <!-- data barang -->
                    <div class="card-header py-3 border-top">
                        <h6 class="m-0 font-weight-bold text-primary ">Hasil Kalibrasi Alat</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="tanggal_pengajuan">Tanggal Pelaksanaan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" for="tanggal_pengajuan">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                                    <div class="invalid-feedback">
                                        Masukan Tanggal Rencana Pengajuan
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nama_alat">Metode Kerja</label>
                                <div id="inputAlat">
                                    <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukan Metode Kerja" required>
                                </div>
                                <div class="invalid-feedback">
                                    Masukan Nama Alat
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="nama_alat">Tempat Pelaksanaan</label>
                                <div id="inputAlat">
                                    <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukan Tempat pelaksanaan" required>
                                </div>
                                <div class="invalid-feedback">
                                    Masukan Nama Alat
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="tanggal_pengajuan">Perkiraan Tanggal Kembali</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" for="tanggal_pengajuan">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                                    <div class="invalid-feedback">
                                        Masukan Tanggal Rencana Pengajuan
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="tempat_kalibrasi">Hasil Kalibrasi</label>
                                <select class="form-control" id="tempat_kalibrasi" name="tempat_kalibrasi" Required>
                                    <option value="">- Masukkan Hasil Kalibrasi -</option>
                                    <option value="LAIK">LAIK</option>
                                    <option value="TIDAK LAIK">TIDAK LAIK</option>
                                </select>
                                <div class="invalid-feedback">
                                    Masukan Ukuran
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card-footer d-md-flex justify-content-md-between">
                        <button type="submit" class="btn btn-primary btn-icon-split mr-md-2 mb-2 mb-md-0" onclick="tambahAlat(); return false;">
                            <span class="icon text-white"><i class="fas fa-plus-square"></i></span>
                            <span class="text">Tambah Alat</span>
                        </button>
                        <button type="submit" class="btn btn-success btn-icon-split ml-md-2 mt-2 mt-md-0">
                            <span class="icon text-white"><i class="fas fa-wallet"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                    </div>
            </form>
        <?php endforeach; ?>
        </div>
        <!-- akhir isi utama -->

</div>
<!-- akhir container-fluid -->


<script>
    var id_alat = 1;

    function tambahAlat() {
        if (id_alat == 5) {
            window.alert('Maksimal Alat diajukan 5');
        } else {
            id_alat++;
            addAlat('inputAlat', 'input', 'Alat' + id_alat, 'Alat' + id_alat);
            addSpesifikasi('inputSpesifikasi', 'input', 'spesifikasi' + id_alat, 'Spesifikasi ' + id_alat);
            addMerk('inputMerk', 'input', 'merk' + id_alat, 'Merk ' + id_alat);
            addModel('inputModel', 'input', 'model' + id_alat, 'Model ' + id_alat);
            addNoSeri('inputNoSeri', 'input', 'no_seri' + id_alat, 'No Seri ' + id_alat);
        }
    }

    function addAlat(parentID, eLementTag, eLementId, placeholder) {
        var p = document.getElementById(parentID);
        var newElement = document.createElement(eLementTag);
        newElement.setAttribute('name', eLementId);
        newElement.setAttribute('id', eLementId);
        newElement.setAttribute('class', 'form-control');
        newElement.setAttribute('placeholder', placeholder);
        newElement.setAttribute('style', 'margin:22px 0;');
        p.appendChild(newElement);
    }

    function addSpesifikasi(parentID, eLementTag, eLementId, placeholder) {
        var p = document.getElementById(parentID);
        var newElement = document.createElement(eLementTag);
        newElement.setAttribute('name', eLementId);
        newElement.setAttribute('id', eLementId);
        newElement.setAttribute('class', 'form-control');
        newElement.setAttribute('placeholder', placeholder);
        newElement.setAttribute('style', 'margin:22px 0;');
        p.appendChild(newElement);
    }

    function addMerk(parentID, eLementTag, eLementId, placeholder) {
        var p = document.getElementById(parentID);
        var newElement = document.createElement(eLementTag);
        newElement.setAttribute('name', eLementId);
        newElement.setAttribute('id', eLementId);
        newElement.setAttribute('class', 'form-control');
        newElement.setAttribute('placeholder', placeholder);
        newElement.setAttribute('style', 'margin:22px 0;');
        p.appendChild(newElement);
    }

    function addModel(parentID, eLementTag, eLementId, placeholder) {
        var p = document.getElementById(parentID);
        var newElement = document.createElement(eLementTag);
        newElement.setAttribute('name', eLementId);
        newElement.setAttribute('id', eLementId);
        newElement.setAttribute('class', 'form-control');
        newElement.setAttribute('placeholder', placeholder);
        newElement.setAttribute('style', 'margin:22px 0;');
        p.appendChild(newElement);
    }

    function addNoSeri(parentID, eLementTag, eLementId, placeholder) {
        var p = document.getElementById(parentID);
        var newElement = document.createElement(eLementTag);
        newElement.setAttribute('name', eLementId);
        newElement.setAttribute('id', eLementId);
        newElement.setAttribute('class', 'form-control');
        newElement.setAttribute('placeholder', placeholder);
        newElement.setAttribute('style', 'margin:22px 0;');
        p.appendChild(newElement);
    }
</script>
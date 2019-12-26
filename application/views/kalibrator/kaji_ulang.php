<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Form Permintaan Pelanggan</h1>
    </div>

    <!-- isi utama -->
    <div class="card shadow my-4 text-gray-900">
        <form class="needs-validation" action="<?php echo base_url('pelanggan/pelanggan/tambah_alat_aksi') ?>" method="post" enctype="multipart/form-data" novalidate>
            <!-- data pemesan -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Calon Pelangagn</h6>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="nama_instansi">Nama Instansi </label>
                        <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="tanggal_pengajuan">Tanggal Rencana Pengajuan</label>
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
                        <label for="nama_pelanggan">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukan Nama Pemesan" required>
                        <div class="invalid-feedback">
                            Masukan Nama Pemesan
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="telp_instansi">Telp/Faks.No Instansi</label>
                        <input type="text" class="form-control" id="telp_instansi" name="telp_instansi" placeholder="Masukan Telp/Faks.No Instansi" required>
                        <div class="invalid-feedback">
                            Masukan Nomor Hp Pemesan
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="alamat_instansi">Alamat Instansi</label>
                        <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" placeholder="Masukan Alamat Instansi" required>
                        <div class="invalid-feedback">
                            Masukan Alamat Instansi
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="jenis_instansi">Jenis Instansi</label>
                        <select class="form-control" id="jenis_instansi" name="jenis_instansi" Required>
                            <option value="">- Pilih Instansi -</option>
                            <option value="NEGERI">Negeri</option>
                            <option value="SWASTA">Swasta</option>
                        </select>
                        <div class="invalid-feedback">
                            Masukan Nama Instansi
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="tempat_kalibrasi">Pilih Tempat Kalibrasi</label>
                        <select class="form-control" id="tempat_kalibrasi" name="tempat_kalibrasi" Required>
                            <option value="">- Pilih Tempat Kalibrasi -</option>
                            <option value="Laboratorium UPT">Laboratorium UPT</option>
                            <option value="Tempat Pelanggan">Tempat/Lokasi Pelanggan</option>
                        </select>
                        <div class="invalid-feedback">
                            Masukan Ukuran
                        </div>
                    </div>
                </div>

                <!-- data barang -->
                <div class="card-header py-3 border-top">
                    <h6 class="m-0 font-weight-bold text-primary ">Data Alat yang Ingin di Kalibrasi</h6>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-4">
                            <label for="nama_alat">Nama Alat</label>
                            <div id="inputAlat">
                                <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Masukan Nama Alat" required>
                            </div>
                            <div class="invalid-feedback">
                                Masukan Nama Alat
                            </div>
                        </div>

                        <div class="col-md-2 mb-2">
                            <label for="spesifikasi">Spesifikasi</label>
                            <div id="inputSpesifikasi">
                                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" placeholder="Masukan Spesifikasi Alat" required>
                            </div>
                            <div class="invalid-feedback">
                                Masukan Spesifikasi Alat
                            </div>
                        </div>

                        <div class="col-md-2 mb-2">
                            <label for="merk">Merk</label>
                            <div id="inputMerk">
                                <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukan Merk Alat" required>
                            </div>
                            <div class="invalid-feedback">
                                Masukan Merk Alat
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="model">Model</label>
                            <div id="inputModel">
                                <input type="text" class="form-control" id="model" name="model" placeholder="Masukan Model Alat" required>
                            </div>
                            <div class="invalid-feedback">
                                Masukan Model Alat
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="no_seri">No Seri</label>
                            <div id="inputNoSeri">
                                <input type="text" onchange="totalHarga()" class="form-control" id="no_seri" name="no_seri" placeholder="Masukan No Seri Alat" required>
                            </div>
                            <div class="invalid-feedback">
                                Masukan No Seri Alat
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
<div class="container-fluid">

    <div class="alert alert-succes" role="alert">
        <i class="fas fa-university"></i> KALIBRASI ALAT KESEHATAN
    </div>

    <table class="table table-borderd table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>ID_PESANAN</th>
            <th>NAMA_ALAT</th>
            <th>STATUS</th>
            <th>KALIBRASI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data->result_array() as $i) :
            $id_pesanan = $i['id_pesanan'];
            $nama_alat = $i['nama_alat'];
            $hasil = $i['hasil']; ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $id_pesanan ?></td>
                <td><?php echo $nama_alat ?></td>
                <td><?php echo $hasil ?></td>
                <td>
                    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Kaji Ulang Kontrak</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                    <form method="post" action="<?php echo base_url('administrator/calon_pelanggan/kaji_ulang/' . $id_pesanan) ?>">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <?php
                                                if ($status == 'BELUM DIKAJI') { ?>
                                                    <option value="BELUM DIKAJI" selected>BELUM DIKAJI</option>
                                                    <option value="DITERIMA">DITERIMA</option>
                                                    <option value="DITOLAK">DITOLAK</option>
                                                <?php
                                                } elseif ($status == 'DITERIMA') {
                                                ?>
                                                    <option value="BELUM DIKAJI">BELUM DIKAJI</option>
                                                    <option value="DITERIMA" selected>DITERIMA</option>
                                                    <option value="DITOLAK">DITOLAK</option>
                                                <?php
                                                } elseif ($status == 'DITOLAK') {                    ?>
                                                    <option value="BELUM DIKAJI">BELUM DIKAJI</option>
                                                    <option value="DITERIMA">DITERIMA</option>
                                                    <option value="DITOLAK" selected>DITOLAK</option>
                                                <?php
                                                } else { ?>
                                                    <option value="BELUM DIKAJI">BELUM DIKAJI</option>
                                                    <option value="DITERIMA">DITERIMA</option>
                                                    <option value="DITOLAK">DITOLAK</option>

                                                <?php } ?>
                                            </select>
                                            <div class="form-group">
                                                <label>Ketarangan</label>
                                                <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
                                                <?php echo form_error('keterangan', '<div class="text-danger small" ml-3>') ?>
                                            </div>
                                            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-sm btn-primary center">
                        <i class="fa fa-trash" data-toggle="modal" data-target="#modalContactForm"></i>
                    </div>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>

</div>
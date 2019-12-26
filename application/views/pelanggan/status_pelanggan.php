<div class="container-fluid">

    <div class="alert alert-succes" role="alert">
        <i class="fas fa-university"></i> STATUS PESANAN ANDA
    </div>

    <table class="table table-borderd table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA ALAT</th>
            <th>TEMPAT PENGAJUAN</th>
            <th>STATUS</th>
            <th>KETERANGAN</th>

        </tr>
        <?php
        $no = 1;
        $alat = 1;
        foreach ($data->result_array() as $i) :
            $current_id = $i['id_instansi'];
            $nama_instansi = $i['nama_instansi'];
            $nama_pelanggan = $i['nama_pelanggan'];
            $tempat_kalibrasi = $i['tempat_kalibrasi'];
            $status = $i['status'];
            $keterangan = $i['keterangan'];
            $id_pesanan = $i['id_pesanan'];
            $nama_alat = $i['nama_alat'];
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $nama_alat ?></td>
                <td><?php echo $tempat_kalibrasi ?></td>
                <td>
                    <?php if ($i['status'] == 'DITERIMA') : ?>
                        <button type="button" class="btn btn-primary" disabled><?= $status ?></button>
                    <?php elseif ($i['status'] == 'BELUM DIKAJI') : ?>
                        <button type="button" class="btn btn-warning" disabled><?= $status ?></button>
                    <?php else : ?>
                        <button type="button" class="btn btn-success" disabled><?= $status ?></button>
                    <?php endif; ?>
                </td>
                <td><?php echo $keterangan ?></td>
            <?php endforeach; ?>
            </tr>

    </table>

</div>
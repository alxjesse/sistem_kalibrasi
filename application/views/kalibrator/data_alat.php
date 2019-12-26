<div class="container-fluid">

    <div class="alert alert-succes" role="alert">
        <i class="fas fa-university"></i> KAJI ULANG KONTRAK
    </div>

    <table class="table table-borderd table-hover table-striped">
        <tr>
            <th>NO ORDER</th>
            <th>PEMILIK</th>
            <th>NAMA ALAT</th>
            <th>SPESIFIKASI</th>
            <th>MERK</th>
            <th>MODEL</th>
            <th>NO_SERI</th>
            <th>KALIBRASI</th>
        </tr>
        <?php
        $no = 1;
        $alat = 1;
        foreach ($data->result_array() as $i) :
            $id_pesanan = $i['id_pesanan'];
            $nama_instansi = $i['nama_instansi'];
            $nama_alat = $i['nama_alat'];
            $spesifikasi = $i['spesifikasi'];
            $model = $i['model'];
            $merk = $i['merk'];
            $no_seri = $i['no_seri'];
            $id_alat = $i['id_alat'];
        ?>
            <tr>
                <td><?php echo $id_pesanan ?></td>
                <td><?php echo $nama_instansi ?></td>
                <td><?php echo $nama_alat ?></td>
                <td><?php echo $spesifikasi ?></td>
                <td><?php echo $model ?></td>
                <td><?php echo $merk ?></td>
                <td><?php echo $no_seri ?></td>
                <td widht="20px"><?php echo anchor(
                                        'kalibrator/kalibrator/kalibrasi/' . $id_alat,
                                        '<div class ="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?></td>
            <?php endforeach; ?>
            </td>
            </tr>

    </table>

</div>
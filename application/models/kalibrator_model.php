<?php

class Kalibrator_model extends CI_Model
{
    public $pesanan = 'pesanan';
    public $id_pesanan = 'id_pesanan';

    function ambil_data()
    {
        $hasil = $this->db->query("SELECT *  FROM instansi INNER JOIN pelanggan ON instansi.id_instansi = pelanggan.id_instansi INNER JOIN pesanan ON pelanggan.id_pelanggan = pesanan.id_pelanggan INNER JOIN alat ON pesanan.id_pesanan = alat.id_pesanan");
        return $hasil;
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}

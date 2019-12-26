<?php

class Kaji_ulang extends CI_Model
{

    public $table = '$this->db->query("SELECT *  FROM instansi INNER JOIN pelanggan ON instansi.id_instansi = pelanggan.id_instansi INNER JOIN pesanan ON pelanggan.id_pelanggan = pesanan.id_pelanggan INNER JOIN alat ON pesanan.id_pesanan = alat.id_pesanan");';

    public function coba()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('');
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
}

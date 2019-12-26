<?php

class Pelanggan_model extends CI_Model
{
    public $pesanan = 'pesanan';
    public $id_pesanan = 'id_pesanan';

    function ambil_data()
    {
        $hasil = $this->db->query("SELECT *  FROM instansi INNER JOIN pelanggan ON instansi.id_instansi = pelanggan.id_instansi INNER JOIN pesanan ON pelanggan.id_pelanggan = pesanan.id_pelanggan INNER JOIN alat ON pesanan.id_pesanan = alat.id_pesanan");
        return $hasil;
    }
    public function update_data($id_pesanan, $status, $keterangan)
    {
        $this->db->update('pesanan');
        $this->db->set('status', $status);
        $this->db->set('keterangan', $keterangan);
        $this->db->where('id_pesanan'->$id_pesanan);
        $query = $this->db->get();
        return $query;
    }
    public function get_id_instansi($nama)
    {
        $hasil = $this->db->query("SELECT id_instansi from instansi WHERE nama_instansi = '$nama'");
        return $hasil->result_array();
    }
    public function get_id_pelanggan($nama)
    {
        $hasil = $this->db->query("SELECT id_pelanggan from pelanggan WHERE nama_pelanggan = '$nama'");
        return $hasil->result_array();
    }
    public function get_id_pesanan($nama)
    {
        $hasil = $this->db->query("SELECT id_pesanan from pesanan WHERE timestampt = '$nama'");
        return $hasil->result_array();
    }

    public function insert_data($data, $pesanan)
    {
        $this->db->insert($pesanan, $data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_start();
        $this->db->trans_complete();
        return $insert_id;
    }


    public function insert_data_pelanggan($data, $pelanggan)
    {
        $this->db->insert($pelanggan, $data);
    }

    public function edit_data($where, $pesanan)
    {
        return $this->db->get_where($pesanan, $where);
    }

    public function kaji_ulang($where, $data, $pesanan)
    {
        $this->db->where($where);
        $this->db->update($pesanan, $data);
    }


    //bella
    public function get_barang($id_pesanan)
    {
        $hasil = $this->db->query("SELECT a.id_alat,a.nama_alat,b.id_pelanggan from alat a join pesanan b on a.id_pesanan = b.id_pesanan WHERE b.id_pesanan = $id_pesanan");
        return $hasil->result_array();
    }
    public function insert_kalibrasi($id_alat, $id)
    {
        $this->session->userdata['username'];
        $this->db->query("INSERT INTO kalibrasi (id_alat,id) values ('$id_alat','$id')");
    }

    function data_kalibrasi()
    {
        $hasil = $this->db->query("SELECT * FROM kalibrasi a JOIN alat b on a.id_alat = b.id_alat JOIN pesanan c ON b.id_pesanan = c.id_pesanan");
        return $hasil;
    }
}

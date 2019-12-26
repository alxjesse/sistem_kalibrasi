<?php

class Calon_pelanggan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
            redirect('administrator/auth');
        }
    }

    public function index()
    {

        $x['data'] = $this->Pelanggan_model->ambil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/calon_pelanggan', $x);
        $this->load->view('templates/footer');
    }


    public function kajiUlang($id)
    {
        $where = array('id_pesanan' => $id);

        $data['pesanan'] = $this->kalibrator_model->edit_data($where, 'pesanan')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kalibrator/kaji_ulang', $data);
        $this->load->view('templates/footer');
    }






















    public function update($id_pesanan)
    {
        $where = array('id_pesanan' => $id_pesanan);

        $data['users'] = $this->pelanggan_model->edit_data($where, 'user')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/users_update', $data);
        $this->load->view('templates/footer');
    }

    public function kaji_ulang($id_pesanan)
    {
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'status' => $status,
            'keterangan' => $keterangan
        );

        $where = array(
            'id_pesanan' => $id_pesanan
        );

        $this->Pelanggan_model->kaji_ulang($where, $data, 'pesanan');
        if ($status == "DITERIMA") {
            $this->update_kalibrasi($id_pesanan);
        }
        redirect('administrator/calon_pelanggan');
    }
    public function update_kalibrasi($id_pesanan)
    {
        $a = $this->Pelanggan_model->get_barang($id_pesanan);
        for ($i = 0; $i < count($a); $i++) {
            $id_alat = $a[$i]['id_alat'];
            $id = $a[$i]['id_pelanggan'];
            $this->Pelanggan_model->insert_kalibrasi($id_alat, $id);
        }
    }

    public function kalibrasi_alat()
    {
        $x['data'] = $this->Pelanggan_model->data_kalibrasi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/kalibrasi_alat', $x);
        $this->load->view('templates/footer');
    }
}

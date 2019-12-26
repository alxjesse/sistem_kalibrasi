<?php

class Pelanggan extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pelanggan/register_pelanggan');
        $this->load->view('templates/footer');
    }

    public function tambah_pelanggan()
    {
        $datapelanggan = array(
            'nama_pelanggan' => set_value('nama_pelanggan'),
            'telp_pelanggan' => set_value('telp_pelanggan')
        );
        $datainstansi = array(
            'nama_instansi' => set_value('nama_instansi'),
            'telp_instansi' => set_value('telp_instansi'),
            'alamat_instansi' => set_value('alamat_instansi')
        );
        $datauser = array(
            'email' => set_value('email'),
            'password' => set_value('password')
        );
        $data['users'] = $this->pelanggan_model->tampil_data('user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/users_form', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pelanggan_aksi()
    {
        $datainstansi = array(
            'nama_instansi'   => $this->input->post('nama_instansi', FALSE),
            'telp_instansi'  => $this->input->post('telp_instansi', TRUE),
            'alamat_instansi' => $this->input->post('alamat_instansi', TRUE)
        );

        $this->pelanggan_model->insert_data($datainstansi, 'instansi');

        $array_instansi = $this->pelanggan_model->get_id_instansi($this->input->post('nama_instansi'));
        $id_instansi = $array_instansi[0]['id_instansi'];

        $datapelanggan = array(
            'nama_pelanggan'   => $this->input->post('nama_pelanggan', TRUE),
            'telp_pelanggan'   => $this->input->post('telp_pelanggan', TRUE),
            'id_instansi' => $id_instansi
        );
        $this->pelanggan_model->insert_data($datapelanggan, 'pelanggan');

        $datauser = array(
            'username'   => $this->input->post('username', TRUE),
            'password'   => md5($this->input->post('password', TRUE))
        );
        $this->user_model->insert_data($datauser, 'user');

        redirect('administrator/auth');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required', ['required' => 'Nama pelanggan wajib diisi']);
        $this->form_validation->set_rules('telp_pelanggan', 'Telp Pelanggan', 'required', ['required' => 'Telp pelanggan wajib diisi']);
        $this->form_validation->set_rules('telp_Instansi', 'Nama Instansi', 'required', ['required' => 'Telp Instansi wajib diisi']);
        $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required', ['required' => 'Nama instansi wajib diisi']);
        $this->form_validation->set_rules('alamat_instansi', 'Alamat Instansi', 'required', ['required' => 'Alamat instansi wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi']);
    }

    public function tambah_alat()
    {
        $this->load->view('templates/header');
        $this->load->view('pelanggan/tambah_pesanan');
        $this->load->view('templates/footer');
    }

    public function tambah_alat_aksi()
    {
        $datainstansi = array(
            'nama_instansi'   => $this->input->post('nama_instansi', FALSE),
            'telp_instansi'  => $this->input->post('telp_instansi', TRUE),
            'alamat_instansi' => $this->input->post('alamat_instansi', TRUE),
            'jenis_instansi' => $this->input->post('jenis_instansi', TRUE)
        );

        $this->pelanggan_model->insert_data($datainstansi, 'instansi');
        $array_instansi = $this->pelanggan_model->get_id_instansi($this->input->post('nama_instansi'));
        $id_instansi = $array_instansi[0]['id_instansi'];

        $datapelanggan = array(
            'nama_pelanggan'   => $this->input->post('nama_pelanggan', TRUE),
            'id_instansi' => $id_instansi
        );
        $this->pelanggan_model->insert_data($datapelanggan, 'pelanggan');
        $array_pelanggan = $this->pelanggan_model->get_id_pelanggan($this->input->post('nama_pelanggan'));
        $id_pelanggan = $array_pelanggan[0]['id_pelanggan'];
        $timestampt = date("Y-m-d H:i:s");


        $datapesanan = array(
            'tempat_kalibrasi' => $this->input->post('tempat_kalibrasi', TRUE),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan', TRUE),
            'timestampt' => $timestampt,
            'id_pelanggan' => $id_pelanggan
        );

        $this->pelanggan_model->insert_data($datapesanan, 'pesanan');
        $array_pesanan = $this->pelanggan_model->get_id_pesanan($timestampt);
        $id_pesanan = $array_pesanan[0]['id_pesanan'];

        $dataalat = array(
            'nama_alat' => $this->input->post('nama_alat', TRUE),
            'spesifikasi' => $this->input->post('spesifikasi', TRUE),
            'merk' => $this->input->post('merk', TRUE),
            'model' => $this->input->post('model', TRUE),
            'no_seri' => $this->input->post('no_seri', TRUE),
            'id_pesanan' => $id_pesanan
        );
        $this->pelanggan_model->insert_data($dataalat, 'alat');
    }

    public function status_pelanggan()
    {
        $this->load->model('Pelanggan_model');
        $x['data'] = $this->pelanggan_model->ambil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pelanggan/status_pelanggan', $x);
        $this->load->view('templates/footer');
    }
}

<?php



class Kalibrator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('kalibrator_model');
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
        $x['data'] = $this->kalibrator_model->ambil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kalibrator/data_alat', $x);
        $this->load->view('templates/footer');
    }

    public function lihat_alat()
    {
        $x['data'] = $this->kalibrator_model->ambil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kalibrator/data_alat', $x);
        $this->load->view('templates/footer');
    }

    public function kalibrasi($id_alat)
    {
        $where = array('id_alat' => $id_alat);
        $data['alat'] = $this->kalibrator_model->edit_data($where, 'alat')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kalibrator/form_kalibrasi', $data);
        $this->load->view('templates/footer');
    }
}

<?php

class Users extends CI_Controller
{

    public function index()
    {
        $data['users'] = $this->user_model->tampil_data('user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/daftar_users', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_users()
    {
        $data = array(
            'username' => set_value('username'),
            'password' => set_value('password'),
            'email' => set_value('email'),
            'level' => set_value('level'),
            'nip' => set_value('nip'),
            'nama' => set_value('nama'),
            'blokir' => set_value('blokir')
        );
        $data['users'] = $this->user_model->tampil_data('user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/users_form', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_users_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_users();
        } else {
            $data = array(
                'username'   => $this->input->post('username', TRUE),
                'password'   => md5($this->input->post('password', TRUE)),
                'email'   => $this->input->post('email', TRUE),
                'level'  => $this->input->post('level', TRUE),
                'nip' => $this->input->post('nip', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'blokir' => $this->input->post('blokir', TRUE),
                'id_session' => md5($this->input->post('id_session', TRUE))
            );

            $this->user_model->insert_data($data, 'user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-dismissible fade show" role="alert">
            Data User Berhasil Ditambahkan!
            <button type = "button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('administrator/users');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib diisi']);
        $this->form_validation->set_rules('nip', 'NIP', 'required', ['required' => 'NIP wajib diisi']);
    }

    public function update($id)
    {
        $where = array('id' => $id);
        $data['users'] = $this->user_model->edit_data($where, 'user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('administrator/users_update', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $level = $this->input->post('level');
        $blokir = $this->input->post('blokir');
        $id_sessions = $this->input->post('id_sessions');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');

        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'level' => $level,
            'blokir' => $blokir,
            'nama' => $nama,
            'nip' => $nip,
        );

        $where = array(
            'id' => $id
        );

        $this->user_model->update_data($where, $data, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-dismissible fade show" role="alert">
        Data User Berhasil Diupdate!
        <button type = "button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('administrator/users');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->user_model->delete_data($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-dismissible fade show" role="alert">
        Data User Berhasil Dihapus!
        <button type = "button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('administrator/users');
    }
}

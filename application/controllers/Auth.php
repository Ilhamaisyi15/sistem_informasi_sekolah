<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Field ini wajib diisi',
            'valid_email' => 'Email tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Field ini wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('login/login');
        } else {
            // Validasi Lolos
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // Cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat Datang Dihalaman Admin </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('Dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" > Password salah! </div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" > Email ini belum aktif! </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" > Email tidak terdaftar! </div>');
            redirect('Auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Anda berhasil Keluar!</div>');
        redirect('Auth');
    }

    public function user()
    {
        $this->load->model('Model_admin');
        $data['data_user'] =  $this->Model_admin->dataUser();
        $data['getUser'] = $this->Model_admin->getUser();

        $this->load->view('template/header',  $data);
        $this->load->view('template/sidebar',  $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('template/footer',  $data);
    }

    public function tambahDataUser()
    {

        $data['getUser'] = $this->Model_admin->getUser();

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/tambah_data_user');
            $this->load->view('template/footer');
        } else {
            $this->load->model('Model_admin');
            $this->Model_admin->tambahDataUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>User Berhasil ditambah</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('Auth/user');
        }
    }
}

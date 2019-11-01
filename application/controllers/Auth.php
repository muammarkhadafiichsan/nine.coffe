<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();



        $this->load->model("Model_login");
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header1');
            $this->load->view('admin/form_login');
            $this->load->view('admin/footer');
        } else {
            $Auth = $this->Model_login->cek_login();
            if ($Auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password anda kurang benar
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('Auth/login');
            } else {
                $this->session->set_userdata('username', $Auth->username);
                $this->session->set_userdata('password', ($Auth->password));
                $this->session->set_userdata('role_id', $Auth->role_id);

                switch ($Auth->role_id) {
                    case 1:
                        redirect('Admin/Dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           anda belum login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }

        $this->load->model("Model_profile");
    }

    public function index()
    {
        $data['profile'] = $this->Model_profile->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/profile', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_profile()
    {
        $Id = $this->input->post('Id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $foto = $_FILES['foto']['name'];
        if ($foto = '') { } else {
            $config['upload_path'] =  './assets/images';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Gambar gagal di Upload bray!!!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = array(
            'Id' => $Id,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'foto' => $foto

        );


        $this->Model_profile->input_profile($data, 'profile');
        redirect('Admin/Profile/index');
    }

    public function list()
    {
        $data['profile'] = $this->Model_profile->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_profile', $data);
        $this->load->view('admin/footer');
    }

    public function edit($Id)
    {
        $where = array('Id' => $Id);
        $data['profile'] = $this->Model_profile->edit_profile($where, 'profile')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/edit_profile', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $Id = $this->input->post('Id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');




        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,




        );

        $where = array(
            'Id' => $Id
        );

        $this->Model_profile->update($where, $data, 'profile');
        redirect('Admin/Profile/list');
    }

    public function hapus($Id)
    {
        $where = array('Id' => $Id);
        $this->Model_profile->hapus($where, 'profile');
        redirect('Admin/Profile/list');
    }
}

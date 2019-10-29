<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awards extends CI_Controller
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


        $this->load->model("Model_awards");
    }


    public function index()
    {

        $data['awards'] = $this->Model_awards->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/awards', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_awards()
    {
        $Id = $this->input->post('Id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
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
            'foto' => $foto,
            'tanggal' => $tanggal

        );


        $this->Model_awards->input_awards($data, 'awards');
        redirect('Admin/Awards/index');
    }

    public function list()
    {
        $data['awards'] = $this->Model_awards->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_awards', $data);
        $this->load->view('admin/footer');
    }

    public function edit($Id)
    {
        $where = array('Id' => $Id);
        $data['awards'] = $this->Model_awards->edit($where, 'awards')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/edit_awards', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $Id = $this->input->post('Id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');




        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal




        );

        $where = array(
            'Id' => $Id
        );

        $this->Model_profile->update($where, $data, 'awards');
        redirect('Admin/Awards/list');
    }

    public function hapus($Id)
    {
        $where = array('Id' => $Id);
        $this->Model_awards->hapus($where, 'awards');
        redirect('Admin/Awards/list');
    }
}

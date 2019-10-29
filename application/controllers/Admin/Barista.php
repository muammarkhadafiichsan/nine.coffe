<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barista extends CI_Controller
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


        $this->load->model("Model_barista");
    }

    public function index()
    {
        $data['barista'] = $this->Model_barista->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/barista', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_barista()
    {
        $Id = $this->input->post('Id');
        $nama_barista = $this->input->post('nama_barista');
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
            'nama_barista' => $nama_barista,
            'deskripsi' => $deskripsi,
            'foto' => $foto

        );


        $this->Model_barista->input_barista($data, 'barista');
        redirect('Admin/Barista/index');
    }

    public function list()
    {
        $data['barista'] = $this->Model_barista->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_barista', $data);
        $this->load->view('admin/footer');
    }

    public function edit($Id)
    {
        $where = array('Id' => $Id);
        $data['barista'] = $this->Model_barista->edit_barista($where, 'barista')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/edit_barista', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $Id = $this->input->post('Id');
        $nama_barista = $this->input->post('nama_barista');
        $deskripsi = $this->input->post('deskripsi');




        $data = array(
            'nama_barista' => $nama_barista,
            'deskripsi' => $deskripsi,




        );

        $where = array(
            'Id' => $Id
        );

        $this->Model_barista->update($where, $data, 'barista');
        redirect('Admin/Barista/list');
    }

    public function hapus($Id)
    {
        $where = array('Id' => $Id);
        $this->Model_barista->hapus($where, 'barista');
        redirect('Admin/Barista/list');
    }
}

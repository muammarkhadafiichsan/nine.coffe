<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tips_trik extends CI_Controller
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

        $this->load->model("Model_tips_trik");
    }

    public function index()
    {
        $data['Tips_trik'] = $this->Model_tips_trik->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/tips_trik', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_tips()
    {
        $Id = $this->input->post('Id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');
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
            'tanggal' => $tanggal,
            'sumber' => $sumber,
            'foto' => $foto

        );


        $this->Model_tips_trik->input_tips($data, 'tips_trik');
        redirect('Admin/Produk/index');
    }

    public function list()
    {
        $data['tips_trik'] = $this->Model_tips_trik->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_tips', $data);
        $this->load->view('admin/footer');
    }

    public function edit($Id)
    {
        $where = array('Id' => $Id);
        $data['tips_trik'] = $this->Model_tips_trik->edit_tips($where, 'tips_trik')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/edit_tips', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $Id = $this->input->post('Id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');





        $data = array(
            'Id' => $Id,
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal,
            'sumber' => $sumber





        );

        $where = array(
            'Id' => $Id
        );

        $this->Model_tips_trik->update($where, $data, 'tips_trik');
        redirect('Admin/Tips_trik/list');
    }

    public function hapus($Id)
    {
        $where = array('Id' => $Id);
        $this->Model_tips_trik->hapus($where, 'tips_trik');
        redirect('Admin/Tips_trik/list');
    }
}

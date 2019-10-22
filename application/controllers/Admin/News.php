<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_berita");
    }


    public function index()
    {
        $data['berita'] = $this->Model_berita->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/news', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_berita()
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
            'tanggal' => $tanggal,
            'foto' => $foto

        );


        $this->Model_berita->input_berita($data, 'berita');
        redirect('Admin/News/index');
    }
    public function list()
    {
        $data['berita'] = $this->Model_berita->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_berita', $data);
        $this->load->view('admin/footer');
    }
}

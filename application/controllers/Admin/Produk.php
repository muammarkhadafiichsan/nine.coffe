<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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

        $this->load->model("Model_produk");
    }

    public function index()
    {
        $data['produk'] = $this->Model_produk->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/produk', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_produk()
    {
        $Id = $this->input->post('Id');
        $nama_produk = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $sejarah = $this->input->post('sejarah');
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
            'nama_produk' => $nama_produk,
            'deskripsi' => $deskripsi,
            'sejarah' => $sejarah,
            'foto' => $foto

        );


        $this->Model_produk->input_produk($data, 'produk');
        redirect('Admin/Produk/index');
    }

    public function list()
    {
        $data['produk'] = $this->Model_produk->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_produk', $data);
        $this->load->view('admin/footer');
    }

    public function edit($Id)
    {
        $where = array('Id' => $Id);
        $data['produk'] = $this->Model_event->edit_produk($where, 'produk')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/edit_produk', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $Id = $this->input->post('Id');
        $nama_produk = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $sejarah = $this->input->post('sejarah');





        $data = array(
            'nama_produk' => $nama_produk,
            'deskripsi' => $deskripsi,
            'sejarah' => $sejarah





        );

        $where = array(
            'Id' => $Id
        );

        $this->Model_produk->update($where, $data, 'produk');
        redirect('Admin/Produk/list');
    }

    public function hapus($Id)
    {
        $where = array('Id' => $Id);
        $this->Model_produk->hapus($where, 'produk');
        redirect('Admin/Produk/list');
    }
}

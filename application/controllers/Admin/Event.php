<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
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

        $this->load->model("Model_event");
    }

    public function index()
    {
        $data['event'] = $this->Model_event->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/event', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_event()
    {
        $Id = $this->input->post('Id');
        $nama_event = $this->input->post('nama_event');
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
            'nama_event' => $nama_event,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal,
            'foto' => $foto

        );


        $this->Model_event->input_event($data, 'event');
        redirect('Admin/Event/index');
    }

    public function list()
    {
        $data['event'] = $this->Model_event->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/list_event', $data);
        $this->load->view('admin/footer');
    }

    public function edit($Id)
    {
        $where = array('Id' => $Id);
        $data['event'] = $this->Model_event->edit_event($where, 'event')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/edit_event', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $Id = $this->input->post('Id');
        $nama_event = $this->input->post('nama_event');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');





        $data = array(
            'nama_event' => $nama_event,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal




        );

        $where = array(
            'Id' => $Id
        );

        $this->Model_event->update($where, $data, 'event');
        redirect('Admin/Event/list');
    }

    public function hapus($Id)
    {
        $where = array('Id' => $Id);
        $this->Model_event->hapus($where, 'event');
        redirect('Admin/Event/list');
    }
}

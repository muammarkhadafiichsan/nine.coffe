<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_berita");
    }

    public function index()
    {
        $data['berita'] = $this->Model_berita->tampil_data()->result();
        $this->load->view('templates/header8');
        $this->load->view('templates/header');
        
        $this->load->view('templates/navbar');
        $this->load->view('menu/berita', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer8');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_produk");
    }

    public function index()
    {
        $data['produk'] = $this->Model_produk->tampil_data()->result();
        $this->load->view('templates/header1');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/produk', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer1');
    }
}

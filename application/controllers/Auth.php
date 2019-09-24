<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/body');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
    }

    public function menu_produk()
    {
        $this->load->view('templates/header');
        $this->load->view('menu/produk');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
    }
}

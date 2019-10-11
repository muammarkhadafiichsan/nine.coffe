<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Berita extends CI_Controller
{

    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/berita');
        $this->load->view('templates/footer');
    }
}

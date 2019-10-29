<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Body extends CI_Controller
{


    public function index()
    {

        $this->load->view('templates/header');
        $this->load->view('templates/header5');
        $this->load->view('templates/navbar');
        $this->load->view('templates/body');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer5');
    }
}

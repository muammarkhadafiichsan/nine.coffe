<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Body extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();



        $this->load->model("Model_awards");
    }

    public function index()
    {

        $data['awards'] = $this->Model_awards->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/header5');
        $this->load->view('templates/navbar');
        $this->load->view('templates/body', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer5');
    }
}

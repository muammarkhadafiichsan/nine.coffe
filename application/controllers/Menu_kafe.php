<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Kafe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_barista");
    }
    public function index()
    {
        $data['barista'] = $this->Model_barista->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/kafe', $data);
        $this->load->view('templates/footer');
    }
}

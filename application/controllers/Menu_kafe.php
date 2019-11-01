<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Kafe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model(array('Model_barista', 'Model_kafe'));
    }
    public function index()
    {
        $data['barista'] = $this->Model_barista->tampil_data()->result();
        $bar['kafe'] = $this->Model_kafe->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/kafe', $data, $bar);
        $this->load->view('templates/footer');
    }
}

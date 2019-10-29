<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_event");
    }
    public function index()
    {
        $data['event'] = $this->Model_event->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/header7');
        $this->load->view('templates/navbar');
        $this->load->view('menu/event', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer7');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_triktips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_tips_trik");
    }
    public function index()
    {
        $data['tips_trik'] = $this->Model_tips_trik->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/header7');
        $this->load->view('templates/navbar');
        $this->load->view('menu/triktips', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/footer7');
    }
    public function tips_trik($Id)

    {

        $data['tips_trik'] = $this->Model_tips_trik->detail_tips_trik($Id);
        $this->load->view('templates/header');
        $this->load->view('templates/header8');
        $this->load->view('templates/navbar');
        $this->load->view('tampilan/view_tips_trik', $data);
        $this->load->view('templates/footer8');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer5');
    }
}

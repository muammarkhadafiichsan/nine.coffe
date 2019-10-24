<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awards extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->model("Model_profile");
    }


    public function index()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/awards');
        $this->load->view('admin/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A extends CI_Controller
{


    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/awards');
        $this->load->view('admin/footer');
    }
}

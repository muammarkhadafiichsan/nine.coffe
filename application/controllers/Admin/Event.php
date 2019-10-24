<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{


    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('Input/event');
        $this->load->view('admin/footer');
    }
}

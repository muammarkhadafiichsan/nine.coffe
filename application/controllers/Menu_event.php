<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_event extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/header8');
        $this->load->view('templates/navbar');
        $this->load->view('menu/event');
        $this->load->view('templates/footer');
    	$this->load->view('templates/footer8');
    }
}

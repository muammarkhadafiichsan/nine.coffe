<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Kafe extends CI_Controller
{

    public function index()
    {

    	$this->load->view('templates/header4');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/kafe');
        $this->load->view('templates/footer');
        $this->load->view('templates/footer4');
    }
}

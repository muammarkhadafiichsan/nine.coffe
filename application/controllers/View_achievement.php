<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View_achievement extends CI_Controller
{


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/body');
        $this->load->view('templates/footer');
    }
}

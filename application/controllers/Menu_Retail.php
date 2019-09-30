<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Retail extends CI_Controller
{

    public function index()
    {
    	        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/retail');
        $this->load->view('templates/footer');
        
       
    }
}

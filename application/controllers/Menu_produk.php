<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_produk extends CI_Controller
{

    public function index()
    {
    	$this->load->view('templates/header1');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('menu/produk');
        $this->load->view('templates/footer1');
        $this->load->view('templates/footer');
        
    }
}

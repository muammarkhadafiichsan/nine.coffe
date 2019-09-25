<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function kirim()
{
	$d = $_POST;
	$data = $this->MLogin->view($d['username'], $d['password']);
	if ($data) {
			$_SESSION['level'] = $data[0]['level'];
			$_SESSION['nama'] = $data[0]['nama'];
			$_SESSION['id_pegawai'] = $data[0]['id_pegawai'];
		if ($data[0]['level']  == "admin") {
			redirect("login/adminku");
		}else{
			redirect("welcome/user");
		}	
	}else{
		echo "<script>alert('Username dan passwrod salah');window.history.back(-1)</script>";
	}


}
public function adminku()
{		$hasil = $this->db->query("SELECT *, SUM(total) AS total FROM padi")->result_array();
		$hasil1 = $this->db->query("SELECT *, SUM(total) AS total_kopi FROM kopi")->result_array();
		$data = $this->MLogin->users();
		$this->load->view('template_admin', ['hitung' => $data, 'hasil' => $hasil, 'kopi' => $hasil1]);
		$this->load->view('template_statistika');
		$this->load->view('footer_admin');		
}


}
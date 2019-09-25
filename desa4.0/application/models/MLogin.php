<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

public function view($username,$password)
{
	$data = $this->db->query("SELECT login.id_pegawai, login.username, login.password, login.level, pegawai.nama FROM login JOIN pegawai ON pegawai.id_pegawai = login.id_pegawai WHERE login.username='$username' AND login.password='$password'");
	return $data->result_array();
}

public function users()
{
	$data = $this->db->query("SELECT * FROM login");
	return $data->result_array();
}

}
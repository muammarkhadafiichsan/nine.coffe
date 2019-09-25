<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_padi extends CI_Model {

	public function save()
	{
		$d = $_POST;
		$data = $this->db->query("INSERT INTO padi SET kecamatan='$d[kecamatan]',  jumlah_tanam1='$d[jumlah_tanam1]', padi_hibrida='$d[padi_hibrida]', jumlah_tanam2='$d[jumlah_tanam2]' ,padi_inbrida='$d[padi_inbrida]', total='$d[total]' , kerusakan='$d[kerusakan]'");		

				redirect("welcome/padi_admin");
	}

	public function padinya($col = '*', $j = '', $w = '')
	{
		$data=$this->db->query("SELECT $col FROM padi $j $w order by id_padi asc");
		return $data->result_array();
	}
	public function padi_admin()
	{
		$data=$this->db->query("SELECT * FROM padi order by id_padi asc");
		return $data->result_array();
	}

	public function update_padi()
	{
		$d = $_POST;
		$this->db->query("UPDATE padi SET kecamatan='$d[kecamatan]',jumlah_tanam1='$d[jumlah_tanam1]', padi_hibrida='$d[padi_hibrida]', jumlah_tanam2='$d[jumlah_tanam2]' ,padi_inbrida='$d[padi_inbrida]', total='$d[total]' , kerusakan='$d[kerusakan]' WHERE id_padi='$d[id_padi]'");		

		redirect("welcome/padiku");	
	}

	public function hapus_padi($id_padi)
	{
		$this->db->query("DELETE FROM padi where id_padi='$id_padi'");
		redirect("welcome/padiku");
	}
	public function save_kopi()
	{
		$d = $_POST;
		$data = $this->db->query("INSERT INTO kopi SET kecamatan='$d[kecamatan]',luas_area1='$d[luas_area1]',kopi_arabika='$d[kopi_arabika]',tr1='$d[tr1]',luas_area2='$d[luas_area2]',kopi_robusta='$d[kopi_robusta]',tr2='$d[tr2]', total='$d[total]'");		

				redirect("welcome/kopi_user");
	}
	public function kopiku()
	{
		$data=$this->db->query("select * from kopi order by id_kopi asc");
		return $data->result_array();
	}
	public function kopi_user()
	{
		$data=$this->db->query("select * from kopi order by id_kopi asc");
		return $data->result_array();
	}
	public function hapus_kopi($id)
	{
		$this->db->query("DELETE FROM kopi where id='$id'");
		redirect("welcome/kopiku");
	}
	public function save_akun()
	{

		$d = $_POST;

		$data = $this->db->query("INSERT INTO login SET id_pegawai='$d[id_pegawai]', kecamatan='$d[kecamatan]',username='$d[username]', password='$d[password]',level='$d[level]'");		

				redirect("welcome/loginku");
	}
	public function loginku()
	{
		$data=$this->db->query("SELECT * FROM login order by id asc");
		return $data->result_array();
	}
	public function hapus_login($id)
	{
		$this->db->query("DELETE FROM login where id='$id'");
		redirect("welcome/loginku");
	}
	public function save_artikel()
	{
		$tmp_name = $_FILES['foto']['tmp_name'];
		$nama_gambar = $_FILES['foto']['name'];

		$d = $_POST;

		move_uploaded_file($tmp_name, FCPATH."assets/".$nama_gambar);

		$data = $this->db->query("INSERT INTO artikel SET judul='$d[judul]', nama_pengirim='$d[nama_pengirim]',tanggal='$d[tanggal]', foto='$nama_gambar',deskripsi='$d[deskripsi]'");		

				redirect("welcome/artikelku");
	}
	public function getKecamatan($id)
	{
		$sql = $this->db->query("select pegawai.kecamatan from login join pegawai on login.id_pegawai = pegawai.id_pegawai where login.id_pegawai = '$id' ");
		return $sql->result_array();
	}
	public function artikelku($col = '*', $j = '', $w='')
	{
		$data=$this->db->query("SELECT $col FROM artikel $j $w");
		return $data->result_array();
	}
	public function hapus_artikel($id)
	{
		$this->db->query("DELETE FROM artikel where id='$id'");
		redirect("welcome/artikelku");
	}
	public function artikel_user()
	{
		$data=$this->db->query("SELECT * FROM artikel order by id asc");
		return $data->result_array();
	}
	public function search_artikel($key)
	{
		$data=$this->db->query("SELECT * FROM artikel where judul like '%$key%' order by id desc ");
		return $data->result_array();
	}
	public function update_artikel()
	{
		$tmp_name = $_FILES['foto']['tmp_name'];
		$nama_gambar = $_FILES['foto']['name'];

		$d = $_POST;

		if ($nama_gambar != NULL) {
			move_uploaded_file($tmp_name, FCPATH."assets/".$nama_gambar);
			$this->db->query("UPDATE artikel SET judul='$d[judul]', nama_pengirim='$d[nama_pengirim]',tanggal='$d[tanggal]', foto='$nama_gambar',deskripsi='$d[deskripsi]' WHERE id='$d[id]'" );		
		}else{
			$this->db->query("UPDATE artikel SET judul='$d[judul]', nama_pengirim='$d[nama_pengirim]',tanggal='$d[tanggal]', deskripsi='$d[deskripsi]' WHERE id='$d[id]'" );		
		}

		redirect("welcome/artikelku");	
	}

public function save_pegawai()
	{
		$tmp_name = $_FILES['foto']['tmp_name'];
		$nama_gambar = $_FILES['foto']['name'];

		$d = $_POST;

		move_uploaded_file($tmp_name, FCPATH."assets/".$nama_gambar);
		$data = $this->db->query("INSERT INTO pegawai SET id_pegawai='$d[id_pegawai]', nama='$d[nama]', jenis_kelamin='$d[jenis_kelamin]', tanggal_lahir='$d[tanggal_lahir]', telepon='$d[telepon]', alamat='$d[alamat]', kecamatan='$d[kecamatan]', foto='$nama_gambar'");		

				redirect("welcome/pegawaiku");
	}
	public function pegawaiku($col = '*', $j = '', $w ='')
	{
		$data=$this->db->query("select $col from pegawai $j $w");
		return $data->result_array();
	}
	public function pegawai_user()
	{
		$data=$this->db->query("SELECT * FROM pegawai order by id_pegawai asc");
		return $data->result_array();
	}
	public function update_pegawai()
	{
		$d = $_POST;
		$this->db->query("UPDATE pegawai SET id_pegawai='$d[id_pegawai]', nama='$d[nama]', jenis_kelamin='$d[jenis_kelamin]', tanggal_lahir='$d[tanggal_lahir]', telepon='$d[telepon]', alamat='$d[alamat]' WHERE id_pegawai='$d[id_pegawai]'");

		redirect("welcome/pegawaiku");	
	}

	public function hapus_pegawai($id_pegawai)
	{
		$this->db->query("DELETE FROM pegawai where id_pegawai='$id_pegawai'");
		redirect("welcome/pegawaiku");
	}
	public function save_kegiatan()
	{
		$tmp_name = $_FILES['foto']['tmp_name'];
		$nama_gambar = $_FILES['foto']['name'];

		$d = $_POST;

		move_uploaded_file($tmp_name, FCPATH."assets/".$nama_gambar);

		$data = $this->db->query("INSERT INTO kegiatan SET judul='$d[judul]',tanggal='$d[tanggal]', foto='$nama_gambar',deskripsi='$d[deskripsi]'");		

				redirect("welcome/kegiatanku");
	}
	public function hapus_kegiatan($id)
	{
		$this->db->query("DELETE FROM kegiatan where id='$id'");
		redirect("welcome/kegiatanku");
	}
	public function kegiatanku($col = '*', $j = '', $w='')
	{
		$data=$this->db->query("SELECT $col FROM kegiatan $j $w");
		return $data->result_array();
	}
	
	public function kegiatan_user()
	{
		$data=$this->db->query("SELECT * FROM kegiatan");
		return $data->result_array();
	}
	public function save_galeri()
	{
		$tmp_name 		= $_FILES['foto1']['tmp_name'];
		$nama_gambar 	= $_FILES['foto1']['name'];
		$tmp_name 		= $_FILES['foto2']['tmp_name'];
		$nama_gambar2 	= $_FILES['foto2']['name'];

		$tmp_name 		= $_FILES['foto3']['tmp_name'];
		$nama_gambar3 	= $_FILES['foto3']['name'];

		$tmp_name 		= $_FILES['foto4']['tmp_name'];
		$nama_gambar4 	= $_FILES['foto4']['name'];

		$d = $_POST;

		move_uploaded_file($tmp_name, FCPATH."assets/".$nama_gambar);

		$data = $this->db->query("INSERT INTO galeri SET foto1='$nama_gambar',foto2='$nama_gambar2',foto3='$nama_gambar3',foto4='$nama_gambar4'");		

				redirect("welcome/galeriku");
	}
	public function view_galeri()
	{
		$data=$this->db->query("SELECT * FROM galeri");
		return $data->result_array();
	}

}

?>
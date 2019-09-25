<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('beranda');
	}
	public function arikel_add()
	{
		$this->Crud_padi->save_artikel();
	}
	public function berita()
	{
		if (isset($_GET['key'])) {
			$i = $this->Crud_padi->search_artikel($_GET['key']);
		} else {
			$i = $this->Crud_padi->artikel_user();
		}
		$this->load->view('view_berita', ['data' => $i]);
	}
	public function login()
	{


		$this->load->view('form_login');
		$this->load->view('menu');
	}
	public function user()
	{
		$this->load->view('template');

		$this->load->view('footer');
	}
	public function index_1()
	{
		$this->load->view('template');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function index1()
	{
		$this->load->view('template');
	}
	public function padi()
	{
		$this->Crud_padi->save();
	}
	public function padiku()
	{
		$i = $this->Crud_padi->padinya();
		$this->load->view('template_admin');
		$this->load->view('view_padi', ['data' => $i]);
		$this->load->view('footer_admin');
	}

	public function padi_admin()
	{
		$i = $this->Crud_padi->padi_admin();
		$this->load->view('template');
		$this->load->view('view_padi_admin', ['data' => $i]);
		$this->load->view('footer');
	}

	public function edit_padi($id_padi)
	{
		$data = $this->Crud_padi->padinya('*', '', "WHERE id_padis='$id_padi'")[0];
		$this->load->view('template_admin');
		$this->load->view('form_edit_padi', ['data' => $data]);
		$this->load->view('footer_admin');
	}

	public function update_padi()
	{
		$this->Crud_padi->update_padi();
	}

	public function hapusId($id_padi)
	{
		$this->Crud_padi->hapus_padi($id_padi);
	}
	public function form_kopi()
	{
		$this->load->view('template');
		$this->load->view('form_kopi');
		$this->load->view('footer');
	}

	public function kopi()
	{
		$this->Crud_padi->save_kopi();
	}

	public function kopiku()
	{
		$i = $this->Crud_padi->kopiku();
		$this->load->view('template_admin');
		$this->load->view('view_kopi', ['data' => $i]);
		$this->load->view('footer_admin');
	}
	public function kopi_user()
	{
		$i = $this->Crud_padi->kopi_user();
		$this->load->view('template');
		$this->load->view('kopi_admin', ['data' => $i]);
		$this->load->view('footer');
	}
	public function hapusId_kopi($id)
	{
		$this->Crud_padi->hapus_kopi($id);
	}
	public function form_add_login()
	{
		$data['pegawai'] = $this->Crud_padi->pegawaiku();

		$this->load->view('template_admin');
		$this->load->view('form_add_login', $data);
		$this->load->view('footer_admin');
	}

	public function add_login()
	{
		$this->Crud_padi->save_akun();
	}

	public function loginku()
	{
		$i = $this->Crud_padi->loginku();
		$this->load->view('template_admin');
		$this->load->view('view_login', ['data' => $i]);
		$this->load->view('footer_admin');
	}
	public function hapus_login($id)
	{
		$this->Crud_padi->hapus_login($id);
	}

	public function form_artikel()
	{
		$this->load->view('template_admin');
		$this->load->view('form_artikel');
		$this->load->view('footer_admin');
	}
	public function add_artikel()
	{
		$this->Crud_padi->save_artikel();
	}

	public function artikelku()
	{
		$i = $this->Crud_padi->artikelku('*', '', "ORDER BY id ASC");
		$this->load->view('template_admin');
		$this->load->view('view_artikel', ['data' => $i]);
		$this->load->view('footer_admin');
	}
	public function hapus_artikel($id)
	{
		$this->Crud_padi->hapus_artikel($id);
	}
	public function edit_artikel($id)
	{
		$data = $this->Crud_padi->artikelku('*', '', "WHERE id='$id'")[0];
		$this->load->view('template_admin');
		$this->load->view('form_edit_artikel', ['data' => $data]);
		$this->load->view('footer_admin');
	}
	public function update_artikel()
	{
		$this->Crud_padi->update_artikel();
	}

	public function form_pegawai()
	{
		$this->load->view('template_admin');
		$this->load->view('form_pegawai');
		$this->load->view('footer_admin');
	}

	public function add_pegawai()
	{
		$this->Crud_padi->save_pegawai();
	}

	public function pegawaiku()
	{
		$i = $this->Crud_padi->pegawai_user();
		$this->load->view('template_admin');
		$this->load->view('view_user', ['data' => $i]);
		$this->load->view('footer_admin');
	}
	public function pegawaiku1()
	{
		$i = $this->Crud_padi->pegawai_user();
		$this->load->view('template_admin');
		$this->load->view('view_pegawai', ['data' => $i]);
		$this->load->view('footer_admin');
	}

	public function edit_pegawai($id_pegawai)
	{
		$data = $this->Crud_padi->pegawaiku('*', '', "WHERE id_pegawai='$id_pegawai'")[0];
		$this->load->view('template_admin');
		$this->load->view('form_edit_pegawai', ['data' => $data]);
		$this->load->view('footer_admin');
	}
	public function update_pegawai()
	{
		$this->Crud_padi->update_pegawai();
	}
	public function hapus_pegawai($id)
	{
		$this->Crud_padi->hapus_pegawai($id);
	}
	public function view_profil($id_pegawai)
	{
		$this->load->view('template_admin');
		$data = $this->Crud_padi->pegawaiku('*', '', "WHERE id_pegawai='$id_pegawai'")[0];

		$this->load->view('view_profil', ['data' => $data]);
		$this->load->view('footer_admin');
	}
	public function halaman_berita1($id)
	{
		$data = $this->Crud_padi->artikelku('*', '', "WHERE id='$id'")[0];
		$this->load->view('halaman_berita1', ['data' => $data]);
	}
	public function export_kopi()
	{
		$i['data'] = $this->Crud_padi->kopiku();

		$this->load->view('export_kopi', $i);
	}
	public function export_padi()
	{
		$i['data'] = $this->Crud_padi->padinya();

		$this->load->view('export_padi', $i);
	}
	public function form_kegiatan()
	{
		$this->load->view('template_admin');
		$this->load->view('form_kegiatan');
		$this->load->view('footer_admin');
	}
	public function add_kegiatan()
	{
		$this->Crud_padi->save_kegiatan();
	}
	public function kegiatanku()
	{
		$i = $this->Crud_padi->kegiatanku('*', '', "ORDER BY id ASC");
		$this->load->view('template_admin');
		$this->load->view('view_kegiatan', ['data' => $i]);
		$this->load->view('footer_admin');
	}
	public function halaman_program()
	{
		$i = $this->Crud_padi->kegiatan_user();

		$this->load->view('halaman_program', ['data' => $i]);
	}
	public function hapus_kegiatan($id)
	{
		$this->Crud_padi->hapus_kegiatan($id);
	}
	public function kegiatan()
	{
		$this->load->view('halaman_kegiatan');
	}
	public function profil()
	{
		$this->load->view('profil');
	}
	public function tentang()
	{
		$this->load->view('view_tentang');
	}
	public function tips()
	{
		$this->load->view('tips');
	}

	public function registrasi()

	{
		$this->load->view('registrasi');
	}

	public function usaha_produk()
	{
		
		$this->load->view('halaman_usaha');
	}

}

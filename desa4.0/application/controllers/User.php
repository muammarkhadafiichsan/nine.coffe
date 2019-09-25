<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function input()
	{

		$data['title'] = 'Input Artikel';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('product/new_form', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_artikel()
	{
		$data = [

			'product_id' => $this->input->post('product_id'),
			'name' => $this->input->post('name'),
			'image' => $this->_uploadImage(),
			'description' => $this->input->post('description'),
		];

		$this->Product_model->tambah_data($data);
		$this->session->set_flashdata('pesantambah', '<div class="alert alert-success" role="alert">
                Pesanan ditambahkan
              </div>');
		redirect('user/input');
	}
	private function _uploadImage()
	{
		$config['upload_path']          = './assets/img/profile';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $_FILES['image']['name'];
		$config['overwrite']            = true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}
	public function list()
	{

		$data['title'] = 'list';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['list'] = $this->Product_model->list()->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('product/list', $data);
		$this->load->view('templates/footer');
	}

	public function edit_artikel($product_id)
	{
		$data['title'] = 'edit artikel';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['list'] = $this->db->get_where('products', ['product_id' => $product_id])->row_array();



		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('product/edit_form', $data);
			$this->load->view('templates/footer');
		} else {

			$product_id = $this->input->post('product_id');
			$name = $this->input->post('name');
			$image = $this->input->post('image');
			$description = $this->input->post('description');






			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Success
            </div>');
			redirect('user/list');
		}
	}

	public function edit_action()
	{
		$product_id = $this->uri->segment(3);
		$product_id = $this->input->post('product_id');
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$upload_image = $_FILES['image']['name'];

		if ($upload_image) {
			$config['upload_path'] = './assets/img/profile/';
			$config['allowed_types'] = 'gif|jpg|png|JPG';
			$config['max_size'] = '9048';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {

				$old_image = $product_id;
				if ($old_image != 'default.jpg') {
					unlink(FCPATH . '/assets/img/profile/' . $old_image);
				}
				$image = $this->upload->data('file_name');
				$this->db->set('image', $image);
			} else {
				echo $this->upload->display_errors();
			}
		}


		$this->db->set('name', $name);

		$this->db->set('description', $description);
		$this->db->where('product_id', $product_id);
		$this->db->update('products');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Success
            </div>');
		redirect('user/list');
	}

	public function delete($product_id)
	{

		if ($product_id) {
			$this->Product_model->delete($product_id);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect('user/list');
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect('user/list');
		}
	}
}

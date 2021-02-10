<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['judul'] = "Dashboard";
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}

	public function dataUser()
	{
		$data['judul'] = "Data User";
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/data_user');
		$this->load->view('template/footer');
	}

	public function tambahUser()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password-1', 'Password', 'required|min_length[8]|matches[password-2]');
		$this->form_validation->set_rules('password-2', 'Password', 'required|min_length[8]|matches[password-1]');

		if ($this->form_validation->run() == false) {
			$data['judul'] = "Tambah User";
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('admin/tambah_data_user');
			$this->load->view('template/footer');
		} else {
			$this->load->model('Model_admin');
			$this->Model_admin->tambahUser();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >User Berhasil ditambah</div>');
			redirect('Dashboard');
		}
	}
	public function data_alumni()
	{
		$data['judul'] = "data_alumni";
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/data_alumni', $data);
		$this->load->view('template/footer');
	}
}

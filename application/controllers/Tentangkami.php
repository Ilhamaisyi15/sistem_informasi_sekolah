<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tentang_kami extends CI_Controller
{

	public function sejarah()
	{
		$data['judul'] = "Sejarah";

		$this->load->model('Model_sejarah');
		$data['datasiswa'] = $this->Model_sejarah->sejarah();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/sejarah', $data);
		$this->load->view('template/footer');
	}
	public function struktur()
	{
		$data['judul'] = "struktur";

		$this->load->model('Model_struktur');
		$data['datasiswa'] = $this->Model_struktur->struktur();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/struktur', $data);
		$this->load->view('template/footer');
	}
}

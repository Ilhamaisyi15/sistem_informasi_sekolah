<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('Auth');
		}
	}

	public function index()
	{
		$data['judul'] = "Dashboard";
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}

	public function user()
	{
		$this->load->model('Model_admin');
		$data['data_user'] =  $this->Model_admin->dataUser();
		$data['getUser'] = $this->Model_admin->getUser();

		$this->load->view('template/header',  $data);
		$this->load->view('template/sidebar',  $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/data_user', $data);
		$this->load->view('template/footer',  $data);
	}

	public function tambahDataUser()
	{

		$data['getUser'] = $this->Model_admin->getUser();

		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/tambah_data_user');
			$this->load->view('template/footer');
		} else {
			$this->load->model('Model_admin');
			$this->Model_admin->tambahDataUser();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>User Berhasil ditambah</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
			redirect('Dashboard/user');
		}
	}

	public function hapusDataUser($id)
	{
		$this->load->model('Model_admin');
		$this->Model_admin->hapusDataUser($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>User Berhasil dihapus</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
		redirect('Dashboard/user');
	}
	public function edit_user($id_user)
	{
		if (isset($_POST['submit'])) {

			$username = htmlspecialchars($this->input->post('username'));
			$email = $this->input->post('email');
			$password_1 = $this->input->post('password-1');
			$password_2 = $this->input->post('password-2');

			$data = [
				'username' => $username,
				'email' => $email,
				'password-1'  => $password_1,
				'password-2'  => $password_2
			];

			$this->db->where('id_user', $this->input->post('id_user'));
			$this->db->update('tb_user', $data);
			// $this->session->set_flashdata()
			redirect('Dashboard/user');
		} else {
			$data['judul'] = "Edit Data User";
			$this->load->model('Model_admin');

			$data['getuser'] = $this->Model_admin->getiduser($id_user);

			$data['judul'] = "Edit User";
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar');
			$this->load->view('template/sidebar');
			$this->load->view('admin/edit_user');
			$this->load->view('template/footer');
		}
	}

	public function sejarah()
	{
		$this->load->model('Model_sejarah');
		$sejarah = $this->Model_sejarah->sejarah();
		$data = [
			'judul' => "Sejarah",
			'sejarah' => $sejarah
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/sejarah', $data);
		$this->load->view('template/footer');
	}
	public function edit_sejarah($id_sejarah)
	{
		$sejarah = $this->Model_sejarah->getidsejarah($id_sejarah);
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data = [
				'judul' => "Edit Sejarah",
				'sejarah' => $sejarah
			];
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar',);
			$this->load->view('template/sidebar',);
			$this->load->view('tentangkami/edit_sejarah');
			$this->load->view('template/footer',);
		} else {
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');
			$data = [
				'isi' => $isi,
				'penulis' => $penulis
			];
			$this->db->set('penulis', $penulis);
			$this->db->set('isi', $isi);
			$this->db->where('id_sejarah', 1);
			$this->db->update('tb_sejarah');
			redirect('Dashboard/sejarah');
		}




		// if (isset($_POST['submit'])) {

		// 	$tema = $this->input->post('tema');
		// 	$isi = $this->input->post('isi');
		// 	$penulis = $this->input->post('penulis');

		// 	$data = [
		// 		'tema' => $tema,
		// 		'isi' => $isi,
		// 		'penulis'  => $penulis

		// 	];

		// 	$this->db->where('id_sejarah', $this->input->post('id_sejarah'));
		// 	$this->db->update('tb_sejarah', $data);
		// 	// $this->session->set_flashdata()
		// 	redirect('Dashboard/sejarah');
		// } else {
		// 	$data['judul'] = "Edit sejarah";
		// 	$this->load->model('Model_sejarah');

		// 	$data['getsejarah'] = $this->Model_sejarah->getidsejarah($id_sejarah);

		// 	$this->load->view('template/header', $data);
		// 	$this->load->view('template/topbar',);
		// 	$this->load->view('template/sidebar',);
		// 	$this->load->view('Dashboard/edit_sejarah', $data);
		// 	$this->load->view('template/footer',);
		// }
	}
	public function visimisi()
	{
		$this->load->model('Model_sejarah');
		$sejarah = $this->Model_sejarah->visimisi();
		$data = [
			'judul' => "Visi Misi",
			'visimisi' => $sejarah
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/visimisi', $data);
		$this->load->view('template/footer');
	}
	public function edit_visimisi($id_visimisi)
	{
		$sejarah = $this->Model_sejarah->getvisimisi($id_visimisi);
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data = [
				'judul' => "Edit Visi Misi",
				'visimisi' => $sejarah
			];
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar',);
			$this->load->view('template/sidebar',);
			$this->load->view('tentangkami/edit_visimisi', $data);
			$this->load->view('template/footer',);
		} else {
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');
			$this->db->set('penulis', $penulis);
			$this->db->set('isi', $isi);
			$this->db->where('id_visimisi', 1);
			$this->db->update('tb_visimisi');
			redirect('Dashboard/visimisi');
		}
	}
	public function tatatertib()
	{
		$this->load->model('Model_sejarah');
		$sejarah = $this->Model_sejarah->tatatertib();
		$data = [
			'judul' => "Tata Tertib",
			'tatatertib' => $sejarah
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/tatatertib', $data);
		$this->load->view('template/footer');
	}
	public function edit_tatatertib($id_tatatertib)
	{
		$sejarah = $this->Model_sejarah->gettatatertib($id_tatatertib);
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data = [
				'judul' => "Edit Tata Tertib",
				'tatatertib' => $sejarah
			];
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar',);
			$this->load->view('template/sidebar',);
			$this->load->view('tentangkami/edit_tatatertib', $data);
			$this->load->view('template/footer',);
		} else {
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');
			$this->db->set('penulis', $penulis);
			$this->db->set('isi', $isi);
			$this->db->where('id_tatatertib', 1);
			$this->db->update('tb_tatatertib');
			redirect('Dashboard/tatatertib');
		}
	}

	public function prestasi()
	{
		$this->load->model('Model_sejarah');
		$sejarah = $this->Model_sejarah->prestasi();
		$data = [
			'judul' => "Prestasi",
			'prestasi' => $sejarah
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/prestasi', $data);
		$this->load->view('template/footer');
	}
	public function edit_prestasi($id_prestasi)
	{
		$sejarah = $this->Model_sejarah->getprestasi($id_prestasi);
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data = [
				'judul' => "prestasi",
				'prestasi' => $sejarah
			];
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar',);
			$this->load->view('template/sidebar',);
			$this->load->view('tentangkami/edit_prestasi', $data);
			$this->load->view('template/footer',);
		} else {
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');

			$this->db->set('penulis', $penulis);
			$this->db->set('isi', $isi);
			$this->db->where('id_prestasi', 1);
			$this->db->update('tb_prestasi');
			redirect('Dashboard/prestasi');
		}
	}

	public function fasilitas()
	{
		$this->load->model('Model_sejarah');
		$sejarah = $this->Model_sejarah->fasilitas();
		$data = [
			'judul' => "Fasilitas",
			'fasilitas' => $sejarah
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/fasilitas', $data);
		$this->load->view('template/footer');
	}
	public function edit_fasilitas($id_fasilitas)
	{
		$sejarah = $this->Model_sejarah->getfasilitas($id_fasilitas);
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data = [
				'judul' => "fasilitas",
				'fasilitas' => $sejarah
			];
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar',);
			$this->load->view('template/sidebar',);
			$this->load->view('tentangkami/edit_fasilitas', $data);
			$this->load->view('template/footer',);
		} else {
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');

			$this->db->set('penulis', $penulis);
			$this->db->set('isi', $isi);
			$this->db->where('id_fasilitas', 1);
			$this->db->update('tb_fasilitas');
			redirect('Dashboard/fasilitas');
		}
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function data_siswa()
	{
		$data['judul'] = "Data Siswa";

		$this->load->model('Model_siswa');
		$data['datasiswa'] = $this->Model_siswa->datasiswa();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/datasiswa', $data);
		$this->load->view('template/footer');
	}

	public function tambahdatasiswa()
	{
		$data['judul'] = "Tambah Data siswa";

		$this->form_validation->set_rules('nis', 'nis', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('ttl', 'ttl', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('jk', 'jk', 'required');
		$this->form_validation->set_rules('kelas', 'kelas', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/tambahdatasiswa', $data);
			$this->load->view('template/footer', $data);
		} else {

			$nis = $this->input->post('nis');
			$nama = htmlspecialchars($this->input->post('nama'));
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post('alamat');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');

			$data = [
				'nis' => $nis,
				'nama' => $nama,
				'ttl'  => $ttl,
				'alamat'  => $alamat,
				'jk'  => $jk,
				'kelas'  => $kelas
			];

			$this->db->insert('tb_siswa', $data);
			redirect('Data/data_siswa');

			// $this->Model_siswa->tambahdatasiswa();
			// redirect('Data/data_siswa')
		}
	}

	public function edit_datasiswa($id_siswa)
	{
		if (isset($_POST['submit'])) {

			$nis = $this->input->post('nis');
			$nama = htmlspecialchars($this->input->post('nama'));
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post('alamat');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');

			$data = [
				'nis' => $nis,
				'nama' => $nama,
				'ttl'  => $ttl,
				'alamat'  => $alamat,
				'jk'  => $jk,
				'kelas'  => $kelas
			];

			$this->db->where('id_siswa', $this->input->post('id_siswa'));
			$this->db->update('tb_siswa', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_siswa');
		} else {
			$data['judul'] = "Edit Data Siswa";
			$this->load->model('Model_siswa');

			$data['getsiswa'] = $this->Model_siswa->getidsiswa($id_siswa);

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/edit_datasiswa', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapus_datasiswa($id_siswa)
	{
		$this->db->delete('tb_siswa', ['id_siswa' => $id_siswa]);
		redirect('Data/data_siswa');
	}


	public function data_guru()
	{
		$data['judul'] = "Data Guru";

		$this->load->model('Model_guru');
		$data['dataguru'] = $this->Model_guru->dataguru();


		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/dataguru');
		$this->load->view('template/footer');
	}
	public function tambahdataguru()
	{

		$data['judul'] = "Tambah Data guru";

		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
		$this->form_validation->set_rules('mapel', 'mapel', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/tambahdataguru', $data);
			$this->load->view('template/footer', $data);
		} else {

			$nip = $this->input->post('nip');
			$nama = htmlspecialchars($this->input->post('nama'));
			$alamat = $this->input->post('alamat');
			$pendidikan = $this->input->post('pendidikan');
			$mapel = $this->input->post('mapel');

			// Uploag Gamabar
			$fotoGuru = $_FILES['foto_guru']['name'];

			if ($fotoGuru) {

				// Format Gambar
				$config['allowed_types'] = 'gif|jpg|png';
				// Ukuran Gambar Maksimal 5 MB
				$config['max_size']     = '5000';
				// Tujuan Upload Gmbar
				$config['upload_path'] = './asset/gambar/guru/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto_guru')) {
					$foto_baru = $this->upload->data('file_name');
				} else {
					echo $this->upload->display_errors();;
				}
			}

			if (empty($foto_baru)) $foto_baru = "default.jpg";

			$data = [
				'nip' => $nip,
				'nama' => $nama,
				'alamat'  => $alamat,
				'pendidikan'  => $pendidikan,
				'mapel'  => $mapel,
				'foto' => $foto_baru
			];

			$this->db->insert('tb_guru', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_guru');

			// $this->Model_guru->tambahdataguru();
			// redirect('Data/data_guru');


		}
	}

	public function edit_dataguru($id_guru)
	{
		if (isset($_POST['submit'])) {

			$nip = $this->input->post('nip');
			$nama = htmlspecialchars($this->input->post('nama'));
			$alamat = $this->input->post('alamat');
			$pendidikan = $this->input->post('pendidikan');
			$mapel = $this->input->post('mapel');

			// Uploag Gamabar
			$fotoGuru = $_FILES['foto_guru']['name'];

			if ($fotoGuru) {

				// Format Gambar
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				// Ukuran Gambar Maksimal 5 MB
				$config['max_size']     = '5000';
				// Tujuan Upload Gmbar
				$config['upload_path'] = './asset/gambar/guru/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto_guru')) {
					$foto_baru = $this->upload->data('file_name');
				} else {
					echo $this->upload->display_errors();;
				}
			}

			if (empty($foto_baru)) $foto_baru = "default.jpg";

			$data = [
				'nip' => $nip,
				'nama' => $nama,
				'alamat'  => $alamat,
				'pendidikan'  => $pendidikan,
				'mapel'  => $mapel,
				'foto'	=> $foto_baru
			];


			$this->db->where('id_guru', $this->input->post('id_guru'));
			$this->db->update('tb_guru', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_guru');
		} else {
			$data['judul'] = "Edit Data guru";
			$this->load->model('Model_guru');

			$data['getidguru'] = $this->Model_guru->getidguru($id_guru);
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/edit_dataguru', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapus_dataguru($id_guru)
	{
		$this->db->delete('tb_guru', ['id_guru' => $id_guru]);
		redirect('Data/data_guru');
	}

	public function data_alumni()
	{
		$data['judul'] = "Data Alumni";

		$this->load->model('Model_alumni');
		$data['data_alumni'] = $this->Model_alumni->data_alumni();


		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/data_alumni');
		$this->load->view('template/footer');
	}
	public function tambah_dataalumni()
	{

		$data['judul'] = "Tambah Data alumni";

		$this->form_validation->set_rules('nisn', 'nisn', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('th_lulus', 'th_lulus', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/tambah_dataalumni', $data);
			$this->load->view('template/footer', $data);
		} else {

			$nisn = $this->input->post('nisn');
			$nama = htmlspecialchars($this->input->post('nama'));
			$alamat = $this->input->post('alamat');
			$th_lulus = $this->input->post('th_lulus');

			$data = [
				'nisn' => $nisn,
				'nama' => $nama,
				'alamat'  => $alamat,
				'th_lulus'  => $th_lulus
			];

			$this->db->insert('tb_alumni', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_alumni');

			// $this->Model_guru->tambahdataguru();
			// redirect('Data/data_guru');


		}
	}

	public function edit_alumni($id_alumni)
	{
		if (isset($_POST['submit'])) {

			$nisn = $this->input->post('nisn');
			$nama = htmlspecialchars($this->input->post('nama'));
			$alamat = $this->input->post('alamat');
			$th_lulus = $this->input->post('th_lulus');

			$data = [
				'nisn' => $nisn,
				'nama' => $nama,
				'alamat'  => $alamat,
				'th_lulus'  => $th_lulus
			];

			$this->db->where('id_alumni', $this->input->post('id_alumni'));
			$this->db->update('tb_alumni', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_alumni');
		} else {
			$data['judul'] = "Edit Data alumni";
			$this->load->model('Model_alumni');

			$data['getidalumni'] = $this->Model_alumni->getidalumni($id_alumni);
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/edit_dataalumni', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapus_dataalumni($id_alumni)
	{
		$this->db->delete('tb_alumni', ['id_alumni' => $id_alumni]);
		redirect('Data/data_alumni');
	}
}

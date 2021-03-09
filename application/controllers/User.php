<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {

        $id_visi = "1";
        $data['visi'] = $this->db->get_where('tb_visimisi', ['id_visimisi' => $id_visi])->row_array();

        $this->load->view('user/index', $data);
    }

    public function sejarah()
    {
        $sejarah = $this->db->get_where('tb_sejarah', ['id_sejarah' => 1])->row_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Sejarah",
            'sejarah' => $sejarah
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/sejarah');
        $this->load->view('user/template/footer');
    }


    public function visimisi()
    {
        $visimisi = $this->db->get_where('tb_visimisi', ['id_visimisi' => 1])->row_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Visi Misi",
            'visimisi' => $visimisi
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/visimisi');
        $this->load->view('user/template/footer');
    }
    public function struktur()
    {
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Struktur Organisasi"
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/struktur');
        $this->load->view('user/template/footer');
    }
    public function fasilitas()
    {
        $fasilitas = $this->db->get_where('tb_fasilitas', ['id_fasilitas' => 1])->row_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | fasilitas",
            'fasilitas' => $fasilitas
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/fasilitas');
        $this->load->view('user/template/footer');
    }
    public function prestasi()
    {
        $prestasi = $this->db->get_where('tb_prestasi', ['id_prestasi' => 1])->row_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Prestasi",
            'prestasi' => $prestasi
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/prestasi');
        $this->load->view('user/template/footer');
    }

    public function tatatertib()
    {
        $tatatertib = $this->db->get_where('tb_tatatertib', ['id_tatatertib' => 1])->row_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Tata Tertib",
            'tatatertib' => $tatatertib
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/tatatertib');
        $this->load->view('user/template/footer');
    }


    // Menampilkan data guru dihalaman user
    public function dataGuruUser()
    {

        $dataGuru = $this->db->get('tb_guru')->result_array();

        $data = [
            'judul' => "SMP Pangeran Diponegoro | Data Guru",
            'data_guru' => $dataGuru
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/data_guru');
        $this->load->view('user/template/footer');
    }
    //menampilkan data alumni di halaman user
    public function dataAlumniUser()
    {
        $dataAlumni = $this->db->get('tb_alumni')->result_array();

        $data = [
            'judul' => "SMP Pangeran Diponegoro | Data Alumni",
            'data_alumni' => $dataAlumni
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/data_alumni');
        $this->load->view('user/template/footer');
    }
    public function dataSiswaUser()
    {
        $dataSiswa = $this->db->get('tb_siswa')->result_array();

        $data = [
            'judul' => "SMP Pangeran Diponegoro | Data Siswa",
            'data_siswa' => $dataSiswa
        ];
        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar', $data);
        $this->load->view('user//data_siswa', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function berita()
    {
        $berita = $this->db->get('tb_berita')->result_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Berita",
            'berita' => $berita
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/berita');
        $this->load->view('user/template/footer');
    }
    public function detail_berita_user($id_berita)
    {
        $berita = $this->Model_informasi->getidberita($id_berita);
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');
        $this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('foto', 'foto', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data = [
                'judul' => "Detail Berita",
                'berita' => $berita
            ];
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar',);
            $this->load->view('informasi/detail_berita_user', $data);
            $this->load->view('template/footer',);
        } else {
            $judul = $this->input->post('judul');
            $penulis = $this->input->post('penulis');
            $id = $this->input->post('id');
            $isi = $this->input->post('isi');
            $status = $this->input->post('status');
            $foto_baru = $this->input->post('foto');

            $this->db->set('judul', $judul);
            $this->db->set('penulis', $penulis);
            $this->db->set('isi', $isi);
            $this->db->set('status', $status);
            $this->db->set('foto', $foto_baru);
            $this->db->where('id_berita', $id);
            $this->db->update('tb_berita');
            redirect('Informasi/berita');
        }
    }

    public function ekskul()
    {
        $ekskul = $this->db->get_where('tb_ekskul', ['id_ekskul'])->row_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Ektrakulikuler",
            'ekskul' => $ekskul
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/ekskul');
        $this->load->view('user/template/footer');
    }

    public function ppdb()
    {
        $data['judul'] = 'PPDB';

        $this->load->view('user/template/footer', $data);
        $this->load->view('user/template/header');
        $this->load->view('user/template/navbar');
        $this->load->view('user/ppdb');
    }

    public function galeri()
    {
        $galeri = $this->db->get('tb_galeri')->result_array();
        $data = [
            'judul' => "SMP Pangeran Diponegoro | Galeri",
            'galeri' => $galeri
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/galeri');
        $this->load->view('user/template/footer');
    }
}

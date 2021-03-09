<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
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
        $data['judul'] = "Informasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('informasi/index');
        $this->load->view('template/footer');
    }
    public function berita()
    {
        $this->load->model('Model_informasi');
        $berita = $this->Model_informasi->berita();
        $data = [
            'judul' => "Berita",
            'berita' => $berita
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('informasi/berita');
        $this->load->view('template/footer');
    }

    public function edit_berita($id_berita)
    {
        $berita = $this->Model_informasi->getidberita($id_berita);
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');
        $this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data = [
                'judul' => "Edit Berita",
                'berita' => $berita,
                'penulis' => "penulis",
                'isi' => "isi",
                'isi' => "ringkas",
                'status' => "status"
            ];
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar',);
            $this->load->view('informasi/edit_berita', $data);
            $this->load->view('template/footer',);
        } else {
            $judul = $this->input->post('judul');
            $penulis = $this->input->post('penulis');
            $id = $this->input->post('id');
            $isi = $this->input->post('isi');
            $status = $this->input->post('status');

            $this->db->set('ringkas', $isi);
            $this->db->set('penulis', $judul);
            $this->db->set('penulis', $penulis);
            $this->db->set('isi', $isi);
            $this->db->set('status', $status);
            $this->db->where('id_berita', $id);
            $this->db->update('tb_berita');
            redirect('Informasi/berita');
        }
    }

    public function hapus_berita($id_berita)
    {
        $this->db->delete('tb_berita', ['id_berita' => $id_berita]);
        redirect('Informasi/berita');
    }

    public function tambah_berita()
    {

        $berita['judul'] = "Tambah Berita";
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');
        $this->form_validation->set_rules('penulis', 'penulis', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $berita);
            $this->load->view('template/topbar', $berita);
            $this->load->view('template/sidebar', $berita);
            $this->load->view('informasi/tambah_berita', $berita);
            $this->load->view('template/footer', $berita);
        } else {

            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $penulis = $this->input->post('penulis');
            $status = $this->input->post('status');

            // Uploag Gamabar
            $fotoBerita = $_FILES['foto_berita']['name'];
            if ($fotoBerita) {

                // Format Gambar
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // Ukuran Gambar Maksimal 5 MB
                $config['max_size']     = '5000';
                // Tujuan Upload Gmbar
                $config['upload_path'] = './asset/gambar/berita/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_berita')) {
                    $foto_baru = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();;
                }
            }

            if (empty($foto_baru)) $foto_baru = "default.jpeg";

            $berita = [
                'tanggal' => date('Y-m-d'),
                'judul' => $judul,
                'isi' => $isi,
                'ringkas' => $isi,
                'penulis'  => $penulis,
                'status'  => $status,
                'foto' => $foto_baru

            ];

            $this->db->insert('tb_berita', $berita);
            redirect('Informasi/berita');
        }
    }
    public function detail_berita($id_berita)
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
            $this->load->view('informasi/detail_berita', $data);
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
        $this->load->model('Model_informasi');
        $ekskul = $this->Model_informasi->ekskul();
        $data = [
            'judul' => "Ekstrakulikuler",
            'ekskul' => $ekskul
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('informasi/ekskul', $data);
        $this->load->view('template/footer');
    }

    public function edit_ekskul($id_ekskul = NULL)
    {
        // var_dump($_POST);
        // die;
        $ekskul = $this->Model_informasi->getidekskul($id_ekskul);
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data = [
                'judul' => "Edit Ekskul",
                'ekskul' => $ekskul
            ];

            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar',);
            $this->load->view('informasi/edit_ekskul',);
            $this->load->view('template/footer',);
        } else {
            $id = $this->input->post('id');

            $isi = $this->input->post('isi');
            $data = [
                'isi' => $isi,
            ];

            $this->db->set('isi', $isi);
            $this->db->where('id_ekskul', $id);
            $this->db->update('tb_ekskul');
            redirect('Informasi/ekskul');
        }
    }

    public function hapus_ekskul($id_ekskul)
    {
        $this->db->delete('tb_ekskul', ['id_ekskul' => $id_ekskul]);
        redirect('Informasi/ekskul');
    }

    public function tambah_ekskul()
    {

        $ekskul['judul'] = "Tambah Ekskul";
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $ekskul);
            $this->load->view('template/topbar', $ekskul);
            $this->load->view('template/sidebar', $ekskul);
            $this->load->view('informasi/tambah_ekskul', $ekskul);
            $this->load->view('template/footer', $ekskul);
        } else {

            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');

            $ekskul = [
                'judul' => $judul,
                'isi' => $isi
            ];

            $this->db->insert('tb_ekskul', $ekskul);
            redirect('Informasi/ekskul');
        }
    }

    public function galeri()
    {
        $this->load->model('Model_informasi');
        $galeri = $this->Model_informasi->galeri();
        $data = [
            'tanggal' => date('Y-m-d'),
            'judul' => "galeri",
            'galeri' => $galeri
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('informasi/galeri');
        $this->load->view('template/footer');
    }

    public function edit_galeri($id_galeri)
    {
        $galeri = $this->Model_informasi->getidgaleri($id_galeri);
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        // $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('foto', 'foto', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data = [
                'judul' => "Edit galeri",
                'galeri' => $galeri,
                'tanggal' => date('Y-m-d'),
                'keterangan' => "keterangan",
                'penulis' => "penulis"

            ];
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar',);
            $this->load->view('informasi/edit_galeri', $data);
            $this->load->view('template/footer',);
        } else {
            $tanggal = $this->input->post('tanggal');
            $keterangan = $this->input->post('keterangan');
            $penulis = $this->input->post('penulis');
            $id = $this->input->post('id');

            $this->db->set('tanggal', $tanggal);
            $this->db->set('keterangan', $keterangan);
            $this->db->set('penulis', $penulis);
            $this->db->where('id_galeri', $id);
            $this->db->update('tb_galeri');
            redirect('Informasi/galeri');
        }
    }

    public function hapus_galeri($id_galeri)
    {
        $this->db->delete('tb_galeri', ['id_galeri' => $id_galeri]);
        redirect('Informasi/galeri');
    }

    public function tambah_galeri()
    {

        $galeri['galeri'] = "Tambah galeri";
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('penulis', 'penulis', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $galeri);
            $this->load->view('template/topbar', $galeri);
            $this->load->view('template/sidebar', $galeri);
            $this->load->view('informasi/tambah_galeri', $galeri);
            $this->load->view('template/footer', $galeri);
        } else {

            $keterangan = $this->input->post('keterangan');
            $penulis = $this->input->post('penulis');

            // Uploag Gamabar
            $fotogaleri = $_FILES['foto_galeri']['name'];
            if ($fotogaleri) {

                // Format Gambar
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // Ukuran Gambar Maksimal 5 MB
                $config['max_size']     = '5000';
                // Tujuan Upload Gmbar
                $config['upload_path'] = './asset/gambar/galeri/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_galeri')) {
                    $foto_baru = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();;
                }
            }

            if (empty($foto_baru)) $foto_baru = "default.jpeg";

            $galeri = [
                'tanggal' => date('Y-m-d'),
                'keterangan' => $keterangan,
                'penulis'  => $penulis,
                'foto'  => $foto_baru
            ];

            $this->db->insert('tb_galeri', $galeri);
            redirect('Informasi/galeri');
        }
    }

    public function ppdb()
    {
        $this->load->model('Model_informasi');
        $ppdb = $this->Model_informasi->ppdb();
        $data = [
            'judul' => "ppdb",
            'ppdb' => $ppdb
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('informasi/laporan_ppdb');
        $this->load->view('template/footer');
    }

    public function detail_ppdb($id_ppdb)
    {
        $ppdb = $this->Model_informasi->getidppdb($id_ppdb);
        $this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('jk', 'jk', 'trim|required');
        $this->form_validation->set_rules('ttl', 'ttl', 'trim|required');
        $this->form_validation->set_rules('agama', 'agama', 'trim|required');
        $this->form_validation->set_rules('anak_ke', 'anak_ke', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
        $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'trim|required');
        $this->form_validation->set_rules('nilai_akhir', 'nilai_akhir', 'trim|required');
        $this->form_validation->set_rules('nilai_rata', 'nilai_rata', 'trim|required');
        $this->form_validation->set_rules('nama_ortu', 'nama_ortu', 'trim|required');
        $this->form_validation->set_rules('ttl_ortu', 'ttl_ortu', 'trim|required');
        $this->form_validation->set_rules('alamat_ortu', 'alamat_ortu', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
        $this->form_validation->set_rules('penghasilan', 'penghasilan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data = [
                'judul' => "Detail ppdb",
                'ppdb' => $ppdb
            ];
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar',);
            $this->load->view('template/sidebar',);
            $this->load->view('informasi/detail_ppdb', $data);
            $this->load->view('template/footer',);
        } else {
            $nisn = $this->input->post('nisn');
            $nama = $this->input->post('nama');
            $ttl = $this->input->post('ttl');
            $jk = $this->input->post('jk');
            $agama = $this->input->post('agama');
            $anak_ke = $this->input->post('anak_ke');
            $status = $this->input->post('status');
            $alamat = $this->input->post('alamat');
            $no_telp = $this->input->post('no_telp');
            $asal_sekolah = $this->input->post('asal_sekolah');
            $nilai_akhir = $this->input->post('nilai_akhir');
            $nilai_rata = $this->input->post('nilai_rata');
            $nama_ortu = $this->input->post('nama_ortu');
            $ttl_ortu = $this->input->post('ttl_ortu');
            $alamat_ortu = $this->input->post('alamat_ortu');
            $pekerjaan = $this->input->post('pekerjaan');
            $penghasilan = $this->input->post('penghasilan');

            $this->db->set('nisn', $nisn);
            $this->db->set('nama', $nama);
            $this->db->set('ttl', $ttl);
            $this->db->set('status', $status);
            $this->db->set('jk', $jk);
            $this->db->set('agama', $agama);
            $this->db->set('anak_ke', $anak_ke);
            $this->db->set('no_telp', $no_telp);
            $this->db->set('alamat', $alamat);
            $this->db->set('asal_sekolah', $asal_sekolah);
            $this->db->set('nilai_akhir', $nilai_akhir);
            $this->db->set('nilai_rata', $nilai_rata);
            $this->db->set('nama_ortu', $nama_ortu);
            $this->db->set('ttl_ortu', $ttl_ortu);
            $this->db->set('alamat_ortu', $alamat_ortu);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->set('penghasilan', $penghasilan);

            $this->db->where('id_ppdb', $id_ppdb);
            $this->db->update('tb_ppdb');
            redirect('Informasi/ppdb');
        }
    }

    public function hapus_ppdb($id_ppdb)
    {
        $this->db->delete('tb_ppdb', ['id_ppdb' => $id_ppdb]);
        redirect('Informasi/ppdb');
    }
}

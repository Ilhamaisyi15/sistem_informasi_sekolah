<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_informasi extends CI_Model
{
    public function berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        return $this->db->get('tb_berita')->result_array();
    }
    public function getidberita($id_berita)
    {
        return $this->db->get_where('tb_berita', ['id_berita ' => $id_berita])->row_array();
    }

    public function tambah_berita()
    {
        $this->db->order_by('id_berita', 'DESC');
        $judul = $this->input->post('judul', true);
        $isi = $this->input->post('isi', true);
        $penulis = $this->input->post('penulis', true);
        $status = $this->input->post('status', true);

        $berita = array(
            'judul' => $judul,
            'isi' => $isi,
            'penulis' => $penulis,
            'status' => $status
        );

        $this->db->insert('tb_berita', $berita);
    }

    public function detail_berita()
    {
        $judul = $this->input->post('judul', true);
        $isi = $this->input->post('isi', true);
        $penulis = $this->input->post('penulis', true);
        $status = $this->input->post('status', true);

        $berita = array(
            'judul' => $judul,
            'isi' => $isi,
            'penulis' => $penulis,
            'status' => $status
        );

        $this->db->insert('tb_berita', $berita);
    }

    public function detail_berita_user()
    {
        $judul = $this->input->post('judul', true);
        $isi = $this->input->post('isi', true);
        $penulis = $this->input->post('penulis', true);
        $status = $this->input->post('status', true);

        $berita = array(
            'judul' => $judul,
            'isi' => $isi,
            'penulis' => $penulis,
            'status' => $status
        );

        $this->db->insert('tb_berita', $berita);
    }

    public function ekskul()
    {
        return $this->db->get('tb_ekskul', ['id_ekskul ' => 1])->row_array();
    }

    public function getidekskul($id_ekskul)
    {
        return $this->db->get_where('tb_ekskul', ['id_ekskul ' => $id_ekskul])->row_array();
    }

    public function ppdb()
    {
        $this->db->order_by('id_ppdb', 'DESC');
        return $this->db->get('tb_ppdb')->result_array();
    }

    public function getidppdb($id_ppdb)
    {
        return $this->db->get_where('tb_ppdb', ['id_ppdb ' => $id_ppdb])->row_array();
    }

    public function detail_ppdb()
    {
        $nisn = $this->input->post('nisn', true);
        $nama = $this->input->post('nama', true);
        $jk = $this->input->post('jk', true);
        $ttl = $this->input->post('ttl', true);
        $agama = $this->input->post('agama', true);
        $anak_ke = $this->input->post('anak_ke', true);
        $status = $this->input->post('status', true);
        $alamat = $this->input->post('alamat', true);
        $no_telp = $this->input->post('no_telp', true);
        $asal_sekolah = $this->input->post('asal_sekolah', true);
        $nilai_akhir = $this->input->post('nilai_akhir', true);
        $nilai_rata = $this->input->post('nilai_rata', true);
        $nama_ortu = $this->input->post('nama_ortu', true);
        $ttl_ortu = $this->input->post('ttl_ortu', true);
        $alamat_ortu = $this->input->post('alamat_ortu', true);
        $pekerjaan = $this->input->post('pekerjaan', true);
        $penghasilan = $this->input->post('penghasilan', true);

        $ppdb = array(
            'nisn' => $nisn,
            'nama' => $nama,
            'jk' => $jk,
            'ttl' => $ttl,
            'agama' => $agama,
            'anak_ke' => $anak_ke,
            'status' => $status,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'asal_sekolah' => $asal_sekolah,
            'nilai_akhir' => $nilai_akhir,
            'nilai_rata' => $nilai_rata,
            'nama_ortu' => $nama_ortu,
            'ttl_ortu' => $ttl_ortu,
            'alamat_ortu' => $alamat_ortu,
            'pekerjaan' => $pekerjaan,
            'penghasilan' => $penghasilan
        );

        $this->db->insert('tb_ppdb', $ppdb);
    }

    public function galeri()
    {
        $this->db->order_by('id_galeri', 'DESC');
        return $this->db->get('tb_galeri')->result_array();
    }
    public function getidgaleri($id_galeri)
    {
        return $this->db->get_where('tb_galeri', ['id_galeri ' => $id_galeri])->row_array();
    }

    public function tambah_galeri()
    {
        $this->db->order_by('id_galeri', 'DESC');
        $keterangan = $this->input->post('keterangan', true);
        $penulis = $this->input->post('penulis', true);

        $galeri = array(
            'keterangan' => $keterangan,
            'penulis' => $penulis
        );

        $this->db->insert('tb_galeri', $galeri);
    }

    public function detail_galeri_user()
    {
        $judul = $this->input->post('judul', true);
        $keterangan = $this->input->post('keterangan', true);
        $penulis = $this->input->post('penulis', true);

        $galeri = array(
            'keterangan' => $keterangan,
            'judul' => $judul,
            'penulis' => $penulis
        );

        $this->db->insert('tb_galeri', $galeri);
    }
}

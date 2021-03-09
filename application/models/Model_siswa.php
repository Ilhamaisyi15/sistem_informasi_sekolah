<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{

    public function datasiswa()
    {
        return $this->db->get('tb_siswa')->result_array();
    }

    public function tambahdatasiswa()
    {

        $nis = $this->input->post('nis', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $ttl = $this->input->post('ttl', true);
        $jeniskelamin = $this->input->post('jeniskelamin', true);
        $kelas = $this->input->post('kelas', true);

        $data = array(
            'nis' => $nis,
            'nama' => $nama,
            'alamat' => $alamat,
            'ttl' => $ttl,
            'jk' => $jeniskelamin,
            'kelas' => $kelas
        );

        $this->db->insert('tb_siswa', $data);
    }

    public function visi()
    {
        $id_visi = "1";

        return $this->db->get_where('tb_visimisi', ['id_visimisi' => $id_visi])->row_array();
    }

    public function getidsiswa($id_siswa)
    {

        return $this->db->get_where('tb_siswa', ['id_siswa ' => $id_siswa])->row_array();
    }
}

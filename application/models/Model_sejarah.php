<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_sejarah extends CI_Model
{

    public function sejarah()
    {
        return $this->db->get('tb_sejarah', ['id_sejarah ' => 1])->row_array();
    }

    public function getidsejarah($id_sejarah)
    {
        return $this->db->get_where('tb_sejarah', ['id_sejarah ' => $id_sejarah])->row_array();
    }

    public function visimisi()
    {
        return $this->db->get('tb_visimisi', ['id_visimisi ' => 1])->row_array();
    }

    public function getvisimisi($id_visimisi)
    {
        return $this->db->get_where('tb_visimisi', ['id_visimisi ' => $id_visimisi])->row_array();
    }

    public function tatatertib()
    {
        return $this->db->get('tb_tatatertib', ['id_tatatertib ' => 1])->row_array();
    }

    public function gettatatertib($id_tatatertib)
    {
        return $this->db->get_where('tb_tatatertib', ['id_tatatertib ' => $id_tatatertib])->row_array();
    }

    public function fasilitas()
    {
        return $this->db->get('tb_fasilitas', ['id_fasilitas ' => 1])->row_array();
    }

    public function getfasilitas($id_fasilitas)
    {
        return $this->db->get_where('tb_fasilitas', ['id_fasilitas ' => $id_fasilitas])->row_array();
    }

    public function prestasi()
    {
        return $this->db->get('tb_prestasi', ['id_prestasi ' => 1])->row_array();
    }

    public function getprestasi($id_prestasi)
    {
        return $this->db->get_where('tb_prestasi', ['id_prestasi ' => $id_prestasi])->row_array();
    }

    public function berita()
    {
        return $this->db->get('tb_berita', ['id_berita ' => 1])->result_array();
    }

    public function getidberita($id_berita)
    {
        return $this->db->get_where('tb_berita', ['id_berita ' => $id_berita])->result_array();
    }
}

/* End of file Model_guru.php */

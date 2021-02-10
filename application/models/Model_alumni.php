<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_alumni extends CI_Model
{

    public function data_alumni()
    {
        return $this->db->get('tb_alumni')->result_array();
    }

    public function tambah_dataalumni()
    {

        $nisn = $this->input->post('nisn', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $th_lulus = $this->input->post('th_lulus', true);

        $data = array(
            'nisn' => $nisn,
            'nama' => $nama,
            'alamat' => $alamat,
            'th_lulus' => $th_lulus,
        );

        $this->db->insert('tb_alumni', $data);
    }

    public function getidalumni($id_alumni)
    {

        return $this->db->get_where('tb_alumni', ['id_alumni ' => $id_alumni])->row_array();
    }
}

/* End of file Model_alumni.php */

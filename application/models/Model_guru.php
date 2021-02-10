<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model
{

    public function dataguru()
    {
        return $this->db->get('tb_guru')->result_array();
    }

    public function tambahdataguru()
    {

        $nip = $this->input->post('nip', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $pendidikan = $this->input->post('pendidikan', true);
        $mapel = $this->input->post('mapel', true);

        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'alamat' => $alamat,
            'pendidikan' => $pendidikan,
            'mapel' => $mapel,
        );

        $this->db->insert('tb_guru', $data);
    }

    public function getidguru($id_guru)
    {

        return $this->db->get_where('tb_guru', ['id_guru ' => $id_guru])->row_array();
    }
}

/* End of file Model_guru.php */

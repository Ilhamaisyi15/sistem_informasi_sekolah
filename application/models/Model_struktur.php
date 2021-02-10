<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_struktur extends CI_Model
{

    public function struktur()
    {
        return $this->db->get('tb_struktur')->result_array();
    }
}

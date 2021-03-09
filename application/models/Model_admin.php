<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{

    public function dataUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahDataUser()
    {

        $name = htmlspecialchars($this->input->post('name', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $aktif = "1";
        $role = "1";

        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'is_active' => $aktif,
            'role_id' => $role
        );

        $this->db->insert('user', $data);
    }

    public function hapusDataUser($id)
    {
        return $this->db->delete('user', ['id' => $id]);
    }

    public function getUser()
    {

        $user = $this->session->userdata('email');

        return $this->db->get_where('user', ['email' => $user])->row_array();
    }
}

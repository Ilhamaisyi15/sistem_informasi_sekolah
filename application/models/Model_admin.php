<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{

    public function tambahUser()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $email = htmlspecialchars($this->input->post('email'));
        $image = "default.jpg";
        $password =  password_hash($this->input->post('password-1'), PASSWORD_DEFAULT);
        $role_id = 1;
        $is_active = 1;
        $date_created = time();

        $data = [
            'username' => $username,
            'email' => $email,
            'image' => $image,
            'password' => $password,
            'role_id' => $role_id,
            'is_active' => $is_active,
            'date_created' => $date_created
        ];

        $this->db->insert('tbl_user', $data);
    }
}

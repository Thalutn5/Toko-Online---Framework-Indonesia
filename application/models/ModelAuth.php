<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAuth extends CI_Model
{
    public function cekLogin()
    {
        $username = set_value('username');
        $password = set_value('password');

        $data = [
            'username' => $username,
            'password' => $password
        ];

        $result = $this->db->get_where('tb_user', $data, 1);

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}

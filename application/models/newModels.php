<?php
defined('BASEPATH') or exit('No direct script allowed');

class NewModels extends CI_Model
{
    public function get_data()
    {
        $data = [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password', true)
        ];


        return $this->db->insert('users', $data);
    }
}
?>
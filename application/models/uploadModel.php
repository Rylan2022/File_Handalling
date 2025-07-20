<?php
defined('BASEPATH') or exit('No direct script is allowed');
class UploadModel extends CI_Model
{
    public function insert_image($imageName)
    {
        $data = [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password', true),
            'image' => $imageName
        ];

        return $this->db->insert('users', $data);






?>
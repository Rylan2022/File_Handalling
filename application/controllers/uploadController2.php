<?php
defined('BASEPATH') or exit("No direct script allowed");

class UploadController2 extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if (empty($_FILES['document']['name'])) {
            $this->form_validation->set_rules('document', 'Image', 'required');
        }



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mini');
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);



            if ($this->upload->do_upload('document')) {
                $uploadData = $this->upload->data();
                $imageName = $uploadData['file_name'];
            } else {
                $error['err'] =  $this->upload->display_errors();
                $this->load->view('form', $error);
            }


            $inseted = $this->UploadModel->insert_image($imageName);
            if ($inseted) {
                $this->load->view('success');
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}
?>
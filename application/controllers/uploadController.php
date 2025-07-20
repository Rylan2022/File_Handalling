<?php
defined('BASEPATH') or exit('No direct script allowed');

class UploadController extends CI_Controller
{
    public function index()
    {

        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->model('uploadModel');




        if ($this->form_validation->run() == FALSE) {
            $this->load->view('upload');
        } else {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';


            $this->load->library('upload', $config);

            if ($this->upload->do_upload('document')) {
                $uploadData = $this->upload->data();
                $imageName = $uploadData['file_name'];
            } else {
                echo $this->upload->display_errors();
                return;
            }

            $inserted = $this->uploadModel->get_data($imageName);
            if ($inserted) {
                $this->load->view('success');
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}
?>
<?php
defined('BASEPATH') or exit('No direct script allowed.');

class NewController extends CI_Controller
{
    public function index()
    {
        $this->load->model('NewModels');
        $this->load->helper(['url', 'form']);
        $this->load->library('form_validation');


        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        if (empty($_FILES['document']['name'])) {
            $this->form_validation->set_rules('document', 'Image', 'required');
        }

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('form');

        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size'] = 100;
            // $config['max_width'] = 1024;
            // $config['max_height'] = 768;

            $this->load->library('upload', $config);
            $this->upload->do_upload('document');
            $data = $this->upload->data();
            echo $data['file_name'];
            echo '<pre>';
            print_r($data);

            // $inserted = $this->NewModels->get_data();
            // if ($inserted) {
            //     $this->load->view('success');
            // } else {
            //     echo "Something went wrong. Please try again.";
            // }
        }



    }
}

?>
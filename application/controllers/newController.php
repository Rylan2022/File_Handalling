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
        //check it has a name or not
        if (empty($_FILES['document']['name'])) {
            $this->form_validation->set_rules('document', 'Image', 'required');
        }

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('form');

        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png';


            $this->load->library('upload', $config);

            //extract name form file

            if ($this->upload->do_upload('document')) {
                $uploadData = $this->upload->data();
                $imageName = $uploadData['file_name'];
            } else {
                echo $this->upload->display_errors();
                return;
            }


            $inserted = $this->NewModels->get_data($imageName);
            if ($inserted) {
                $this->load->view('success');
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}

?>
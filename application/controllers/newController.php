<?php
defined('BASEPATH') or exit('No direct script allowed.');

class NewController extends CI_Controller
{
    public function index()
    {
        $this->load->model('NewModels');
        $this->load->helper(['url', 'form']);
        $this->load->library('form_validation');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('form');

        } else {
            $inserted = $this->NewModels->get_data();
            if ($inserted) {
                $this->load->view('success');
            } else {
                echo "Something went wrong. Please try again.";
            }
        }



    }
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CS extends CI_Controller {

    public function index()
    {
        // Load the links and scripts views as strings
        $data['links']  = $this->load->view('layout/links', '', TRUE);
        $data['script'] = $this->load->view('layout/script', '', TRUE);
        $data['header'] = $this->load->view('layout/header', '', TRUE);
        $data['footer'] = $this->load->view('layout/footer', '', TRUE);

        // ✅ pass $data to about view
        $this->load->view('services/cs', $data);
    }
}

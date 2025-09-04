<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // Load the links and scripts views as strings
        $data['links'] = $this->load->view('layout/links', '', TRUE);
        $data['script'] = $this->load->view('layout/script', '', TRUE);
        $data['header']  = $this->load->view('layout/header', '', TRUE); // ✅ header add
        $data['footer']  = $this->load->view('layout/footer', '', TRUE);

        // Load the main view and pass the data
        $this->load->view('home', $data);
    }
}

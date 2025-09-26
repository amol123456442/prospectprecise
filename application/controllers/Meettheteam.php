<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meettheteam extends CI_Controller {

    public function index()
    {
        $data['links']  = $this->load->view('layout/links', '', TRUE);
        $data['script'] = $this->load->view('layout/script', '', TRUE);
        $data['header'] = $this->load->view('layout/header', '', TRUE);
        $data['footer'] = $this->load->view('layout/footer', '', TRUE);

        $this->load->view('about/meettheteam', $data);
    }
}
    
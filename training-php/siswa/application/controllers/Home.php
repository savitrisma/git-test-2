<?php

class Home extends CI_Controller {
    public function index($nama = 'Mega Fatayat')
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
<?php

class Contact extends CI_Controller {
    public function index() {
        $data ['title'] = 'Contact | Poinsla';

        $this->load->view('templates/header', $data);
        $this->load->view('partial/navbar');
        $this->load->view('templates/banner');
        $this->load->view('partial/contact');
        $this->load->view('templates/footer');
    }
}
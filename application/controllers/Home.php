<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($nama = 'Roby Adi Putra') {
		$data['title'] = 'Poinsla | Homepage';
		$data['nama'] = $nama;
		$this->load->view('templates/header', $data);
		$this->load->view('partial/navbar');
		$this->load->view('partial/index', $data);
		$this->load->view('partial/about');
		$this->load->view('partial/services');
		$this->load->view('partial/menu');
		$this->load->view('partial/download');
		$this->load->view('partial/contact');
		$this->load->view('templates/footer');
	}
}
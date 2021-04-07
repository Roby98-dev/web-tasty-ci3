<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function index() {
		$data['title'] = 'Services | Poinsla';
		$this->load->view('templates/header', $data);
		$this->load->view('partial/navbar');
		$this->load->view('templates/banner', $data);
		$this->load->view('partial/services');
		$this->load->view('templates/footer');
	}
}
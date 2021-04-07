<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index() {
		$data['title'] = 'Menu | Poinsla';
		$this->load->view('templates/header', $data);
		$this->load->view('partial/navbar');
		$this->load->view('templates/banner', $data);
		$this->load->view('partial/menu');
		$this->load->view('templates/footer');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('dashboard');
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin');
	}
}

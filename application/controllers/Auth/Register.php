<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AuthModel');
    }
     
    public function index() 
    {
        $conf['title'] = 'Register';

        $this->load->view('auth/register', $conf);
    }

    public function proses() 
    {
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');

		if ($this->form_validation->run() ==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$email = $this->input->post('email');
			$this->AuthModel->register($username,$password,$nama_lengkap,$email);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}

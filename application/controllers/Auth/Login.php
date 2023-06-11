<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AuthModel');
    }

	public function index()
	{
        $conf['title'] = 'Login';

		$this->load->view('auth/login', $conf);
	}

    public function proses()
    {
        $username_email = str_replace("'", "", htmlspecialchars($this->input->post('username'), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password'), ENT_QUOTES));

        $row = $this->AuthModel->login($username_email)->row();

        if ($row->status == 1) {
            if (password_verify($password, $row->password)) {
                $data_session = array(
                    'username'		=> $username,
                    'nama_lengkap' 	=> $row->nama_lengkap,
                    'id'			=> $row->id,
                    'group_id'      => $row->group_id,
                    'group_name'    => $row->group_name,
                    'group_slug'    => $row->group_slug,
                    'email'			=> $row->email,
                    'foto'          => $row->foto,
                    'status' 		=> "login"
                );
    
                $this->session->set_userdata($data_session);
                $this->session->set_flashdata('sukses', 'Anda Berhasil Masuk Dengan Level ');
                log_activity('Melakukan Login', 'Login', $this->session->userdata('nama_lengkap'));
                redirect(base_url($this->session->userdata('group_slug').'/Dashboard'));
    
            }else{
                $this->session->set_flashdata('gagal', 'Login gagal silahkan coba lagi ');
                redirect(base_url('login'));
            }
        }else{
            $this->session->set_flashdata('gagal', 'Data tidak aktif, hubungi administrator');
            redirect(base_url('login'));
        }

    }
    public function logout()
    {
        $this->session->sess_destroy();
        log_activity('Melakukan Logout', 'Logout', $this->session->userdata('nama_lengkap'));
			redirect(base_url('login'));
    }
}

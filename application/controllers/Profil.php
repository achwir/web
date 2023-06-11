<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataUserModel');
    }


	public function index()
	{
        $conf['title'] = 'Profil';

        $id = $this->session->userdata('id');
        $data['user'] = $this->DataUserModel->getDataByID($id)->row();
        // var_dump($data['user']);
        $data['js'] = 'datauser';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('profil', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function update()
    {
        $id = $this->session->userdata('id');
        $data['username'] = $this->input->post('username');
        $data['email'] = $this->input->post('email');
        $data['nama_lengkap'] = $this->input->post('nama_lengkap');
        // $data['group_id'] = $this->input->post('group_id');
        // $data['status'] = $this->input->post('status');

        // the user id contain dot, so we must remove it
		$config['upload_path']          = FCPATH.'/assets/img/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['file_name']            = $data['username'];
		$config['overwrite']            = true;
		$config['max_size']             = 1024; // 1MB
		$config['max_width']            = 1080;
		$config['max_height']           = 1080;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('notif-error', 'Foto gagal di upload ');
            redirect(base_url($this->session->userdata('group_slug').'/profil'));
		} else {
			$uploaded_data = $this->upload->data();
            $data['foto'] = $uploaded_data['file_name'];
            $act = $this->DataUserModel->update($data, $id);
            if ($act) {
                $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
                redirect(base_url($this->session->userdata('group_slug').'/profil'));
            }else{
                $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
                redirect(base_url($this->session->userdata('group_slug').'/profil'));
            }
		}
	

    }

}
?>
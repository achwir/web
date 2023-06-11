<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUser extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataUserModel');
    }


	public function index()
	{
        $conf['title'] = 'Data User';

        $data['datauser'] = $this->DataUserModel->all()->result();
        $data['js'] = 'datauser';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-user', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        // echo '<pre>'.print_r($this->input->post(),1).'</pre>';
        //         die;

		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap','required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('group_id', 'group_id','required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('status', 'status','required|min_length[1]|max_length[255]');
        
        if ($this->form_validation->run() ==true)
        {
            // the user id contain dot, so we must remove it
            $config['upload_path']          = FCPATH.'/assets/img/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['file_name']            = $this->input->post('username');
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB
            $config['max_width']            = 1080;
            $config['max_height']           = 1080;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('notif-error', 'Foto gagal di upload ');
                redirect(base_url($this->session->userdata('group_slug').'/data-user'));
            } else {
                $uploaded_data = $this->upload->data();
                $data['foto'] = $uploaded_data['file_name'];
                $data['username'] = $this->input->post('username');
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $data['nama_lengkap'] = $this->input->post('nama_lengkap');
                $data['email'] = $this->input->post('email');
                $data['group_id'] = $this->input->post('group_id');
                $data['status'] = $this->input->post('status');
                
                $this->DataUserModel->insert($data);
                log_activity('Data User', 'Menambah', $data['nama_lengkap']);
                $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
                redirect(base_url($this->session->userdata('group_slug').'/data-user'));
            }
        }
        else
        {
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-user'));
        }
	}

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['username'] = $this->input->post('username_update');
        $data['email'] = $this->input->post('email_update');
        $data['nama_lengkap'] = $this->input->post('nama_lengkap_update');
        $data['group_id'] = $this->input->post('group_id_update');
        $data['status'] = $this->input->post('status_update');

        if (!empty($this->input->post('password_update'))) {
            $data['password'] = password_hash($this->input->post('password_update'), PASSWORD_DEFAULT);  
        }

        // the user id contain dot, so we must remove it
        $config['upload_path']          = FCPATH.'/assets/img/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $data['username'];
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_update')) {
            $this->session->set_flashdata('notif-error', 'Foto gagal di upload ');
            // redirect(base_url($this->session->userdata('group_slug').'/data-user'));
        } else {
            $uploaded_data = $this->upload->data();
            $data['foto'] = $uploaded_data['file_name'];
        }

        $act = $this->DataUserModel->update($data, $id);
        log_activity('Data User', 'Mengubah', $data['nama_lengkap']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-user'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-user'));
        }
    }

    public function delete($id)
    {
        $user = $this->db->get_where('users', ['id' => $id])->row();
        $act = $this->DataUserModel->delete($id);
        log_activity('Data User', 'Menghapus', $user->nama_lengkap);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-user'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-user'));
        }
    }
}
?>
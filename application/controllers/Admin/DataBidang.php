<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBidang extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataBidangModel');
    }


	public function index()
	{   
        $conf['title'] = 'Data Bidang';
        $data['databidang'] = $this->DataBidangModel->all()->result();
        $data['js'] = 'databidang';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-bidang', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['nama_bidang'] = $this->input->post('nama_bidang');

        $act = $this->DataBidangModel->insert($data);
        log_activity('Data Bidang', 'Menambah', $data['nama_bidang']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-bidang'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-bidang'));
        }
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['nama_bidang'] = $this->input->post('nama_bidang_update');

        $act = $this->DataBidangModel->update($data, $id);
        log_activity('Data Bidang', 'Mengubah', $data['nama_bidang']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-bidang'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-bidang'));
        }
    }

    public function delete($id)
    {
        $bidang = $this->db->get_where('bidang', ['id' => $id])->row();
        $act = $this->DataBidangModel->delete($id);
        log_activity('Data bidang', 'Menghapus', $bidang->nama_bidang);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-bidang'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-bidang'));
        }
    }
}
?>
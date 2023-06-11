<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangMasuk extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangMasukModel');
        $this->load->model('DataBarangModel');
    }


	public function index()
	{
        $conf['title'] = 'Barang Masuk';
        $data['databarangmasuk'] = $this->DataBarangMasukModel->all()->result();
        $data['js'] = 'databarangmasuk';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-barang-masuk', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['id_barang'] = $this->input->post('id_barang');
        $data['tanggal_masuk'] = $this->input->post('tanggal_masuk');
        $data['jumlah_barang'] = $this->input->post('jumlah_barang');

        $stok_lama = $this->db->get_where('data_barang', ['id' => $data['id_barang']])->row();
        $act = $this->DataBarangMasukModel->insert($data);

        if($act){
            // $id = $this->input->post('id_barang');
            // $barang['stok'] = $data['jumlah_barang'] + $stok_lama->stok;

            // $update = $this->DataBarangModel->update($barang, $id);
        }

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-masuk'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-masuk'));
        }
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $id_barang = $this->input->post('id_barang');
        $data['tanggal_masuk'] = $this->input->post('tanggal_masuk_update');
        $data['jumlah_barang'] = $this->input->post('jumlah_barang_update');
        $jumlah_sebelum = $this->input->post('jumlah_sebelum');

        $stok_lama = $this->db->get_where('data_barang', ['id' => $data['id_barang']])->row();
        $act = $this->DataBarangMasukModel->update($data, $id);

        if($act){
            // $id = $this->input->post('id_barang');
            // $barang['stok'] = $stok_lama->stok - $jumlah_sebelum + $data['jumlah_barang'];

            // $update = $this->DataBarangModel->update($barang, $id);
        };

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-masuk'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-masuk'));
        }
    }

    public function delete($id)
    {
        $act = $this->DataBarangMasukModel->delete($id);

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-masuk'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-masuk'));
        }
    }
}
?>
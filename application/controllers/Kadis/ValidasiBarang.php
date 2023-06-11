<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidasiBarang extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangMasukModel');
        $this->load->model('DataBarangModel');
    }


	public function index()
	{
        $conf['title'] = 'Barang Masuk';
        $data['databarangmasuk'] = $this->DataBarangMasukModel->not_validation()->result();
        $data['js'] = 'databarangmasuk';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('kadis/validasi-barang-masuk', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function validation()
    {
        $id = $this->input->post('id_update');
        $id_barang = $this->input->post('id_barang');
        $data['validation_at'] = date('Y-m-d H:i:s');

        $act = $this->DataBarangMasukModel->update($data, $id);
        $barang = $this->db->get_where('data_barang', ['id' => $id_barang])->row();

        log_activity('Validasi Barang Masuk', 'Validasi', $barang->nama_barang);
        if($act){
            // $id = $this->input->post('id_barang');
            // $barang['stok'] = $stok_lama->stok - $jumlah_sebelum + $data['jumlah_barang'];

            // $update = $this->DataBarangModel->update($barang, $id);
        };

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Validasi ');
            redirect(base_url($this->session->userdata('group_slug').'/validasi-barang-masuk'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Validasi ');
            redirect(base_url($this->session->userdata('group_slug').'/validasi-barang-masuk'));
        }
    }

    public function reject($id)
    {
        $barang_masuk = $this->db->get_where('barang_masuk', ['id' => $id])->row();
        $barang = $this->db->get_where('data_barang', ['id' => $barang_masuk->id_barang])->row();
        $act = $this->DataBarangMasukModel->delete($id);
        log_activity('Data Barang Masuk', 'Reject', $barang->nama_barang);

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Direject ');
            redirect(base_url($this->session->userdata('group_slug').'/validasi-barang-masuk'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Direject ');
            redirect(base_url($this->session->userdata('group_slug').'/validasi-barang-masuk'));
        }
    }
}
?>
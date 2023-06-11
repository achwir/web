<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangKeluar extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangKeluarModel');
        $this->load->model('DataBarangMasukModel');
        $this->load->model('DataBarangModel');
    }


	public function index()
	{
        $conf['title'] = 'Barang Keluar';
        $data['databarangkeluar'] = $this->DataBarangKeluarModel->all()->result();
        $data['js'] = 'databarangkeluar';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-barang-keluar', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $kode_barang = $this->db->get_where('data_barang', ['kode_barang' => $this->input->post('kode_barang')]);
        if($kode_barang->num_rows() > 0){
            $barang = $kode_barang->row();
            $data['id_barang'] = $barang->id;
            $data['tanggal_peminjaman'] = $this->input->post('tanggal_peminjaman');
            $data['tanggal_pengembalian'] = $this->input->post('tanggal_pengembalian');
            $data['jumlah_barang'] = $this->input->post('jumlah_barang');
    
            $stok_lama = $this->DataBarangMasukModel->sum_stok($data['id_barang']);
            // print_r($data['jumlah_barang'].' & '.$stok_lama);
            if($data['jumlah_barang'] > $stok_lama){
                $this->session->set_flashdata('notif-error', 'Jumlah tidak boleh melebihi stok');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }else{
                $act = $this->DataBarangKeluarModel->insert($data);
                log_activity('Data Barang Keluar', 'Menambah', $barang->nama_barang);
                // echo $this->db->last_query($act);
                if ($act) {
                    $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
                    redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
                }else{
                    $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
                    redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
                }
            }
        }else{
            $this->session->set_flashdata('notif-error', 'Kode Barang tidak ditemukan');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }
       
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $id_barang = $this->input->post('id_barang');
        $data['tanggal_peminjaman'] = $this->input->post('tanggal_peminjaman_update');
        $data['tanggal_pengembalian'] = $this->input->post('tanggal_pengembalian_update');
        $data['jumlah_barang'] = $this->input->post('jumlah_barang_update');
        $jumlah_sebelum = $this->input->post('jumlah_sebelum');
        
        $total_bk = $this->DataBarangKeluarModel->sum_stok($id_barang);
        $total_bm = $this->DataBarangMasukModel->sum_stok($id_barang);

        $total = $total_bm-$total_bk;
        if ($data['jumlah_barang'] > $total) {
            $this->session->set_flashdata('notif-error', 'Jumlah Stok Tidak Mencukupi');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }else{
            $stok_lama = $this->db->get_where('data_barang', ['id' => $id_barang])->row();
            $act = $this->DataBarangKeluarModel->update($data, $id);
            log_activity('Data Barang Keluar', 'Mengubah', $stok_lama->nama_barang);

            if($act){
                // $id = $this->input->post('id_barang');
                // $barang['stok'] = $stok_lama->stok + $jumlah_sebelum - $data['jumlah_barang'];

                // $update = $this->DataBarangModel->update($barang, $id);
            };

            if ($act) {
                $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }else{
                $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
                redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
            }
        }
    }

    public function delete($id)
    {
        $barang = $this->db->get_where('data_barang', ['id' => $id])->row();
        $act = $this->DataBarangKeluarModel->delete($id);
        log_activity('Data Barang Keluar', 'Menghapus', $barang->nama_barang);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/barang-keluar'));
        }
    }
    
}
?>
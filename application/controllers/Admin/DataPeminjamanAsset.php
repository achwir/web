<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPeminjamanAsset extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataPeminjamanAssetModel');
        $this->load->model('DataAssetModel');
    }


	public function index()
	{
        $conf['title'] = 'Peminjaman Aset';
        $data['datapeminjamanasset'] = $this->DataPeminjamanAssetModel->all()->result();
        $data['js'] = 'datapeminjamanasset';
        $data['dataassets'] = $this->DataAssetModel->all()->result();

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-peminjaman-asset', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $asset = $this->db->get_where('data_asset', ['id' => $this->input->post('id_asset')]);
        if($asset->num_rows() > 0){
            $asset = $asset->row();
            $data['id_asset'] = $asset->id;
            $data['nama_peminjam'] = $this->input->post('nama_peminjam');
            $data['tanggal_peminjaman'] = $this->input->post('tanggal_peminjaman');
            $data['tanggal_pengembalian'] = $this->input->post('tanggal_pengembalian');
    
            {
                $act = $this->DataPeminjamanAssetModel->insert($data);
                log_activity('Data Peminjaman Aset', 'Meminjam', $asset->nama_asset);
                // echo $this->db->last_query($act);
                if ($act) {
                    $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
                    redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
                }else{
                    $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
                    redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
                }
            }
        }else{
            $this->session->set_flashdata('notif-error', 'Nama Aset tidak ditemukan');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $id_asset = $this->input->post('id_asset');
        $data['nama_peminjam'] = $this->input->post('nama_peminjam_update');
        $data['tanggal_peminjaman'] = $this->input->post('tanggal_peminjaman_update');
        $data['tanggal_pengembalian'] = $this->input->post('tanggal_pengembalian_update');
        
        $stok_lama = $this->db->get_where('data_asset', ['id' => $id_asset])->row();

        $act = $this->DataPeminjamanAssetModel->update($data, $id);
        log_activity('Data Peminjaman Aset', 'Mengubah', $stok_lama->nama_asset);

        if($act){
            // $id = $this->input->post('id_barang');
            // $barang['stok'] = $stok_lama->stok + $jumlah_sebelum - $data['jumlah_barang'];

            // $update = $this->DataBarangModel->update($barang, $id);
        };

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }
    }

    public function delete($id)
    {
        $asset = $this->db->get_where('peminjaman_asset', ['id' => $id])->row();
        $act = $this->DataPeminjamanAssetModel->delete($id);
        log_activity('Data Peminjaman Asset', 'Menghapus', $asset->id);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }
    }
    
    public function validation()
    {
        $id = $this->input->post('id_update');
        $id_asset = $this->input->post('id_asset');
        $data['tgl_validation_pengembalian'] = date('Y-m-d H:i:s');
        $data['validation_user_id'] = $this->session->userdata('id');

        $act = $this->DataPeminjamanAssetModel->update($data, $id);
        $asset = $this->db->get_where('data_asset', ['id' => $id_asset])->row();

        log_activity('Validasi Penerimaan Asset', 'Validasi', $asset->nama_asset);

        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Validasi ');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Validasi ');
            redirect(base_url($this->session->userdata('group_slug').'/peminjaman-asset'));
        }
    }
    
}
?>
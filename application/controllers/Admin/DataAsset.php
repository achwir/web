<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAsset extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataAssetModel');
    }


	public function index()
	{   
        $conf['title'] = 'Data Asset';
        $data['dataasset'] = $this->DataAssetModel->all()->result();
        // echo $this->db->last_query($data['databarang']);
        // echo '<pre>'.print_r($data['databarang'],1).'</pre>';
        // die;
        $data['js'] = 'dataasset';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-asset', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['nama_asset'] = $this->input->post('nama_asset');
        $data['tempat'] = $this->input->post('tempat');
        // $data['stok'] = $this->input->post('stok');

        $act = $this->DataAssetModel->insert($data);
        log_activity('Data Asset', 'Menambah', $data['nama_asset']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-asset'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-asset'));
        }
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['nama_asset'] = $this->input->post('nama_asset_update');
        $data['tempat'] = $this->input->post('tempat_update');

        $act = $this->DataAssetModel->update($data, $id);
        log_activity('Data Asset', 'Mengubah', $data['nama_asset']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-asset'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-asset'));
        }
    }

    public function delete($id)
    {
        $asset = $this->db->get_where('data_asset', ['id' => $id])->row();
        $act = $this->DataAssetModel->delete($id);
        log_activity('Data Asset', 'Menghapus', $asset->nama_asset);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-asset'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-asset'));
        }
    }
}
?>
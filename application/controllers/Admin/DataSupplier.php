<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSupplier extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataSupplierModel');
    }


	public function index()
	{
        $conf['title'] = 'Data Supplier';

        $data['datasupplier'] = $this->DataSupplierModel->all()->result();
        $data['js'] = 'datasupplier';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-supplier', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['nama_supplier'] = $this->input->post('nama_supplier');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['alamat'] = $this->input->post('alamat');

        $act = $this->DataSupplierModel->insert($data);
        log_activity('Data Supplier', 'Menambah', $data['nama_supplier']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-supplier'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-supplier'));
        }
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['nama_supplier'] = $this->input->post('nama_supplier_update');
        $data['no_telp'] = $this->input->post('no_telp_update');
        $data['alamat'] = $this->input->post('alamat_update');

        $act = $this->DataSupplierModel->update($data, $id);
        log_activity('Data Supplier', 'Mengubah', $data['nama_supplier']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-supplier'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-supplier'));
        }
    }

    public function delete($id)
    {
        $supplier = $this->db->get_where('supplier', ['id' => $id])->row();
        $act = $this->DataSupplierModel->delete($id);
        log_activity('Data Supplier', 'Menghapus', $supplier->nama_supplier);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-supplier'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-supplier'));
        }
    }
}
?>
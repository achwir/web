<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarang extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangModel');
    }


	public function index()
	{   
        $conf['title'] = 'Data Barang';
        $data['databarang'] = $this->DataBarangModel->all()->result();
        // echo $this->db->last_query($data['databarang']);
        // echo '<pre>'.print_r($data['databarang'],1).'</pre>';
        // die;
        $data['js'] = 'databarang';

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/data-barang', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

    public function insert()
    {
        $data['kode_barang'] = $this->input->post('kode_barang');
        $data['nama_barang'] = $this->input->post('nama_barang');
        // $data['stok'] = $this->input->post('stok');
        $data['harga_barang'] = $this->input->post('harga_barang');
        $data['jenis_barang'] = $this->input->post('jenis_barang');

        $barcode = $this->set_barcode($data['kode_barang']);
        // var_dump($barcode);
        // die;
        $act = $this->DataBarangModel->insert($data);
        log_activity('Data Barang', 'Menambah', $data['nama_barang']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-barang'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Ditambahkan ');
            redirect(base_url($this->session->userdata('group_slug').'/data-barang'));
        }
    }

    public function update()
    {
        $id = $this->input->post('id_update');
        $data['kode_barang'] = $this->input->post('kode_barang_update');
        $data['nama_barang'] = $this->input->post('nama_barang_update');
        $data['harga_barang'] = $this->input->post('harga_barang_update');
        $data['jenis_barang'] = $this->input->post('jenis_barang_update');

        $act = $this->DataBarangModel->update($data, $id);
        $barcode = $this->set_barcode($data['kode_barang']);

        log_activity('Data Barang', 'Mengubah', $data['nama_barang']);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-barang'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal diubah ');
            redirect(base_url($this->session->userdata('group_slug').'/data-barang'));
        }
    }

    public function delete($id)
    {
        $barang = $this->db->get_where('data_barang', ['id' => $id])->row();
        $act = $this->DataBarangModel->delete($id);
        log_activity('Data Barang', 'Menghapus', $barang->nama_barang);
        if ($act) {
            $this->session->set_flashdata('notif-success', 'Data Berhasil Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-barang'));
        }else{
            $this->session->set_flashdata('notif-error', 'Data Gagal Dihapus ');
            redirect(base_url($this->session->userdata('group_slug').'/data-barang'));
        }
    }

    private function set_barcode($code)
	{
		// Load library
		$this->load->library('Zend');
		// Load in folder Zend
		$this->zend->load('Zend/Barcode');
		// Generate barcode
		$imageResource = Zend_Barcode::factory('code128', 'image', array('text'=>$code), array())->draw();
        imagepng($imageResource, 'assets/barcode/'.$code.'.png');

        return $imageResource;
	}
    
}
?>
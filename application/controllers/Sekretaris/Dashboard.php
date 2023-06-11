<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangModel');
		$this->load->model('DataBarangMasukModel');
		$this->load->model('DataBarangKeluarModel');
		$this->load->model('DataSupplierModel');
		$this->load->model('LogModel');
		$this->load->model('DataUserModel');
    }

	public function index()
	{
        $conf['title'] = 'Dashboard';
        $conf['js'] = 'dashboard';

		$data['total_databarang'] = $this->DataBarangModel->hitung_total();
		$data['total_databarangmasuk'] = $this->DataBarangMasukModel->hitung_total();
		$data['total_databarangkeluar'] = $this->DataBarangKeluarModel->hitung_total();
		$data['total_supplier'] = $this->DataSupplierModel->hitung_total();
		$data['log_activity'] = $this->LogModel->getdata();
        $data['datauser'] = $this->DataUserModel->all()->result();

		// echo '<pre>'.print_r($data,1).'</pre>';
		// die;

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('sekretaris/dashboard', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $conf);
	}

	public function chart_barangmasuk()
	{
		$data = $this->DataBarangMasukModel->get_chart()->result();
		echo json_encode($data);
		// echo '<pre>'.print_r($data, 1).'</pre>';
		// die;
	}

	public function chart_barangkeluar()
	{
		$data = $this->DataBarangKeluarModel->get_chart()->result();
		echo json_encode($data);

		// echo '<pre>'.print_r($data, 1).'</pre>';
		// die;
	}
}
?>
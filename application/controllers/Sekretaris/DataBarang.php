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
		$this->load->view('sekretaris/data-barang', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
	}

}
?>
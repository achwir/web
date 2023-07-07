<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LaporanModel');
        // $this->load->model('DataBarangMasukModel');
    }

    public function databarang()
    {
        $conf['title'] = 'Laporan Data Barang';

        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');

        $data['js'] = 'laporan_data_barang';
        $data['laporan'] = $this->LaporanModel->laporan_data_barang($start, $end)->result();

        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-data-barang', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }

	public function dataasset()
    {
        $conf['title'] = 'Laporan Data Asset';

        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');

        $data['js'] = 'laporan_data_asset';
        $data['laporan'] = $this->LaporanModel->laporan_data_asset($start, $end)->result();

        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-data-asset', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }
    
    public function barangmasuk()
    {
        $conf['title'] = 'Laporan Barang Masuk';

        $id_supplier = $this->input->post('id_supplier');
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');
        $data['js'] = 'laporan_barang_masuk';
        $data['laporan'] = $this->LaporanModel->laporan_barang_masuk($id_supplier, $start, $end)->result();

        // echo $this->db->last_query($data['laporan']);
        // var_dump($data['laporan']);
        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-barang-masuk', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }

    public function barangkeluar()
    {
        $conf['title'] = 'Laporan Barang Keluar';

        $id_bidang = $this->input->post('id_bidang');
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');
        $data['js'] = 'laporan_barang_keluar';
        $data['laporan'] = $this->LaporanModel->laporan_barang_keluar($id_bidang, $start, $end)->result();

        // echo $this->db->last_query($data['laporan']);
        // var_dump($data['laporan']);
        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-barang-keluar', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }

	public function barangpending()
    {
        $conf['title'] = 'Laporan Barang Pending';

        $id_supplier = $this->input->post('id_supplier');
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');
        $data['js'] = 'laporan_barang_pending';
        $data['laporan'] = $this->LaporanModel->laporan_barang_pending($id_supplier, $start, $end)->result();

        // echo $this->db->last_query($data['laporan']);
        // var_dump($data['laporan']);
        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-barang-pending', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }

	public function transaksi()
    {
        $conf['title'] = 'Laporan Data Transaksi';

		$this->load->model('DataBarangModel');
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');
        $data['js'] = 'laporan_transaksi';
        $data['laporan'] = $this->DataBarangModel->all()->result();

        // echo $this->db->last_query($data['laporan']);
        // var_dump($data['laporan']);
        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-transaksi', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }

    public function datauser()
    {
        $conf['title'] = 'Laporan Data User';

        $data['js'] = 'laporan_data_user';
        $data['laporan'] = $this->LaporanModel->laporan_data_user()->result();

        // echo $this->db->last_query($data['laporan']);
        // var_dump($data['laporan']);
        $this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('admin/laporan-data-user', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $data);
    }

    public function exportUser()
	{
		$data['users'] = $this->db->get('users')->result_array();

		// $this->load->view('export/pdf-user', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Daftar User.pdf";
		$this->pdf->load_view('admin/export/pdf-user', $data);

		// // konfigurasi dompdf
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan Surat Keluar.pdf', ['Attachment' => true]);

		exit;
	}

	public function exportBarangmasuk()
	{
		$id_supplier = $this->input->get('id_supplier');
		$start = $this->input->get('dari');
        $end = $this->input->get('sampai');
		$data['barang_masuk'] = $this->LaporanModel->laporan_barang_masuk($id_supplier, $start, $end)->result_array();
		// echo $this->db->last_query($data['barang_masuk']);
		// die;
				// $this->load->view('export/pdf-user', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Laporan Barang.pdf";
		$this->pdf->load_view('admin/export/pdf-barang-masuk', $data);

		// // konfigurasi dompdf
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan Surat Keluar.pdf', ['Attachment' => true]);

		exit;
	}

	public function exportBarangkeluar()
	{
		$id_bidang = $this->input->get('id_bidang');
		$start = $this->input->get('dari');
        $end = $this->input->get('sampai');
		$data['barang_keluar'] = $this->LaporanModel->laporan_barang_keluar($id_bidang, $start, $end)->result_array();

		// $this->load->view('export/pdf-user', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Laporan Barang Keluar.pdf";
		$this->pdf->load_view('admin/export/pdf-barang-keluar', $data);

		// // konfigurasi dompdf
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan Surat Keluar.pdf', ['Attachment' => true]);

		exit;
	}

	public function exportBarangpending()
	{
		$start = $this->input->get('dari');
        $end = $this->input->get('sampai');
		$data['barang_masuk'] = $this->LaporanModel->laporan_barang_pending($start, $end)->result_array();

		// $this->load->view('export/pdf-user', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Daftar Barang Pending.pdf";
		$this->pdf->load_view('admin/export/pdf-barang-masuk', $data);

		// // konfigurasi dompdf
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan Surat Keluar.pdf', ['Attachment' => true]);

		exit;
	}


	public function exportDataBarang()
	{
		$start = $this->input->get('dari');
        $end = $this->input->get('sampai');
		$data['data_barang'] = $this->LaporanModel->laporan_data_barang($start, $end)->result_array();

		// $this->load->view('export/pdf-user', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Laporan Data Barang.pdf";
		$this->pdf->load_view('admin/export/pdf-data-barang', $data);

		// // konfigurasi dompdf
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan Surat Keluar.pdf', ['Attachment' => true]);

		exit;
	}

	public function exportDataAsset()
	{
		$start = $this->input->get('dari');
        $end = $this->input->get('sampai');
		$data['data_asset'] = $this->LaporanModel->laporan_data_asset($start, $end)->result_array();

		// $this->load->view('export/pdf-user', $data);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "Laporan Data Asset.pdf";
		$this->pdf->load_view('admin/export/pdf-asset', $data);

		// // konfigurasi dompdf
		// $paper_size = 'A4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);

		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan Surat Keluar.pdf', ['Attachment' => true]);

		exit;
	}
}
?>
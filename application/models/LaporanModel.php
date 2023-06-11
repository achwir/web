<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanModel extends CI_Model {

    function laporan_data_barang($start, $end)
    {
        if (!empty($start)) {
            $this->db->where('DATE(db.created_at) >= ', $start);
            $this->db->where('DATE(db.created_at) <= ', $end);
        }

        $this->db->select('db.*, SUM(bm.jumlah_barang) as total_bm, SUM(bk.jumlah_barang) as total_bk');
        $this->db->from('data_barang as db');
        $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang', 'LEFT');
        $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang', 'LEFT');
        $this->db->group_by('db.id');
        return $this->db->get();
    }

    function laporan_data_asset($start, $end)
    {
        

        $this->db->select('db.*');
        $this->db->from('data_asset as db');
        // $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang', 'LEFT');
        // $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang', 'LEFT');
        // $this->db->group_by('db.id');
        return $this->db->get();
    }

    function laporan_barang_masuk($start, $end)
    {
        $this->db->select('bm.*, db.kode_barang, db.nama_barang, db.nama_supplier');
        if (!empty($start)) {
            $this->db->where('DATE(bm.tanggal_masuk) >= ', $start);
            $this->db->where('DATE(bm.tanggal_masuk) <= ', $end);
        }

        $this->db->from('barang_masuk as bm');
        $this->db->where('bm.validation_at != ', NULL);
        $this->db->join('data_barang as db', 'bm.id_barang = db.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_barang_pending($start, $end)
    {
        $this->db->select('bm.*, db.kode_barang, db.nama_barang, db.nama_supplier');
        if (!empty($start)) {
            $this->db->where('DATE(bm.tanggal_masuk) >= ', $start);
            $this->db->where('DATE(bm.tanggal_masuk) <= ', $end);
        }

        $this->db->from('barang_masuk as bm');
        $this->db->where('bm.validation_at', NULL);
        $this->db->join('data_barang as db', 'bm.id_barang = db.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_barang_keluar($start, $end)
    {
        $this->db->select('bk.*, db.kode_barang, db.nama_barang, db.nama_supplier');
        if (!empty($start)) {
            $this->db->where('DATE(bk.tanggal_keluar) >= ', $start);
            $this->db->where('DATE(bk.tanggal_keluar) <= ', $end);
        }

        $this->db->from('barang_keluar as bk');
        $this->db->join('data_barang as db', 'bk.id_barang = db.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_data_user()
    {
        $this->db->select('u.*, g.name');
        $this->db->join('groups as g', 'g.id = u.group_id', 'LEFT');
        $this->db->from('users as u');
        return $this->db->get();
    }

}
?>
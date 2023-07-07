<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanModel extends CI_Model {

    function laporan_data_barang($start, $end)
    {
        if (!empty($start)) {
            $this->db->where('DATE(db.created_at) >= ', $start);
            $this->db->where('DATE(db.created_at) <= ', $end);
        }

        $this->db->select('db.*, SUM(bm.jumlah_barang) as total_bm, SUM(bk.jumlah_barang) as total_bk, s.nama_supplier');
        $this->db->from('data_barang as db');
        $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang', 'LEFT');
        $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang', 'LEFT');
        $this->db->join('supplier as s', 'bm.id_supplier = s.id', 'LEFT');
        
        
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

    function laporan_data_peminjaman_asset($id_asset, $start, $end)
    {
        

        $this->db->select('dp.*, da.nama_asset, da.tempat');
        if (!empty($start)) {
            $this->db->where('DATE(dp.tanggal_peminjaman) >= ', $start);
            $this->db->where('DATE(dp.tanggal_pengembalian) <= ', $end);
        }

        $this->db->from('peminjaman_asset as dp');
        $this->db->where('dp.tgl_validation_pengembalian');
        $this->db->join('data_asset as da', 'dp.id_asset = da.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_terima_data_peminjaman_asset($id_asset, $start, $end)
    {
        

        $this->db->select('dp.*, da.nama_asset, da.tempat');
        if (!empty($start)) {
            $this->db->where('DATE(dp.tanggal_peminjaman) >= ', $start);
            $this->db->where('DATE(dp.tanggal_pengembalian) <= ', $end);
        }

        $this->db->from('peminjaman_asset as dp');
        $this->db->where('dp.tgl_validation_pengembalian != ', NULL);
        $this->db->join('data_asset as da', 'dp.id_asset = da.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_data_bidang($id_bidang)
    {
        $this->db->select('bk.*, db.nama_barang, db.jenis_barang, b.nama_bidang');
        if (!empty($id_bidang)) {
            $this->db->where('bk.id_bidang', $id_bidang);
        }  

        $this->db->from('barang_keluar as bk');
        $this->db->join('data_barang as db', 'bk.id_barang = db.id', 'LEFT');
        $this->db->join('bidang as b', 'bk.id_bidang = b.id', 'LEFT');
        // $this->db->join('supplier as s', 'bk.id_supplier = s.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_barang_masuk($id_supplier, $start, $end)
    {
        $this->db->select('bm.*, db.kode_barang, db.nama_barang, s.nama_supplier');
        if (!empty($start)) {
            $this->db->where('DATE(bm.tanggal_masuk) >= ', $start);
            $this->db->where('DATE(bm.tanggal_masuk) <= ', $end);
            $this->db->where('bm.id_supplier', $id_supplier);
        }

        $this->db->from('barang_masuk as bm');
        $this->db->where('bm.validation_at != ', NULL);
        $this->db->join('data_barang as db', 'bm.id_barang = db.id', 'LEFT');
        $this->db->join('supplier as s', 'bm.id_supplier = s.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_barang_keluar($start, $end)
    {
        $this->db->select('bk.*, db.kode_barang, db.nama_barang, db.jenis_barang, b.nama_bidang');
        if (!empty($start)) {
            $this->db->where('DATE(bk.tanggal_keluar) >= ', $start);
            $this->db->where('DATE(bk.tanggal_keluar) <= ', $end);
        }  

        // $this->db->where('bk.tgl_validation_pengembalian', NULL);
        $this->db->from('barang_keluar as bk');
        $this->db->join('data_barang as db', 'bk.id_barang = db.id', 'LEFT');
        $this->db->join('bidang as b', 'bk.id_bidang = b.id', 'LEFT');
        // $this->db->join('supplier as s', 'bk.id_supplier = s.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_barang_pending($id_supplier, $start, $end)
    {
        $this->db->select('bm.*, db.kode_barang, db.nama_barang, s.nama_supplier');
        if (!empty($start)) {
            $this->db->where('DATE(bm.tanggal_masuk) >= ', $start);
            $this->db->where('DATE(bm.tanggal_masuk) <= ', $end);
            $this->db->where('bm.id_supplier', $id_supplier);

        }

        $this->db->from('barang_masuk as bm');
        $this->db->where('bm.validation_at', NULL);
        $this->db->join('data_barang as db', 'bm.id_barang = db.id', 'LEFT');
        $this->db->join('supplier as s', 'bm.id_supplier = s.id', 'LEFT');


        return $this->db->get();
    }

    function laporan_pengembalian_barang($start, $end)
    {
        $this->db->select('bk.*, db.kode_barang, db.nama_barang, db.jenis_barang, b.nama_bidang');
        if (!empty($start)) {
            $this->db->where('DATE(bk.tanggal_peminjaman) >= ', $start);
            $this->db->where('DATE(bk.tanggal_peminjaman) <= ', $end);
        }  

        $this->db->where('bk.tgl_validation_pengembalian != ', NULL);
        $this->db->from('barang_keluar as bk');
        $this->db->join('data_barang as db', 'bk.id_barang = db.id', 'LEFT');
        $this->db->join('bidang as b', 'bk.id_bidang = b.id', 'LEFT');

        return $this->db->get();
    }

    function laporan_data_user()
    {
        $this->db->select('u.*, g.name');
        $this->db->join('groups as g', 'g.id = u.group_id', 'LEFT');
        $this->db->from('users as u');
        return $this->db->get();
    }

    function laporan_data_supplier()
    {
        return $this->db->get('supplier');
    }

}
?>
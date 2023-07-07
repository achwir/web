<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangMasukModel extends CI_Model {

    function all()
    {
        $this->db->select('db.nama_barang, su.nama_supplier, bm.*');
        $this->db->from('barang_masuk as bm');
        $this->db->join('data_barang as db', 'db.id = bm.id_barang');
        $this->db->join('supplier as su', 'su.id = bm.id_supplier');
        $this->db->order_by('bm.created_at', 'DESC');
        return $this->db->get();
    }

    function not_validation()
    {
        $this->db->select('db.nama_barang, su.nama_supplier, bm.*');
        $this->db->from('barang_masuk as bm');
        $this->db->join('data_barang as db', 'db.id = bm.id_barang');
        $this->db->join('supplier as su', 'su.id = bm.id_supplier');
        $this->db->where('bm.validation_at', NULL);
        return $this->db->get();
    }

    function validated()
    {
        $this->db->select('db.nama_barang, su.nama_supplier, bm.*');
        $this->db->from('barang_masuk as bm');
        $this->db->join('data_barang as db', 'db.id = bm.id_barang');
        $this->db->join('supplier as su', 'su.id = bm.id_supplier');
        $this->db->where('bm.validation_at is NOT NULL');
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert('barang_masuk', $data);
    }

    function update($data, $id)
    {
        return $this->db->update('barang_masuk', $data, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('barang_masuk', array('id' => $id));
    }

    function sum_stok($id)
    {
        $this->db->select('SUM(jumlah_barang) as total_bm');
        $this->db->where('id_barang', $id);
        $this->db->from('barang_masuk');
        return $this->db->get()->row()->total_bm;
    }

    function hitung_total()
    {
        return $this->db->get('barang_masuk')->num_rows();
    }

    function get_chart()
    {
        // 'SELECT month(j.tanggal) as bulan, sum(dt.total) as jumlah
        // FROM jual as j
        // LEFT JOIN dtjual as dt 
        // ON dt.notrans = j.notrans
        // WHERE year(j.tanggal) = '2020'
        // GROUP BY month(j.tanggal)
        // ORDER BY month(j.tanggal)';

        $this->db->select('month(bm.tanggal_masuk) as bulan, sum(bm.jumlah_barang) as jumlah');
        $this->db->from('barang_masuk as bm');
        $this->db->where('year(bm.tanggal_masuk)', date('Y'));
        $this->db->group_by('month(bm.tanggal_masuk)');
        $this->db->order_by('month(bm.tanggal_masuk)');
        return $this->db->get();
    }

    
    function get_chart_years()
    {
        // 'SELECT month(j.tanggal) as bulan, sum(dt.total) as jumlah
        // FROM jual as j
        // LEFT JOIN dtjual as dt 
        // ON dt.notrans = j.notrans
        // WHERE year(j.tanggal) = '2020'
        // GROUP BY month(j.tanggal)
        // ORDER BY month(j.tanggal)';

        $this->db->select('year(bm.tanggal_masuk) as year, sum(bm.jumlah_barang) as jumlah');
        $this->db->from('barang_masuk as bm');
        // $this->db->where('year(bm.tanggal_masuk)', date('Y'));
        $this->db->group_by('year(bm.tanggal_masuk)');
        $this->db->order_by('year(bm.tanggal_masuk)');
        return $this->db->get();
    }
}
?>
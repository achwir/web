<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangKeluarModel extends CI_Model {

    function all()
    {
        $this->db->select('db.nama_barang, bk.*');
        $this->db->from('barang_keluar as bk');
        $this->db->join('data_barang as db', 'db.id = bk.id_barang');
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert('barang_keluar', $data);
    }

    function update($data, $id)
    {
        return $this->db->update('barang_keluar', $data, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('barang_keluar', array('id' => $id));
    }

    function sum_stok($id)
    {
        $this->db->select('SUM(jumlah_barang) as total_bk');
        $this->db->where('id_barang', $id);
        $this->db->from('barang_keluar');
        return $this->db->get()->row()->total_bk;
    }

    function hitung_total()
    {
        return $this->db->get('barang_keluar')->num_rows();
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

        $this->db->select('month(bk.tanggal_keluar) as bulan, sum(bk.jumlah_barang) as jumlah');
        $this->db->from('barang_keluar as bk');
        $this->db->where('year(bk.tanggal_keluar)', date('Y'));
        $this->db->group_by('month(bk.tanggal_keluar)');
        $this->db->order_by('month(bk.tanggal_keluar)');
        return $this->db->get();
    }
}
?>
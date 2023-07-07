<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataPeminjamanAssetModel extends CI_Model {

    function all()
    {
        $this->db->select('da.nama_asset, da.tempat, pa.*');
        $this->db->from('peminjaman_asset as pa');
        $this->db->join('data_asset as da', 'da.id = pa.id_asset');
        return $this->db->get();
    }

    function not_validation()
    {
        $this->db->select('da.nama_asset, da.tempat, pa.*');
        $this->db->from('peminjaman_asset as pa');
        $this->db->join('data_asset as da', 'da.id = pa.id_asset');
        $this->db->where('da.validation_at', NULL);
        return $this->db->get();
    }

    function validated()
    {
        $this->db->select('da.nama_asset, da.tempat, pa.*');
        $this->db->from('peminjaman_asset as pa');
        $this->db->join('data_asset as da', 'da.id = pa.id_asset');
        $this->db->where('da.validation_at is NOT NULL');
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert('peminjaman_asset', $data);
    }

    function update($data, $id)
    {
        return $this->db->update('peminjaman_asset', $data, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('peminjaman_asset', array('id' => $id));
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
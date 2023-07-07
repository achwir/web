<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataSupplierModel extends CI_Model {

    function all()
    {
        // $this->db->select('db.*, SUM(bm.jumlah_barang) as total_bm, SUM(bk.jumlah_barang) as total_bk');
        // $this->db->from('data_barang as db');
        // $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang');
        // $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang');
        // $this->db->group_by('db.id');
        return $this->db->get('supplier');
    }

    function insert($data)
    {
        return $this->db->insert('supplier', $data);
    }

    function delete($id)
    {
        return $this->db->delete('supplier', array('id' => $id));
    }

    function update($data, $id)
    {
        return $this->db->update('supplier', $data, ['id' => $id]);
    }

    function datasupplier($id)
    {
        return $this->db->delete('supplier', array('id' => $id));
    }

    function hitung_total()
    {
        return $this->db->get('supplier')->num_rows();
    }
}
?>
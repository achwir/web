<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarangModel extends CI_Model {

    function all()
    {
        $this->db->select('db.*');
        $this->db->from('data_barang as db');
        // $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang', 'LEFT');
        // $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang', 'LEFT');
        // $this->db->group_by('db.id');
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert('data_barang', $data);
    }

    function delete($id)
    {
        return $this->db->delete('data_barang', array('id' => $id));
    }

    function update($data, $id)
    {
        return $this->db->update('data_barang', $data, ['id' => $id]);
    }

    function datastokbarang($id)
    {
        return $this->db->delete('data_barang', array('id' => $id));
    }

    function hitung_total()
    {
        return $this->db->get('data_barang')->num_rows();
    }
}
?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBidangModel extends CI_Model {

    function all()
    {
        $this->db->select('db.*');
        $this->db->from('bidang as db');
        // $this->db->join('barang_masuk as bm', 'db.id = bm.id_barang', 'LEFT');
        // $this->db->join('barang_keluar as bk', 'db.id = bk.id_barang', 'LEFT');
        // $this->db->group_by('db.id');
        return $this->db->get();
    }

    function insert($data)
    {
        return $this->db->insert('bidang', $data);
    }

    function delete($id)
    {
        return $this->db->delete('bidang', array('id' => $id));
    }

    function update($data, $id)
    {
        return $this->db->update('bidang', $data, ['id' => $id]);
    }
    
    function hitung_total()
    {
        return $this->db->get('bidang')->num_rows();
    }
}
?>
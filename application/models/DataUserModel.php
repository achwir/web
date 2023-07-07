<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataUserModel extends CI_Model {

    function all()
    {
        $this->db->select('u.id, u.username, u.nama_lengkap, u.email, u.foto, u.group_id, u.status, u.created_at, g.name');
        $this->db->from('users as u');
        $this->db->join('groups as g', 'g.id=u.group_id', 'left');
        return $this->db->get();
    }

    function getDataByID($id)
    {
        return $this->db->get_where('users', ['id' => $id]);
    }

    function insert($data)
    {
        return $this->db->insert('users', $data);
    }

    function update($data, $id)
    {
        return $this->db->update('users', $data, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }

    function hitung_total()
    {
        return $this->db->get('users')->num_rows();
    }
}
?>
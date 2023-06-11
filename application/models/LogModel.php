<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LogModel extends CI_Model {
    public function insert($data)
    {
        return $this->db->insert('activity_logs',$data);
    }

    public function getdata()
    {
        return $this->db->get('activity_logs')->result();
    }
}
?>
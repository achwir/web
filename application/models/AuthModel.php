<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    function login($username)
    {
        // SELECT * FROM user WHERE username = $username;
        $this->db->select('u.*, g.name as group_name, g.slug as group_slug');
        $this->db->from('users as u');
        $this->db->join('groups as g', 'g.id = u.group_id', 'LEFT');
        $this->db->where('username', $username);

        return $this->db->get();
    }

    function register($username,$password,$nama_lengkap,$email)
    {
        $data = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'nama_lengkap'=>$nama_lengkap,
			'email'=>$email
		);

        return $this->db->insert('users', $data);
    }

}
?>
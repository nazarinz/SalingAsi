<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function authenticate($username, $password) {
        $query = $this->db->get_where('admin_users', array('username' => $username, 'password' => $password));
        return $query->row();
    }
}

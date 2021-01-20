<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'users';
    }

    public function get_user_by_username($username) {
        $query = $this->db->get_where($this->table, array('username' => $username));
        $result = $query->result_array();
        if($result) {
            return $result[0];
        }
        
        return Null;
    }
}


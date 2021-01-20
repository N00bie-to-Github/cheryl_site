<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

    public function __construct() {
        parent::__construct();
    }

    public function get_keywords($name = 'main') {
        $q = $this->db->get_where('keywords', ['name' => $name]);
        $result = $q->result_array();
        return $result[0];
    }

    public function update_keywords($keywords, $name='main') {
        $this->db->set('contents', $keywords);
        $this->db->where('name', $name);
        $this->db->update('keywords'); 
    }

}

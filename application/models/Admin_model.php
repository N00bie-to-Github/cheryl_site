<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

    public function __construct() {
        parent::__construct();
    }

    public function get_keyword_list($name = 'main') {
        $q = $this->db->get_where('keywords', ['name' => $name]);
        $result = $q->result_array();
        return $result[0];
    }
    
    public function get_contact_list($name = 'main') {
        $q = $this->db->get_where('contact_lists', ['name' => $name]);
        $result = $q->result_array();
        return $result[0];
    }
    
    public function get_config($name = 'main') {
        $q = $this->db->get_where('site_configs', ['name' => $name]);
        $result = $q->result_array();
        return $result[0];
    }

    public function update_keyword_list($keywords, $name='main') {
        $this->db->set('contents', $keywords);
        $this->db->where('name', $name);
        $this->db->update('keywords'); 
    }
    
    public function update_contacts_list($contact_list, $name='main') {
        $this->db->set('contents', $contact_list);
        $this->db->where('name', $name);
        $this->db->update('contact_lists'); 
    }
    
    public function update_site_config($data, $name='main') {
        $this->db->where('name', $name);
        $this->db->update('site_configs', $data); 
    }
    
}

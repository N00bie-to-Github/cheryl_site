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

    public function update_keyword_list($keywords, $name = 'main') {
        $this->db->set('contents', $keywords);
        $this->db->where('name', $name);
        $this->db->update('keywords');
    }

    public function update_contacts_list($contact_list, $name = 'main') {
        $this->db->set('contents', $contact_list);
        $this->db->where('name', $name);
        $this->db->update('contact_lists');
    }

    public function update_site_config($data, $name = 'main') {
        $this->db->where('name', $name);
        $this->db->update('site_configs', $data);
    }

    public function get_users() {
        $q = $this->db->get('users');
        return $q->result_array();
    }

    public function get_user_by_id($id) {
        $q = $this->db->get_where('users', ['id' => $id]);
        $result = $q->result_array();
        return $result[0];
    }

    public function update_pw($id, $password) {
        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $this->db->update('users');
    }

    public function add_user($data) {
        $this->db->insert('users', $data);
    }

    public function delete_user_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    public function get_page($page_name) {
        $q = $this->db->get_where('pages', ['name' => $page_name]);
        $result = $q->result_array();
        return $result[0];
    }

    public function update_page($page_name, $data) {
        $this->db->where('name', $page_name);
        $this->db->update('pages', $data);
    }

    public function get_images() {
        $q = $this->db->get('images');
        return $q->result_array();
    }

    public function add_image($data) {
        $this->db->insert('images', $data);
    }

    public function get_image_by_id($id) {
        $q = $this->db->get_where('images', ['id' => $id]);
        $result = $q->result_array();
        return $result[0];
    }

    public function delete_image($id) {
        $this->db->where('id', $id);
        $this->db->delete('images');
    }

    public function update_image($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('images', $data);
    }

}

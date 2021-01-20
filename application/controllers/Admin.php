<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        
        $this->load->library('session');
        
        // Get the page being called
        $page = $this->uri->segment(2);
        // Get the login flag
        $logged_in = $this->session->userdata('logged_in');
        // Redirect the user to home if they're logged in
        $index_pages = [Null, 'index', ''];
        
        if(!$logged_in && !in_array($page, $index_pages)) {
            redirect('admin');
        }
    }

    public function index() {
        $this->load->model('user_model');
        
        $logged_in = $this->session->userdata('logged_in');
        
        // If the user is logged in then we're done
        if($logged_in) {
            redirect('admin/home');
        }
        
        $error = '';

        $username = $this->input->post('username');
        //default password: 'wW@chtw00rd'
        $password = hash('sha256', $this->input->post('password'));
        
        if($username) {
            $user = $this->user_model->get_user_by_username($username);
            
            $matches = $user['password'] === $password;
            
            if($matches) {
                $this->session->set_userdata('logged_in', True);
                redirect('admin/home');
            }
            else {
                $error = 'Wrong username and/or password!';
            }
        }
        
        $this->load->view('admin/login', [
            'error' => $error
        ]);
    }
    
    public function home() {
        $this->load->model('admin_model');
        
        // Get the type of form that it is
        $form = $this->input->post('form');
        $messages = [];
        
        if($form === 'keywords') {
            $keywords = $s2 = preg_replace('/\s+/', ', ', preg_replace('/,/', ' ', $this->input->post('keywords')));
            $unique_keywords = array_unique(explode(',', $keywords));
            $this->admin_model->update_keywords(join(',', $unique_keywords));
            array_push($messages, 'Keyword\'s Updated!');
        }

        $keywords = $this->admin_model->get_keywords('main');
        
        $this->load->view('admin/base', [
            'heading' => 'Home',
            'content' => $this->load->view('admin/home', [
                'keywords' => $keywords
            ], True),
            'messages' => $messages
        ]);
        
    }
    
    public function logout() {
        // Unset the login flag
        $this->session->set_userdata('logged_in', False);
        // Send them back to the login page
        redirect('admin');
    }
}

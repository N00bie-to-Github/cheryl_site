<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model', 'site_model');
    }
    /**
     * Index Page for this controller.
     */
    public function index() {
        $page = $this->site_model->get_page('home');
        $config = $this->site_model->get_config('main');

        $this->load->view('base', [
            'page' => 'home',
            'config' => $config,
            'content' => $this->load->view('home', [
                'page' => $page
            ], TRUE)
        ]);
    }
}

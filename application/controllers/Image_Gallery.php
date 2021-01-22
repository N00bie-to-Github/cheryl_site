<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image_Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model', 'site_model');
    }
    /**
     * Index Page for this controller.
     */
    public function index() {
        $images = $this->site_model->get_images();
        $config = $this->site_model->get_config('main');

        $this->load->view('base', [
            'page' => 'gallery',
            'config' => $config,
            'content' => $this->load->view('gallery', [
                'images' => $images
            ], TRUE)
        ]);
    }
}

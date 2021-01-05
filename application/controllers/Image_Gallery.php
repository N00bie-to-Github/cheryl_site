<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image_Gallery extends CI_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->load->view('gallery');
    }
    
}

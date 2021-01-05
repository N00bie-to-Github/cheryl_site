<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->load->view('gallery');
    }
    
}

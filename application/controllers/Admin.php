<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public $image_dir = '/uploads/';
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('url');

        $this->load->library('session');

        $this->load->model('admin_model');
        $this->load->helper('admin_helper');

        // Get the page being called
        $page = $this->uri->segment(2);
        // Get the login flag
        $logged_in = $this->session->userdata('logged_in');
        // Redirect the user to home if they're logged in
        $index_pages = [NULL, 'index', ''];

        if(!$logged_in && !in_array($page, $index_pages)) {
            redirect('admin');
        }

        if(!array_key_exists('messages', $_SESSION)) {
            $_SESSION['messages'] = [];
        }
    }

    private function _notify($message) {
        array_push($_SESSION['messages'], $message);
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
                $this->session->set_userdata('logged_in', TRUE);
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
        // Get the type of form that it is
        $route = $this->input->post('route');

        if($route === 'keywords') {
            $keywords = $this->input->post('keywords');
            $unique_keywords = uniqueCommaList($keywords);
            $this->admin_model->update_keyword_list($unique_keywords);
            $this->_notify('Keyword List Updated!');
        }
        elseif($route === 'contacts') {
            $contacts = $this->input->post('contacts');
            $unique_contacts = uniqueCommaList($contacts);
            $this->admin_model->update_contacts_list($unique_contacts);
            $this->_notify('Contact List Updated!');
        }
        else if($route === 'config') {
            $data = [
                'site_title' => $this->input->post('site_title')
            ];
            $this->admin_model->update_site_config($data);
            $this->_notify('Site Configuration Updated!');
        }

        $keyword_list = $this->admin_model->get_keyword_list('main');
        $contact_list = $this->admin_model->get_contact_list('main');
        $site_config = $this->admin_model->get_config('main');

        $this->load->view('admin/base', [
            'heading' => 'Home',
            'content' => $this->load->view('admin/home', [
                'keyword_list' => $keyword_list,
                'contact_list' => $contact_list,
                'site_config' => $site_config,
                    ], TRUE)
        ]);
    }

    public function users($route = '', $id = NULL) {
        $users = $this->admin_model->get_users();

        if($route === 'changepw') {
            $error = '';

            $pw1 = $this->input->post('password');
            $pw2 = $this->input->post('password2');

            if($this->input->post()) {
                if($pw1 !== $pw2) {
                    $error = 'The passwords do not match';
                }
                else {
                    $password = hash('sha256', $pw1);
                    $this->admin_model->update_pw($id, $password);
                    $this->_notify('Password Updated');
                    redirect('/admin/users');
                }
            }

            $this->load->view('admin/base', [
                'heading' => 'Users | Change Password',
                'content' => $this->load->view('admin/users/changepw', [
                    'error' => $error
                        ], TRUE)
            ]);
        }
        else if($route === 'add') {
            $error = '';

            $username = $this->input->post('username');
            $pw1 = $this->input->post('password');
            $pw2 = $this->input->post('password2');

            if($this->input->post()) {
                if($pw1 !== $pw2) {
                    $error = 'The passwords do not match';
                }
                else {
                    $password = hash('sha256', $pw1);
                    $this->admin_model->add_user([
                        'username' => $username,
                        'password' => $password
                    ]);
                    $this->_notify('User Added');
                    redirect('/admin/users/home');
                }
            }

            $this->load->view('admin/base', [
                'heading' => 'Users | New User',
                'content' => $this->load->view('admin/users/adduser', [
                    'error' => $error
                        ], TRUE)
            ]);
        }
        elseif($route === 'delete') {
            $this->admin_model->delete_user_by_id($id);
            $this->_notify('User Deleted!');
            redirect('/admin/users/home');
        }
        else {
            $this->load->view('admin/base', [
                'heading' => 'Users',
                'content' => $this->load->view('admin/users/home', [
                    'users' => $users
                        ], TRUE)
            ]);
        }
    }

    public function pages($page_name) {
        $pages = ['home', 'about'];

        // If it's not a supported page
        if(!in_array($page_name, $pages)) {
            redirect('/admin/users/home');
        }

        $data = $this->input->post();

        if($data) {
            $page = $this->admin_model->get_page($page_name);
            $heading = $page['heading'];
            $this->admin_model->update_page($page_name, $data);
            $this->_notify("The \"$heading\" page has been updated");
        }

        $page = $this->admin_model->get_page($page_name);
        $heading = $page['heading'];


        $this->load->view('admin/base', [
            'heading' => "Page - $heading",
            'content' => $this->load->view("admin/pages/$page_name", [
                'page' => $page
                    ], TRUE)
        ]);
    }

    public function images($route = '', $id = NULL) {
        $this->load->helper('form');
        $error = '';

        if($route === 'add') {
            $data = $this->input->post();
            if($data) {
                // The image directory the file gets uploaded to
                $image_dir = $this->image_dir;

                $config['upload_path'] = ".$image_dir";
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = TRUE;
                $config['file_ext_tolower'] = TRUE;
                $config['remove_spaces'] = TRUE;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if(!$this->upload->do_upload('file')) {
                    $error = $this->upload->display_errors();
                }
                else {
                    // Get the upload data
                    $img_data = $this->upload->data();
                    // Get the filename
                    $filename = $img_data['file_name'];
                    // Get the time in milliseconds
                    $data['url'] = "$image_dir$filename";
                    // Get the original name
                    $data['filename'] = $img_data['orig_name'];
                    // Insert it into the database
                    $this->admin_model->add_image($data);

                    $this->_notify('Image uploaded!');

                    redirect('admin/images');
                }
            }

            $this->load->view('admin/base', [
                'heading' => 'Images | Add Image',
                'content' => $this->load->view('admin/images/addimage', [
                    'error' => $error
                        ], TRUE)
            ]);
        }
        elseif($route === 'delete') {
            $this->load->helper("file");
            $image = $this->admin_model->get_image_by_id($id);
            $path = '.'.$image['url'];
            // Check if the file exists and delete it
            if(file_exists($path)){
                unlink($path);
            }
            // Remove the database entry
            $this->admin_model->delete_image($id);
            $this->_notify('Image deleted');
            redirect('admin/images');
        }
        elseif($route === 'update') {
            $data = $this->input->post();

            if($data) {
                $this->admin_model->update_image($id, $data);
                $this->_notify('Image updated');
                redirect('admin/images');
            }
            else {
                $image = $this->admin_model->get_image_by_id($id);

                $this->load->view('admin/base', [
                    'heading' => "Update Image",
                    'content' => $this->load->view("admin/images/updateimage", [
                        'image' => $image
                            ], TRUE)
                ]);
            }
        }
        else {
            $images = $this->admin_model->get_images();

            $this->load->view('admin/base', [
                'heading' => "Images",
                'content' => $this->load->view("admin/images/home", [
                    'images' => $images
                        ], TRUE)
            ]);
        }
    }

    public function logout() {
        // Unset the login flag
        $this->session->set_userdata('logged_in', False);
        // Send them back to the login page
        redirect('/admin/users/home');
    }

}

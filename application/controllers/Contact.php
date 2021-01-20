<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Load form validation library
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data = $formData = array();
        
        // If contact request is submitted
        if($this->input->post('contactSubmit')){
            
            // Get the form data
            $formData = $this->input->post();
            
            // Form field validation rules
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            
            // Validate submitted form data
            if($this->form_validation->run() == true){
                
                // Define email data
                $mailData = array(
                    'name' => $formData['name'],
                    'email' => $formData['email'],
                    'subject' => $formData['subject'],
                    'message' => $formData['message']
                );
                
                
                // Send an email to the site admins
                foreach (ADMIN_EMAILS as $to) {
                    $send = $this->sendEmail($mailData, $to, 'request@preciouosmemoriesandevents.com');
                }
                
                // Check email sending status
                if($send){
                    // Unset form data
                    $formData = array();
                    
                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.'
                    );
                }else{
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.'
                    );
                }
            }
        }
        
        // Pass POST data to view
        $data['postData'] = $formData;
        
        // Pass the data to view
        $this->load->view('contact', $data);
    }
    
    public function test($key="") {
        if($key === 'tanden11') {
            try {
                // Define email data
                    $mailData = array(
                        'name' => "Precious Memories & Events",
                        'email' => "example@preciousmemoriesandevents.com",
                        'subject' => "Test",
                        'message' => "This is a test of the email and notification system."
                    );


                    // Send an email to the site admins
                    foreach (ADMIN_EMAILS as $to) {
                        echo "Sending mail to ".$to."<br/>";
                        $send = $this->sendEmail($mailData, $to, 'request@preciousmemoriesandevents.com');
                    }
                    echo "Done";
            } 
            catch (Exception $ex) {
                echo "No worky bro";
            }
        }
        else {
            echo 'Hi there';
        }
    }
    
    private function sendEmail($mailData, $to, $from){
        // Load the email library
        $this->load->library('email');
        
        // Mail config
        $fromName = 'Precious Memories';
        $mailSubject = 'Contact Request Submitted by '.$mailData['name'];
        
        // Mail content
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Subject: </b>'.$mailData['subject'].'</p>
            <p><b>Message: </b>'.$mailData['message'].'</p>
        ';
            
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        
        // Send email & return status
        return $this->email->send()?true:false;
    }
    
}
<?php

class Register extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->library('session'); 
        $this->load->helper(array('form'));
        
        $this->load->library('form_validation');
    }
    
    public function create(){
        $postdata = $this->input->post(); // store the post values in variable.
          /* Load form helper */ 
         
			
         /* Set validation rule for name field in the form */ 
        
         
        
        try {
            $email = $postdata['email'];
            $numrows = $this->User_model->getTotalRecord($email); //get the total number of rows behalf of email id.
            if($numrows > 0){ // if user already register with us then system will showing an error message.
                $this->session->set_flashdata('error', "Your Email-Id is already register with us. Click here to Login In");
                $this->session->set_flashdata('user_data', $postdata); // set post data in session for persistence.
                redirect('/Home/register_page');
            } else {
                $save = $this->User_model->saveRecord($postdata); // save user details into db.
                if($save){
                    $this->session->set_flashdata('success', "Thanks for connecting with us. Click here to Login In");
                    redirect('/Home/register_page');
                } else {
                    $this->session->set_flashdata('error', "Something went wrong. Please try again after some time.");
                    $this->session->set_flashdata('user_data', $postdata); // set post data in session for persistence.
                    redirect('/Home/register_page');
                }
            }
        } catch (Exception $e) {
            // this will not catch DB related errors. But it will include them, because this is more general. 
            log_message('error: ',$e->getMessage());
            return;
        }
    }
}


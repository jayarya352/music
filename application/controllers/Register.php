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

            $email = $postdata['email'];
            
            $numrows = $this->User_model->getTotalRecord($email); //get the total number of rows behalf of email id.
            
            if($numrows > 0){ // if user already register with us then system will showing an error message.
                echo "Your Email-Id is already register with us. Click here to Login In"; die;
                // $this->session->set_flashdata('user_data', $postdata); // set post data in session for persistence.
                // redirect('/Home/register_page');
            } else {
                $save = $this->User_model->saveRecord($postdata); // save user details into db.
                if($save){
                    echo 'success'; die;
                    
                } else {
                    echo "Something went wrong. Please try again after some time."; die;
                    // $this->session->set_flashdata('user_data', $postdata); // set post data in session for persistence.
                    // redirect('/Home/register_page');
                }
            }

    }
}


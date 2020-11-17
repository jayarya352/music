<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper();
        $this->load->library('session');
        $this->load->model('User_model');

    }	

    
    public function login(){
       
        $email = $this->input->post('username'); // store the post values in variable.
        $pass = $this->input->post('password'); 
        // $getUserData= $this->User_model->doLogin($user,$pass);
        // $this->load->view('front/login_page');
        // try {
            
            $getUserData = $this->User_model->doLogin($email,$pass); //get the total number of rows behalf of email id.
            $count = count($getUserData); //This function use for count rows of selected data.
            
            if(!$count > 0){ // if user already register with us then system will showing an error message.
            echo "Your Email Id or Password incorrect"; 
            // $this->session->set_flashdata('user_data', $email); // set post data in session for persistence.
               
                // redirect('/Home/login_page');
            } else {
                    $userdata = array(
                        'name' => $getUserData[0]['name'],
                        'userId' => $getUserData[0]['id'],
                        'useremail' => $getUserData[0]['email'],
                        'role_id' => $getUserData[0]['role_id']
                    );
                    $this->session->set_userdata('userDetail',$userdata);
                    echo 'success'; 

                    
                    // $this->session->set_userdata('uid',$userdata['userId']);
                    // $this->session->set_userdata('uid',$email);
                //      foreach($get_data as $row){
                //     $this->session->set_userdata('uid',$row['id']);
                // }
                    // $data=$this->session->userdata('uid');
                    // print_r($data); die;
                    // redirect('/Home');
            }

        // } catch (Exception $e) {
        //     // this will not catch DB related errors. But it will include them, because this is more general. 
        //     log_message('error: ',$e->getMessage());
        //     return;
        // }
    }

    public function logout(){
        session_destroy();
        // $this->session->unset_userdata('userDetail');
        redirect('/Home');
    }
	

}

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

    public function index(){
        $this->load->view('back/login');
    }
    public function login(){
    //    echo 'helo'; die;
        $email = $this->input->post('username'); // store the post values in variable.
        $pass = $this->input->post('password'); 
            
            $getUserData = $this->User_model->doLogin($email,$pass); //get the total number of rows behalf of email id.
            $count = count($getUserData); //This function use for count rows of selected data.
            
            if(!$count > 0){ // if user already register with us then system will showing an error message.
                $this->session->set_flashdata('Error', 'Your Email Id or Password incorrect!');
                $this->load->view('back/login');
            
            } else {
                    $userdata = array(
                        'name' => $getUserData[0]['name'],
                        'userId' => $getUserData[0]['id'],
                        'useremail' => $getUserData[0]['email'],
                        'role_id' => $getUserData[0]['role_id']
                    );
                    $this->session->set_userdata('userDetail',$userdata);
                    redirect('/admin');
            }   
    }

    public function logout(){
        session_destroy();
        // $this->session->unset_userdata('userDetail');
        redirect('/login/index');
    }
	

}

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
    
        public function myAccount(){
            $this->session->userdata('user_email'); 
        }
	

}

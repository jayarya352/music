<?php 

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class UserApiController extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->library('session'); 
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
    }
    public function addUser_post(){
        $data = $this->input->post();
        $save = $this->User_model->saveRecord($data); // save user details into db.
        // print_R($data); die;
    }
}


?>
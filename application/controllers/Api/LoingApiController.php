<?php 

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class LoingApiController extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->library('session'); 
    }
    public function index_post(){  
        $postdata = json_decode(file_get_contents('php://input'), true);
        $email = $postdata['email'];
        $pass = $postdata['password']; 
        $getUserData = $this->User_model->doLogin($email,$pass); //get the total number of rows behalf of email id.
        $count = count($getUserData); //This function use for count rows of selected data.
        
        if(!$count > 0){ // if user already register with us then system will showing an error message.
            $this->response(array(
                "status" => 0,
                "message"=> "Your Email Id or Password incorrect!"
            ),RestController::HTTP_NOT_ACCEPTABLE);
        } else {
            $userdata = array(
                'name' => $getUserData[0]['name'],
                'userId' => $getUserData[0]['id'],
                'useremail' => $getUserData[0]['email'],
                'role_id' => $getUserData[0]['role_id']
            );
            $this->session->set_userdata('userDetail',$userdata);
            $this->response(array(
                "status" => 1,
                "message" => "Success"
                ), RestController::HTTP_OK);
        }
    }
}


?>
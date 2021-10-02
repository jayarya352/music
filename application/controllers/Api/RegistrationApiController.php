<?php 

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class RegistrationApiController extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->library('session'); 
    }
    public function index_post(){  
        $postdata = json_decode(file_get_contents('php://input'), true);
        $email = $postdata['email'];
        $numrows = $this->User_model->getTotalRecord($email); //get the total number of rows behalf of email id.    
        if($numrows > 0){
            $this->response(array(
                "status" => 0,
                "message"=> "Your Email-Id is already register with us."
            ),RestController::HTTP_NOT_ACCEPTABLE);
        } else {
            $save = $this->User_model->saveRecord($postdata); // save user details into db.
            if(!empty($save)){
                $this->response(array(
                    "status" => 1,
                    "message" => "Success"
                  ), RestController::HTTP_OK);
            } else {
                $this->response(array(
                    "status" => 0,
                    "message" => "Failed to create User"
                  ), RestController::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}


?>
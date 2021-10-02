<?php 

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class SongDetailApiController extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Song_model');
        $this->load->model('Artist_model');
        $this->load->library('session'); 
    }
    public function index_get(){
        
        $data['SongDetails'] = $this->Song_model->getAllsong_detail('songs', @$_GET['id']);
        // return $this->output
        //     ->set_content_type('application/json')
        //     ->set_status_header(200)
        //     ->set_output(json_encode($data));
        return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($data));
    }
}


?>
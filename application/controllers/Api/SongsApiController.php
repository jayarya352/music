<?php 

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class SongsApiController extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Song_model');
        $this->load->model('Artist_model');
        $this->load->model('Playlist_model');
        $this->load->library('session'); 
    }
    public function index_get(){
        $param = $this->input->get('name');
        
        $data['data'] = $this->Song_model->getSongsByParam($param);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}


?>
<?php 

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class HomeApiController extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Song_model');
        $this->load->model('Artist_model');
        $this->load->model('Playlist_model');
        $this->load->library('session'); 
    }
    public function index_get(){
        
        $data['latest_release'] = $this->Song_model->getTrendingSong('songs');
        $data['featured_artists'] = $this->Artist_model->getArtistsList();

        $playlists = $this->Playlist_model->getPlaylists();
		$data['playlists'] = [];
		foreach($playlists as $key => $playlist){
			$playlists_songs = $this->Playlist_model->getPlaylistSongs($playlist['id']);
			$data['playlists'][$key]['name'] = $playlist['name'];
            $data['playlists'][$key]['slug'] = $playlist['slug'];
			$data['playlists'][$key]['id'] = $playlist['id'];
			$data['playlists'][$key]['value'] = $playlists_songs;
		}
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}


?>
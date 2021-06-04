<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper();
		$this->load->library('session');
		$this->load->model('User_model');
		$this->load->model('Song_model');
		$this->load->model('Artist_model');
		$this->load->model('Playlist_model');

	}

	public function index()
	{
		$data['all_song']=$this->Song_model->getAllsong();  //this function use for get all song...
		$data['trending_song'] = $this->Song_model->getTrendingSong('songs');
		$data['all_artists'] = $this->Artist_model->getArtistsList();
		$playlists = $this->Playlist_model->getPlaylists();
		// echo "<pre>";
		// print_r($data['trending_song']); die;
		$data['playlists'] = [];
		foreach($playlists as $key => $playlist){
			$playlists_songs = $this->Playlist_model->getPlaylistSongs($playlist['id']);
			$data['playlists'][$key]['name'] = $playlist['name'];
			$data['playlists'][$key]['id'] = $playlist['id'];
			$data['playlists'][$key]['value'] = $playlists_songs;
		}

		// echo "<pre>";  print_r($data); die;
		$this->load->view('front/index',$data);
		
		
	}

	function artist_details($artistId = null){ 
		// echo $artistId; die;
		$data['getArtistDetail'] = $this->Artist_model->getArtistDetails('artists',$artistId);
		$data['song'] = $this->Song_model->getAllSongByArtist($artistId);
		// echo "<pre/>";
		// print_r($data); die;
		$this->load->view('front/artist_details',$data);
	}

	function stations(){ 
		$this->load->view('front/stations');
	}

	function song_details($para1='',$para2=''){ 
		$song_detail['songDetail']=$this->Song_model->getAllsong_detail($para1);
		// echo $song_detail->id; die;
		$this->load->view('front/song_details',$song_detail);
	}

	function songs($limit=null){ 
		$num_rows =$this->Song_model->numRows();
		$this->load->library('pagination');

		$config = [
			'base_url' => base_url()."home/songs",
			'total_rows' => $num_rows,
			'per_page' => 8,
			'full_tag_open' =>"<ul class='pagination' >",
			'full_tag_close' =>"</ul>",
			'next_tag_open' =>"<li class='page-item page-link'> ",
			'next_tag_close' =>"</li>",
			'prev_tag_open' =>"<li class='page-item page-link'>",
			'prev_tag_close' =>"</li>",
			'num_tag_open' =>"<li class='page-item page-link'>",
			'num_tag_close' =>"</li>",
			'cur_tag_open' =>"<li class='active' class='page-item' ><a class='page-link'>",
			'cur_tag_close' =>"</a></li>"
		];
		// $config['base_url'] = base_url()."home/songs";
		// $config['total_rows'] = $num_rows;
		// $config['per_page'] = 8;

		$this->pagination->initialize($config);
		$data['all_song'] = $this->Song_model->getAllsong($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/songs',$data);
	}

	function error(){ 
		$this->load->view('front/error');
	}

	function add_event(){ 
		$this->load->view('front/add_event');
	}

	function add_music(){ 
		$this->load->view('front/add_music');
	}

	function profile(){ 
		$this->load->view('front/profile');
	}

	public function music()
	{
		
		$this->load->view('front/music');
	}

	public function genres()
	{
		
		$this->load->view('front/genres');
	}

	function artists(){ 
		$data['all_artists'] = $this->Artist_model->getArtistsList();
		$this->load->view('front/artists',$data);
	}

	function analytics(){ 
		$this->load->view('front/analytics');
	}

	function favorites(){ 
		$this->load->view('front/favorites');
	}

	function history(){ 
		$this->load->view('front/history');
	}

	function blank(){ 
		$this->load->view('front/blank');
	}

	function events(){ 
		$this->load->view('front/events');
	}

	
	function settings(){ 
		$this->load->view('front/settings');
	}
	
	function plan(){ 
		$this->load->view('front/plan');
	}

}

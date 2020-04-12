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

	}

	public function index()
	{
		$data['all_song']=$this->Song_model->getAllsong();  //this function use for ger all song...
		$data['all_artists'] = $this->Artist_model->getArtistsList();
		
		$this->load->view('front/index',$data);
		
	}

	function artist_details(){ 
		$this->load->view('front/artist_details');
	}

	function stations(){ 
		$this->load->view('front/stations');
	}

	function song_details($para1='',$para2=''){ 
		$song_detail['songDetail']=$this->Song_model->getAllsong_detail($para1);
		// echo $song_detail->id; die;
		$this->load->view('front/song_details',$song_detail);
	}

	function songs(){ 
		$data['all_song']=$this->Song_model->getAllsong();
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
		$this->load->view('front/artists');
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper();
		$this->load->library('session');
		$this->load->model('User_model');

	}

	public function index()
	{
		
		$this->load->view('front/index');
	}

	function artist_details(){ 
		$this->load->view('front/artist_details');
	}

	function stations(){ 
		$this->load->view('front/stations');
	}

	function song_details(){ 
		$this->load->view('front/song_details');
	}

	function songs(){ 
		$this->load->view('front/songs');
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
	

}

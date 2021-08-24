<?php
// session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct() {

        parent::__construct();
        $this->load->library('session'); 
        if ( ! $this->session->userdata('userDetail')){
            redirect('Login/index');
        }
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('upload');
        $this->load->model('User_model');
        $this->load->model('Artist_model');
        $this->load->model('Album_model');
        $this->load->model('Song_model');
        $this->load->model('Playlist_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('image_lib');
        $this->load->library('session');
        
    }

    /* index of the vadmin. Default: Dashboard; On No Login Session: Back to login page. */

    public function index() {

        $this->load->view('back/index');
    }

    function add() {
        $this->load->view('back/category_add');
    }

    function album(){
        $data['getArtists'] = $this->Artist_model->getArtistsList();
        $this->load->view('back/album_add',$data);

    }

    function artist(){
        $this->load->view('back/artist_add');

    }

    function addArtist(){
        $artistData = $this->input->post();
        $name = $artistData['artist_name'];


        
        // ******** upload artists image ********* //
        $config['upload_path']          = './assets/Artist';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '10000';

        $new_name = $name.$_FILES["artists_file"]['name'];
        $config['file_name'] = $new_name;

        
        if (!is_dir('./assets/Artist/')) {
            mkdir('./assets/Artist/', 0777, TRUE);
        }
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('artists_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $this->session->set_flashdata('error',$error['error']);
            redirect(base_url() . "admin/addArtist");
        } else {
            $this->Artist_model->saveArtist($artistData,$config['file_name']);
            redirect(base_url() . "admin/artistList");
        }
    }

    function addAlbum(){
        $albumData = $this->input->post();
        $this->Album_model->saveAlbum($albumData);
        redirect(base_url() . "admin/albumList");
    }

    function albumList(){
        $data['getAlbums'] = $this->Album_model->getAlbumsList();
        $this->load->view('back/album_list',$data);
    }

    function artistList(){
        $data['getArtists'] = $this->Artist_model->getArtistsList();
        $this->load->view('back/artist_list',$data);
    }

    function song($id = null){
        $lyricist = 3;
        $composer = 4;
        $music    = 5;
        if($id == null){
           
            $data['getLyricist']    = $this->User_model->getAllUserType('users',$lyricist);
            $data['getComposer']    = $this->User_model->getAllUserType('users',$composer);
            $data['getMusic']    = $this->User_model->getAllUserType('users',$music);
            $data['getArtists']     = $this->Artist_model->getArtistsList();
            $data['getAlbums']      = $this->Album_model->getAlbumsList();
            $data['playlists']      = $this->Playlist_model->getPlaylists();
            $this->load->view('back/song_add', $data);
        } else {
            $data['getLyricist']    = $this->User_model->getAllUserType('users',$lyricist);
            $data['getComposer']    = $this->User_model->getAllUserType('users',$composer);
            $data['getMusic']    = $this->User_model->getAllUserType('users',$music);
            $data['getArtists'] = $this->Artist_model->getArtistsList();
            $data['getAlbums'] = $this->Album_model->getAlbumsList();
            $data['playlists'] = $this->Playlist_model->getPlaylists();
            $data['songDetail']=$this->Song_model->getAllsong_detail($id);

            $this->load->view('back/song_edit', $data);
        }
        
    }

    function songs($limit=null){ 
		// $num_rows =$this->Song_model->numRows();
		// $this->load->library('pagination');

		// $config = [
		// 	'base_url' => base_url()."home/songs",
		// 	'total_rows' => $num_rows,
		// 	'per_page' => 8,
		// 	'full_tag_open' =>"<ul class='pagination' >",
		// 	'full_tag_close' =>"</ul>",
		// 	'next_tag_open' =>"<li class='page-item page-link'> ",
		// 	'next_tag_close' =>"</li>",
		// 	'prev_tag_open' =>"<li class='page-item page-link'>",
		// 	'prev_tag_close' =>"</li>",
		// 	'num_tag_open' =>"<li class='page-item page-link'>",
		// 	'num_tag_close' =>"</li>",
		// 	'cur_tag_open' =>"<li class='active' class='page-item' ><a class='page-link'>",
		// 	'cur_tag_close' =>"</a></li>"
		// ];
		// $config['base_url'] = base_url()."home/songs";
		// $config['total_rows'] = $num_rows;
		// $config['per_page'] = 8;

		// $this->pagination->initialize($config);
		// $data['all_song'] = $this->Song_model->getAllsong($config['per_page'],$this->uri->segment(3));
        // echo '<pre>'; print_R($data); die;
        $data['all_song'] = $this->Song_model->getAllsong();
		$this->load->view('back/songs_list',$data);
	}
    
    function addSong(){
        $post_data = $this->input->post();
        
        $config['upload_path']          =  './assets/songs/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '100000';

        // =========********make directories if not exists********==========
        if (!is_dir('./assets/songs/')) {
            mkdir('./assets/songs/', 0777, TRUE);
        }
        if (!is_dir('./assets/thumbnail/original')) {
            mkdir('./assets/thumbnail/original', 0777, TRUE);
        }
        if (!is_dir('./assets/thumbnail/320X320')) {
            mkdir('./assets/thumbnail/320X320', 0777, TRUE);
        }
        if (!is_dir('./assets/thumbnail/128X128')) {
            mkdir('./assets/thumbnail/128X128', 0777, TRUE);
        }
        // =========********end make directories if not exists********==========

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        // ******* showing error if exists ******* //
        if (!$this->upload->do_upload('song_file')) {
            $error = array('error' => $this->upload->display_errors());
            // print_r($error); die;
            $this->session->set_flashdata('error',$error['error']);
            redirect(base_url() . "admin/song");
        }
        else {
            $data = array('upload_data' => $this->upload->data());
            // $songPath = $data['upload_data']['full_path'];
            $songPath = $data['upload_data']['raw_name'].$data['upload_data']['file_ext'];
            

            // ******** upload original thumbnail image ********* //
            $config['upload_path']          = './assets/thumbnail/original';
            $config['allowed_types']        = '*';
            $config['max_size']             = '10000';

            
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('thumbnail_file')) {
                $error = array('error' => $this->upload->display_errors());
                
                $this->session->set_flashdata('error',$error['error']);
                redirect(base_url() . "admin/song");
            } else {
                
                $data = array('upload_thubmnail_data' => $this->upload->data());
                
                // store image with 320 X 320 size.
                $resize['image_library'] = 'gd2';
                
                $resize['source_image'] = $data['upload_thubmnail_data']['full_path'];
                $resize['new_image'] =  './assets/thumbnail/320X320';
                $resize['maintain_ratio']       = TRUE;
                $resize['width']                = 320;
                $resize['height']               = 320;
                $this->load->library('image_lib',$resize);
                
                $this->image_lib->initialize($resize);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors(); die;
                }
                
                // ********* get resize image path ******** //
                $thumbnail = $data['upload_thubmnail_data']['raw_name'].$data['upload_thubmnail_data']['file_ext'];
                // $basename = basename($data['upload_thubmnail_data']['file_path']);
                // $thumbnail_320X320 = str_replace($basename,'320X320',$data['upload_thubmnail_data']['file_path']);
                // $thumbnail_320X320_path = $thumbnail_320X320.$thumbnail;
                $post_data['thumbnail_320X320'] = $thumbnail;
                // ********* end get resize image path ******** //

                
                // store image with 128 X 128 size.
                $resize['create_thumb'] = 'gd2';
                $resize['source_image'] = $data['upload_thubmnail_data']['full_path'];
                $resize['new_image'] =  './assets/thumbnail/128X128';
                $resize['maintain_ratio']       = TRUE;
                $resize['width']                = 128;
                $resize['height']               = 128;
                
                $this->image_lib->clear();
                $this->image_lib->initialize($resize);
                $this->image_lib->resize();

                // ********* get resize image path ******** //
                $thumbnail = $data['upload_thubmnail_data']['raw_name'].$data['upload_thubmnail_data']['file_ext'];
                // $basename = basename($data['upload_thubmnail_data']['file_path']);
                // $thumbnail_128X128 = str_replace($basename,'128X128',$data['upload_thubmnail_data']['file_path']);
                // $thumbnail_128X128_path = $thumbnail_128X128.$thumbnail;
                $post_data['thumbnail_128X128'] = $thumbnail;
                // ********* end get resize image path ******** //

                // ******* save song details and thumbnail in db ******* //
                $up_audio = $songPath;
                $post_data['song_file'] = $up_audio;
                $this->Song_model->songInsertdata($post_data);
                $this->session->set_flashdata('success', 'Song details save successfully...');
                redirect(base_url() . "admin/song");
                // ******* end save song details and thumbnail in db ******* //
            }
        }
        
        

    }

    function updateSong($songId){
        $post_data = $this->input->post();
        // echo "<pre>"; print_R($post_data); die;
        $playlistData = $post_data['playlist'];
        // echo "<pre>"; print_R($playlistData); die;
        foreach($playlistData as $PlaylistId){
            $data = [
                "playlist_id" => $PlaylistId,
                "song_id" => $songId,
            ];
            
            $this->Playlist_model->savePlaylistSong($data);
        }

        redirect(base_url() . "admin/songs");
    }


    public function addHomeplaylist(){
        $this->load->view('back/home_playlist_add');
    }

    public function storeHomePlaylist(){
        $playlistData = $this->input->post();
        $this->Playlist_model->savePlaylist($playlistData);
    }


    function userss($para1 = '', $para2 = '', $para3 = '') {
        if ($para1 == 'list') {
            $data_page['reg'] = $this->db->query("select * from users order by id desc")->result_array();
            $this->load->view('back/user_list', $data_page);
        } else if ($para1 == 'add') {
            $this->load->view('back/user_add');
        } else if ($para1 == 'do_add') {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['mobile'] = $this->input->post('mobile');
            $data['address'] = $this->input->post('address');
            $data['country'] = $this->input->post('country');
            $data['state'] = $this->input->post('state');
            $data['city'] = $this->input->post('city');
            $data['status'] = $this->input->post('status');
            $this->db->insert('manage_agent', $data);
            redirect(base_url() . "admin/user/list");
        } else if ($para1 == 'edit') {
            $data_page['reg'] = $this->db->query("select * from user where id='" . $para2 . "' ")->result_array();
            $this->load->view('back/user_edit', $data_page);
        } else if ($para1 == 'do_update') {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['mobile'] = $this->input->post('mobile');
            $data['address'] = $this->input->post('address');
            $data['country'] = $this->input->post('country');
            $data['state'] = $this->input->post('state');
            $data['city'] = $this->input->post('city');
            $data['status'] = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('user', $data);
            redirect(base_url() . "admin/user/list");
        } else if ($para1 = 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('user');
            redirect(base_url() . "admin/user/list");
        }
    }

}

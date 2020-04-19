<?php
// session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct() {

        parent::__construct();

        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('upload');
        $this->load->model('User_model');
        $this->load->model('Artist_model');
        $this->load->model('Album_model');
        $this->load->model('Song_model');
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

    function category($para1 = '', $para2 = '', $para3 = '') {

        if ($para1 == 'list') {
            $page_data['reg'] = $this->db->query("select * from category_list order by id desc")->result_array();
            $this->load->view('back/category_list', $page_data);
        } else if ($para1 == 'add') {
            $this->load->view('back/category_add');
        } else if ($para1 == 'do_add') {

            $data['name'] = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('image');
            $data['status'] = $this->input->post('status');
            $this->db->insert('category_list', $data);
            redirect(base_url() . "index.php/admin/category/list");
        } else if ($para1 == 'edit') {
            $page_data['reg'] = $this->db->query("select * from category_list where id='" . $para2 . "' ")->result_array();
            $this->load->view('back/category_edit', $page_data);
        } else if ($para1 == 'do_update') {
            $data['name'] = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('image');
            $data['status'] = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('category_list', $data);
            redirect(base_url() . "index.php/admin/category/list");
        } else if ($para1 == 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('category_list');
            redirect(base_url() . "index.php/admin/category/list");
        }
    }

    function subcategory($para1 = '', $para2 = '', $para3 = '') {
        if ($para1 == 'list') {
            $page_data['reg'] = $this->db->query("select * from subcategory_list order by id desc")->result_array();
            $this->load->view('back/subcategory_list', $page_data);
        } else if ($para1 == 'add') {
            $this->load->view('back/subcategory_add');
        } else if ($para1 == 'do_add') {
            $data['categoryname'] = $this->input->post('c_name');
            $data['subcategoryname'] = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('image');
            $data['status'] = $this->input->post('status');
            $this->db->insert('subcategory_list', $data);
            redirect(base_url() . "index.php/admin/subcategory/list");
        } else if ($para1 == 'edit') {
            $page_data['reg'] = $this->db->query("select * from subcategory_list where id='" . $para2 . "' ")->result_array();
            $this->load->view('back/subcategory_edit', $page_data);
        } else if ($para1 == 'do_update') {
            $data['categoryname'] = $this->input->post('c_name');
            $data['name'] = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('image');
            $data['status'] = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('subcategory_list', $data);
            redirect(base_url() . "index.php/admin/subcategory/list");
        } else if ($para1 == 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('subcategory_list');
            redirect(base_url() . "index.php/admin/subcategory/list");
        }
    }

    function blog($para1 = '', $para2 = '', $para3 = '') {
        if ($para1 == 'list') {
            $page_data['reg'] = $this->db->query("select * from blog")->result_array();
            $this->load->view('back/blog_list', $page_data);
        } else if ($para1 == 'add') {
            $this->load->view('back/blog_add');
        } else if ($para1 == 'do_add') {
            $data['title'] = $this->input->post('title');
            $data['slug'] = $this->input->post('slug');
            $data['short_desc'] = $this->input->post('short_desc');
            $data['long_desc'] = $this->input->post('long_desc');
            $data['image'] = $this->input->post('image');
            $data['reg_date'] = $this->input->post('reg_date');
            $data['uploaded_by'] = $this->input->post('uploaded');
            $data['seo_title'] = $this->input->post('seo_title');
            $data['seo_meta'] = $this->input->post('seo_meta');
            $data['seo_desc'] = $this->input->post('seo_desc');
            $data['status'] = $this->input->post('status');
            $this->db->insert('blog', $data);
            redirect(base_url() . "index.php/admin/blog/list");
        } else if ($para1 == 'edit') {
            $page_data['reg'] = $this->db->query("select * from blog where id='" . $para2 . "' ")->result_array();
            $this->load->view('back/blog_edit', $page_data);
        } else if ($para1 == 'do_update') {
            $data['title'] = $this->input->post('title');
            $data['slug'] = $this->input->post('slug');
            $data['short_desc'] = $this->input->post('short_desc');
            $data['long_desc'] = $this->input->post('long_desc');
            $data['image'] = $this->input->post('image');
            $data['reg_date'] = $this->input->post('reg_date');
            $data['uploaded_by'] = $this->input->post('uploaded');
            $data['seo_title'] = $this->input->post('seo_title');
            $data['seo_meta'] = $this->input->post('seo_meta');
            $data['seo_desc'] = $this->input->post('seo_desc');
            $data['status'] = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('blog', $data);
            redirect(base_url() . "index.php/admin/blog/list");
        } else if ($para1 = 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('blog');
            redirect(base_url() . "index.php/admin/blog/list");
        }
    }

    function userList() {
        $data['getUserList'] = $this->User_model->usersList(); //get users list.
//        print_r($getUsersList); die;
        $this->load->view('back/user_list', $data);
    }
    
    function editUser($userId=''){
        $data['userData'] = $this->User_model->userData($userId); //get users list.
        $this->load->view('back/user_edit',$data);
    }
    
    function updateUser(){
        
        $userData = $this->input->post();
        
        $this->User_model->updateUserData($userData); //update user data
        
        redirect(base_url() . "index.php/admin/userlist");
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
            redirect(base_url() . "index.php/admin/addArtist");
        } else {
            $this->Artist_model->saveArtist($artistData,$config['file_name']);
            redirect(base_url() . "index.php/admin/artistList");
        }
    }

    function addAlbum(){
        $albumData = $this->input->post();
        $this->Album_model->saveAlbum($albumData);
        redirect(base_url() . "index.php/admin/albumList");
    }

    function albumList(){
        $data['getAlbums'] = $this->Album_model->getAlbumsList();
        $this->load->view('back/album_list',$data);
    }

    function artistList(){
        $data['getArtists'] = $this->Artist_model->getArtistsList();
        $this->load->view('back/artist_list',$data);
    }

    function song(){
        $data['getArtists'] = $this->Artist_model->getArtistsList();
        $data['getAlbums'] = $this->Album_model->getAlbumsList();
        // echo '<pre>'; print_r($data); die;
        $this->load->view('back/song_add', $data);
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
            print_r($error); die;
            $this->session->set_flashdata('error',$error['error']);
            redirect(base_url() . "index.php/admin/song");
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
                redirect(base_url() . "index.php/admin/song");
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
                $thumbnail = $data['upload_thubmnail_data']['raw_name'].'_thumb'.$data['upload_thubmnail_data']['file_ext'];
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
                $thumbnail = $data['upload_thubmnail_data']['raw_name'].'_thumb'.$data['upload_thubmnail_data']['file_ext'];
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
                redirect(base_url() . "index.php/admin/song");
                // ******* end save song details and thumbnail in db ******* //
            }
        }
        
        

    }

    function package($para1 = '', $para2 = '', $para3 = '') {
        if ($para1 == 'list') {
            $data_page['reg'] = $this->db->query("select * from package order by id desc")->result_array();
            $this->load->view('back/package_list', $data_page);
        } else if ($para1 == 'add') {
            $this->load->view('back/package_add');
        } else if ($para1 == 'do_add') {
            $data['name'] = $this->input->post('name');
            $data['duration'] = $this->input->post('duration');
            $data['price'] = $this->input->post('price');
            $data['name1'] = $this->input->post('name1');
            $data['name2'] = $this->input->post('name2');
            $data['value1'] = $this->input->post('value1');
            $data['value2'] = $this->input->post('value2');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('image');
            $data['status'] = $this->input->post('status');
            $this->db->insert('package', $data);
            redirect(base_url() . "index.php/admin/package/list");
        } else if ($para1 == 'edit') {
            $data_page['reg'] = $this->db->query("select * from package where id='" . $para2 . "' ")->result_array();
            $this->load->view('back/package_edit', $data_page);
        } else if ($para1 == 'do_update') {
            $data['name'] = $this->input->post('name');
            $data['duration'] = $this->input->post('duration');
            $data['price'] = $this->input->post('price');
            $data['name1'] = $this->input->post('name1');
            $data['name2'] = $this->input->post('name2');
            $data['value1'] = $this->input->post('value1');
            $data['value2'] = $this->input->post('value2');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('image');
            $data['status'] = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('package', $data);
            redirect(base_url() . "index.php/admin/package/list");
        } else if ($para1 = 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('package');
            redirect(base_url() . "index.php/admin/package/list");
        }
    }

    function agent($para1 = '', $para2 = '', $para3 = '') {
        if ($para1 == 'list') {
            $data_page['reg'] = $this->db->query("select * from manage_agent order by id desc")->result_array();
            $this->load->view('back/agent_list', $data_page);
        } else if ($para1 == 'add') {
            $this->load->view('back/agent_add');
        } else if ($para1 == 'do_add') {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['mobile'] = $this->input->post('mobile');
            $data['address'] = $this->input->post('address');
            $data['country'] = $this->input->post('country');
            $data['state'] = $this->input->post('state');
            $data['city'] = $this->input->post('city');
            $data['commission'] = $this->input->post('commission');
            $data['status'] = $this->input->post('status');
            $this->db->insert('manage_agent', $data);
            redirect(base_url() . "index.php/admin/agent/list");
        } else if ($para1 == 'edit') {
            $data_page['reg'] = $this->db->query("select * from manage_agent where id='" . $para2 . "' ")->result_array();
            $this->load->view('back/agent_edit', $data_page);
        } else if ($para1 == 'do_update') {
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['mobile'] = $this->input->post('mobile');
            $data['address'] = $this->input->post('address');
            $data['country'] = $this->input->post('country');
            $data['state'] = $this->input->post('state');
            $data['city'] = $this->input->post('city');
            $data['commission'] = $this->input->post('commission');
            $data['status'] = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('manage_agent', $data);
            redirect(base_url() . "index.php/admin/agent/list");
        } else if ($para1 = 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('manage_agent');
            redirect(base_url() . "index.php/admin/agent/list");
        }
    }

}

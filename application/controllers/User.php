<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct() {

        parent::__construct();
        $this->load->model('User_model');
        $this->load->database();
        $this->load->library('session');
    }

    function userList() {
        $getUser = $this->User_model->usersList(); //get users list.
        // echo "<pre>";
        // print_r($getUser[0]['role_id']);
        foreach($getUser as $key => $user){
            // echo $user['role_id'];
        }
        
        // die;
        $data['getUserList'] = $getUser;
        $this->load->view('back/user_list', $data);
    }
    
    function editUser($userId=''){
        $data['userRole1'] = $this->User_model->userRole('role_user');
        $data['userData'] = $this->User_model->userData($userId); //get users list.
        $data['userRole'] = explode(',', $data['userData'][0]['role_id']);
        // print_R($data['userRole1']); die;
        $this->load->view('back/user_edit',$data);
    }

    function userAdd($userId=null){
        $user['userRole'] = $this->User_model->userRole('role_user');
        // print_R($data['userRole']); die;
        if($this->input->post()){
            $roleId = $this->input->post('user_role');
            $role   = implode(',', $roleId);
          $data = array(
              'name'        => $this->input->post('name'),
              'email'       => $this->input->post('email'),
              'password'    => $this->input->post('password'),
              'phone'       => $this->input->post('phone'),
              'gender'      => $this->input->post('gender'),
              'dob'         => $this->input->post('dob'),
              'role_id'     => $role,
              'isActive'    => 1,
              
          );
        //   print_R($data); die;
          $isertuser = $this->User_model->useradd('users',$data); 
          if($isertuser){
              $this->session->set_flashdata('success','User successfully add'); 
              redirect(base_url() . "user/userAdd");
          }else{
            $this->session->set_flashdata('error','Something worng'); 
              redirect(base_url() . "user/userAdd");
          }
        }
        $this->load->view('back/user_add',$user);
    }
    
    function updateUser(){
        
        $userData = $this->input->post();
        
        $this->User_model->updateUserData($userData); //update user data
        
        redirect(base_url() . "user/userlist");
    }
    


}
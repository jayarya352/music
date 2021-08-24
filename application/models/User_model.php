<?php

class User_model extends CI_Model {
    
    public function getTotalRecord($email){ // check the provided email is already register with us or not.
        $query = $this->db->query("select * from users where email = '" .$email. "' ");
        return $query->num_rows(); // this function will return total number of rows.
        
    }
    
    public function saveRecord($data){ // this function will store data in db.
        $record = array();
        if(!empty($data)){
            $record = [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
            ];
            
            $this->db->insert('users', $record);
            return true;
        }
        
        
    }

    function doLogin($email, $pass){
        $select['get_data']=$this->db->query("select * from users where email='".$email."' and password='".$pass."' "); // this query use for match email and password from database.
        //echo "select * from users where email='".$email."' and password='".$pass."'"; die;
         return $select['get_data']->result_array(); // this function will return total number of rows.
       
    }
    
    public function usersList(){
        $this->db->order_by('id','DESC');
        $query = $this->db->query("Select * from users order by id desc");
        return $query->result_array();
    }
    
    public function userData($user_id){
        $query = $this->db->query("select * from users where id='".$user_id."' ");
        return $query->result_array();
    }
    
    public function updateUserData($userData){
        
        $query = $this->db->query("update users set isActive = '".(int)$userData['status']."' where id='".(int)$userData['hiddenuserid']."' ");
        return true;
    }

    public function useradd($table,$data){
        return $this->db->insert($table,$data);
    }

    public function userRole($table){
        $this->db->order_by('id','DESC');
        $this->db->where('status',1);
        return $this->db->get($table)->result();
    }

    public function getAllUserType($table,$whereUserType){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('role_id', $whereUserType);
        return $this->db->get()->result();
    }

    
    
}
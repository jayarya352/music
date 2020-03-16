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
                'address' => $data['address']
            ];
            
            $this->db->insert('users', $record);
            return true;
        }
        
        
    }

    function doLogin($email, $pass){
        $select['get_data']=$this->db->query("select * from users where email='".$email."' and password='".$pass."' "); // this query use for match email and password from database.
         return $select['get_data']->result_array(); // this function will return total number of rows.
        // if($num >=1){
        //     return true;
        // }else{
        //     return false;
        // }
    }
    
    public function usersList(){
        $query = $this->db->query("Select * from users");
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
    
}
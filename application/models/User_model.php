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
        $select=$this->db->query("select * from users where email='".$email."' and password='".$pass."' "); // this query use for match email and password from database.
         return $select->result_array(); // this function will return total number of rows.
        // if($num >=1){
        //     return true;
        // }else{
        //     return false;
        // }
    }
    function profileDetail($userId){
    $user_detail=$this->db->query("select * from users where id='".$userId."' ")->result_array(); 
    return $user_detail;
    }

    function profileUpdate($dataProfile,$get_userId){
        $this->db->where('id',$get_userId);
        $this->db->update('users',$dataProfile);
        return true; 
    }

    function change_password($old_password,$new_password,$confirm_password,$get_userId){
        $matchOldPassword= $this->db->query("select * from users where password='".$old_password."' and id='".$get_userId."' ")->result_array();
        $totalrecord = count($matchOldPassword);
        if($totalrecord > 0){
            if($new_password==$confirm_password){
				$data['password']=$new_password;
                $this->db->where('id',$get_userId);
                $update_password=$this->db->update('users',$data);
                return array('status'=>'success',
                             'message'=> 'successfully updated'
                );
			}else{
				return array('status'=>'failure',
                             'message'=> 'new password and confirm password does not matched'
                );
			}
            
        }else{
            return array('status'=>'failure',
                         'message'=> 'invalid old password'
                );
        }

    }
}
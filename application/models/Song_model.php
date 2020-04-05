<?php

class Song_model extends CI_Model {
    
    public function songInsertdata($data){ 
        
        $song_data = array(
            "album_id" => $data['album'],
            "artist_id" => $data['artist'],
            "name" => $data['song_name'],
            "filename" => $data['song_file']
        );
        
        $this->db->insert('songs',$song_data);
        return true;
    }

    public function getAllsong() {  //this query user for get song data..
        // $this->db->where('status','pending'); 
        $query=$this->db->get('songs'); 
        return $query->result_array(); }

    public function getAllsong_detail($song_id) {  //this query user for get song details..
        $this->db->where('id',$song_id); 
        $query=$this->db->get('songs'); 
        return $query->result_array(); }
    
}
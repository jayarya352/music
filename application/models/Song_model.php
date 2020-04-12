<?php

class Song_model extends CI_Model {
    
    public function songInsertdata($data){ 
        $date = date('d-m-Y');
        $song_data = array(
            "album_id" => $data['album'],
            "artist_id" => $data['artist'],
            "name" => $data['song_name'],
            "filename" => $data['song_file'],
            "thumbnail_320X320" => $data['thumbnail_320X320'],
            "thumbnail_128X128" => $data['thumbnail_128X128'],
            "lyricist" => $data['lyricist'],
            "composer" => $data['composer'],
            "music" => $data['music'],
            "added_date" => $date
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
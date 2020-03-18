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
}
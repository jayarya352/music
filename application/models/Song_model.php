<?php

class Song_model extends CI_Model {
    
    public function songInsertdata($data){ 
        
        $song_data = array(
            "album_id" => $data['album'],
            "artist_id" => $data['artist'],
            "name" => $data['song_name'],
            "filename" => $data['song_file'],
            "thumbnail_320X320" => $data['thumbnail_320X320'],
            "thumbnail_128X128" => $data['thumbnail_128X128']
        );
        
        $this->db->insert('songs',$song_data);
        return true;
    }
}
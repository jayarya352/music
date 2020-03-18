<?php

class Album_model extends CI_Model {
    
    public function saveAlbum($data){ 
        $album_data = array(
            "artist_id" => $data['artists'],
            "name" => $data['album_name']
        );
        $this->db->insert('albums',$album_data);
        return true;
    }

    public function getAlbumsList(){ 
        $query = $this->db->query("select albums.id as album_id, artists.name as artist_name, albums.name as album_name from albums inner join artists on albums.artist_id = artists.id");
        return $query->result_array();
        
    }
}
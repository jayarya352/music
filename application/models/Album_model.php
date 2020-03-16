<?php

class Album_model extends CI_Model {
    
    public function saveAlbum($data){ 
        // echo "insert into albums (artist_id, name) values ('".$data['artists']."','".$this->db->escape($data['album_name'])."')"; die;
        $query = $this->db->query("insert into albums (artist_id, name) values ('".$data['artists']."','". $this->db->escape($data['album_name']) ."') ");
        return true;
    }

    public function getAlbumsList(){ 
        $query = $this->db->query("select albums.id as album_id, artists.name as artist_name, albums.name as album_name from albums inner join artists on albums.artist_id = artists.id");
        return $query->result_array();
        
    }
}
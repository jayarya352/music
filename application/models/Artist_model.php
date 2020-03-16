<?php

class Artist_model extends CI_Model {
    
    public function saveArtist($data){ 
        $query = $this->db->query("insert into artists (name) values ('".$data['artist_name']."') ");
        return true;
    }

    public function getArtistsList(){ 
        $query = $this->db->query("select * from artists");
        return $query->result_array();
        
    }
}
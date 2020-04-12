<?php

class Artist_model extends CI_Model {
    
    public function saveArtist($data, $file){ 
        $artist_data = array(
            "name" => $data['artist_name'],
            "image"=> trim($file)
        );
        $this->db->insert('artists',$artist_data);
        
        return true;
    }

    public function getArtistsList(){ 
        $query = $this->db->query("select * from artists");
        return $query->result_array();
        
    }
}
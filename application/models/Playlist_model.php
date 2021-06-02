<?php

class Playlist_model extends CI_Model {

    public function getPlaylists() {  
        $this->db->where('top',1); 
        $query=$this->db->get('playlists');
        return $query->result_array(); 
    }

    public function getPlaylistSongs($playlistId)
    {
        $this->db->select('songs.*');
        $this->db->from('playlists_songs as ps');
        $this->db->join('songs','songs.id=ps.song_id');
        $this->db->where('ps.id',$playlistId);
        $query = $this->db->get()->result_array();
        return $query;
    }
    
}
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
        $this->db->where('ps.playlist_id',$playlistId);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function savePlaylist($data){ 
        $playlist_data = array(
            "name" => $data['playlist_name'],
            "top" => 1
        );
        $this->db->insert('playlists',$playlist_data);
        return true;
    }
    
    public function savePlaylistSong($data){ 
        $this->db->where('playlist_id',$data['playlist_id']);
        $this->db->where('song_id',$data['song_id']); 
        $query=$this->db->get('playlists_songs'); 
        $rows = $query->num_rows();
        if($rows == 0){
            $playlist_data = array(
                "playlist_id" => $data['playlist_id'],
                "song_id" => $data['song_id']
            );
            $this->db->insert('playlists_songs',$playlist_data);
        }
        return true;
    }
}
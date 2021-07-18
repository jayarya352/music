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

    public function getAllsong($table=null,$limit=null,$offset=null) {  //this query user for get song data..
        // $this->db->where('status','pending');
        if(!empty($limit)){
            $this->db->limit($limit,$offset);
        } 
        $query=$this->db->get($table); 
        return $query->result_array(); 
    }

    public function numRows(){
        $query=$this->db->get('songs'); 
        return $query->num_rows();
    }

    public function getTrendingSong($table){ //this query user for get trending song..
        $this->db->limit(10);
        $this->db->order_by('id','DESC');
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function getAllsong_detail($song_id) {  //this query user for get song details..
        $this->db->where('id',$song_id); 
        $query=$this->db->get('songs'); 
        return $query->result_array(); }

    public function getAllSongByArtist($artistId)
    {
        $this->db->select('*','artists.name As artists_name');
        $this->db->from('songs');
        $this->db->join('artists','artists.id=songs.artist_id');
        $this->db->where('artists.id',$artistId);
        $query = $this->db->get()->result_array();
        return $query;
    }
    
}
<?php

class Genre extends CI_Model
{
    function show_genre() 
    {
        return $this->db->get('genre_music');
    }
    
    function show_edit_genre($where) 
    {
        $this->db->select('*');
        $this->db->from('genre_music');
        $this->db->where($where);
        return $this->db->get()->result();
    }
}
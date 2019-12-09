<?php

class Genre extends CI_Model
{
    function show_genre() 
    {
        return $this->db->get('genre_music');
    }
    
}
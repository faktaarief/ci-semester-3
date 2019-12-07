<?php

class Playlist extends CI_Model
{
    function ambil_lagu() 
    {
        return $this->db->get('lagu');
    }
}
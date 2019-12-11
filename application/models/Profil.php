<?php

class Profil extends CI_Model
{
    function show_genre() 
    {
        return $this->db->get('genre_music');
    }
    
    function show_profil($where) 
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    function show_profil_admin($where) 
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function update_profil($where, $data, $table) 
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
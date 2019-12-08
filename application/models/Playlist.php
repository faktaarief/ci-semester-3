<?php

class Playlist extends CI_Model
{
    function ambil_lagu() 
    {
        return $this->db->get('lagu');
    }

    public function get_product_keyword($keyword){
        $this->db->select('*');
        $this->db->from('lagu');
        $this->db->like('judul_lagu',$keyword);
        $this->db->or_like('penyanyi',$keyword);
        return $this->db->get()->result();
    }
}
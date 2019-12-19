<?php

class User extends CI_Model
{
    function ambil_user() 
    {
        return $this->db->get('users');
    }

    function ambil_admin() 
    {
        return $this->db->get('admin');
    }

    function show_edit_user($where) 
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    function show_edit_admin($where) 
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function update_user($where, $data, $table) 
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function daftaruser_cari($keyword){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('nama',$keyword);
        $this->db->or_like('kd_user',$keyword);
        return $this->db->get()->result();
    }

    public function daftaradmin_cari($keyword){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->like('nama',$keyword);
        $this->db->or_like('kd_admin',$keyword);
        return $this->db->get()->result();
    }

    public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }
    
    public function deleteData($kd_user) {
        $this->db->where_in('kd_user', $kd_user);
        $this->db->delete('users');
    }

    public function simpanRequest($data = null) {
        $this->db->insert('request', $data);
    }

}
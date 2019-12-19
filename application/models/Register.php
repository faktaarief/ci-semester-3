<?php

class Register extends CI_Model 
{
    function insertdata()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'level' => '2'
        );
        
        $this->db->insert('users', $data);

        redirect('/');
    }

    function simpanData($data = null)
    {
        $this->db->insert('users', $data);
    }

    function simpanToken($data = null)
    {
        $this->db->insert('user_token', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('users', $where);
    }

    public function cekToken($where = null)
    {
        return $this->db->get_where('user_token', $where);
    }
    
}
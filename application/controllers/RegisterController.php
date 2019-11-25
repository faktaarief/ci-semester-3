<?php

class RegisterController extends CI_Controller
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
        
        $tes = $this->db->select('users.*, status_users.*');
        die($tes);
        $this->db->from('users');
        $this->db->join('status_users', 'status_users.kd_user = users.kd_user');
        $this->db->insert($data);
    }
}
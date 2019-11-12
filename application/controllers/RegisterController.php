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
        
        $this->db->insert('users', $data);
    }
}
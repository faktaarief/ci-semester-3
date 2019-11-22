<?php

class UserController extends CI_Controller {

    public function create() {
        $this->load->view('users/v_create');
    }

    function store()
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

}
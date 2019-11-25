<?php

class LoginController extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login');
        $this->load->library('Session');
    }

    function index() 
    {
        if($this->session->userdata('masuk') != FALSE)
        {
            redirect(base_url('dashboard'));
        }
        else
            $this->load->view('users/v_login');
    }

    function auth() 
    {
        $nama = htmlspecialchars($this->input->post('nama', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $cek_user = $this->Login->auth_user($nama, $password);

        if($cek_user->num_rows() > 0) 
        {
            $data=$cek_user->row_array();
            $this->session->set_userdata('masuk', TRUE);

            // level 1 premium
            // level 2 free 

            // jika user premium 
            if($data['level'] == '1')
            {
                $this->session->set_userdata('akses', '1');
                $this->session->set_userdata('session_id', $data['kd_user']);
                $this->session->set_userdata('session_nama', $data['nama']);

                redirect(base_url('dashboard'));
            }
            // jika user free 
            else if($data['level'] == '2')
            {
                $this->session->set_userdata('akses', '2');
                $this->session->set_userdata('session_id', $data['kd_user']);
                $this->session->set_userdata('session_nama', $data['nama']);

                redirect(base_url('dashboard'));
            }
            // jika salah 
        }
        else 
        {
            $url = base_url('login');
            $this->session->set_flashdata('gagal', 'Username or Password invalid');
            
            redirect(base_url('login'));
        }
    }

    function logout() 
    {
        $this->session->unset_userdata('masuk');
        // $this->session->session_destroy();
        $url = base_url('login');

        redirect($url);
    }
}
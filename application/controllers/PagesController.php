<?php

class PagesController extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        // validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE)
        {
            $url = base_url('login');
            redirect($url);
        }
    }

    function index() {
        echo "Dashboard User";
    }

    function pengguna_premium() 
    {
        // function yang hanya diakses oleh premium user
        if($this->session->userdata('akses') == 1)
        {
            echo "Premium User";
        }
        else {
            echo "You don't have permission to access this page";
        }
    }

    function pengguna_gratis() 
    {
        // function yang hanya diakses oleh free user
        if($this->session->userdata('akses') == 2)
        {
            echo "Free User";
        }
        else {
            echo "You don't have permission to access this page";
        }
    }
}
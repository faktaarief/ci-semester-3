<?php

class Login extends CI_Model
{
    // cek nama dan password pengguna
    function auth_user($nama, $password)
    {
        $query = $this->db->query("SELECT * FROM users WHERE nama='$nama' OR email='$nama' AND password=MD5('$password') LIMIT 1");
        
        return $query;
    }

    function auth_admin($nama, $password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE nama='$nama' OR email='$nama' AND password=MD5('$password') LIMIT 1");
        
        return $query;
    }

}
<?php

class Login extends CI_Model
{
    // cek nama dan password pengguna
    function auth_user($nama, $password)
    {
        // die(md5($password));
        $email = strtolower($nama);
        // die($user);
        // die(md5($password));
        $query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password=MD5('$password') LIMIT 1");
                
        return $query;
    }

    function auth_admin($nama, $password)
    {
        $email = strtolower($nama);
        $query = $this->db->query("SELECT * FROM admin WHERE email='$email' AND password=MD5('$password') LIMIT 1"); 

        return $query;
    }

    function auth_user_register($email)
    {
        $query = $this->db->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
        return $query;
        
    }

}
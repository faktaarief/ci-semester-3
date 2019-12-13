<?php

class Login extends CI_Model
{
    // cek nama dan password pengguna
    function auth_user($nama, $password)
    {
        // die(md5($password));
        $user = ucwords($nama);
        $email = strtolower($nama);
        // die($user);
        // die(md5($password));
        $query1 = $this->db->query("SELECT * FROM users WHERE nama='$user' AND password=MD5('$password') LIMIT 1");
        $query2 = $this->db->query("SELECT * FROM users WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        $query = $this->db->query("SELECT * FROM users WHERE email='kosong' AND password=MD5('$password') LIMIT 1");
        if ($query1->num_rows() > 0)
        {
            return($query1);
        } else if ($query2->num_rows() > 0) {
            return($query2);
        }
        // die($query);
        
        return $query;
    }

    function auth_admin($nama, $password)
    {
        $user = 'a_' . ucwords($nama);
        $email = strtolower($nama);
        $query1 = $this->db->query("SELECT * FROM admin WHERE nama='$user' AND password=MD5('$password') LIMIT 1");
        $query2 = $this->db->query("SELECT * FROM admin WHERE email='$email' AND password=MD5('$password') LIMIT 1");
        $query = $this->db->query("SELECT * FROM admin WHERE email='kosong' AND password=MD5('$password') LIMIT 1");
        if ($query1->num_rows() > 0)
        {
            return($query1);
        } else if ($query2->num_rows() > 0) {
            return($query2);
        } else 

        return $query;
    }

    function auth_user_register($email)
    {
        $query = $this->db->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
        return $query;
        
    }

}
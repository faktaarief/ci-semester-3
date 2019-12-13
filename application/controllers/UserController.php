<?php

class UserController extends CI_Controller {

    public function create() {
        $this->load->view('users/v_create');
    }

    function store()
    {

        $this->load->model('Login');

        $email = $this->input->post('email');

        $cek_user  = $this->Login->auth_user_register($email);
        

        // if(count($cek_user)!=0){
        //     # kalu value $hasil_username tidak 0
        //             # echo 1 untuk pertanda username sudah ada pada db    
        //                   echo "1"; 
        //   }else{
        //             # kalu value $hasil_username = 0
        //             # echo 2 untuk pertanda username belum ada pada db
        //       echo "2";
        //   }
          
        // if($cek_user->num_rows() > 0) {
        //     echo "1";
        // } else {
        //     echo "2";
        // }


        if($cek_user->num_rows() > 0) {
            $this->session->set_flashdata('gagal', 'Email Sudah Terdaftar!');
            redirect(base_url('create-account'));
        } else
        $data = array(
            'email' => strtolower($this->input->post('email')),
            'password' => md5($this->input->post('password')),
            'nama' => ucwords($this->input->post('nama')),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'level' => '2',
            'status' => '0'
        );
        
        
        $tes = $this->db->select('users.*');
        // die($tes);
        $this->db->from('users');
        $this->db->join('status_users', 'status_users.kd_user = users.kd_user');
        $this->db->insert('users', $data);
        redirect('dashboard');
    }

}
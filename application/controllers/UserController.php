<?php

class UserController extends CI_Controller {

    public function create() {
        $this->load->view('users/v_create');
    }

    public function store()
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

        
        // siapkan token
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];
        
        echo "tes";
        $this->Register->simpanData($data);
        $this->Register->simpanToken($user_token);
        

        $this->_sendEmail($token, 'verify');

        $this->session->set_flashdata('pesan', "<div class='alert alert-success alert-message' role='alert'>Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>");
        
        redirect('login');
        
        
        // $tes = $this->db->select('users.*');
        // // die($tes);
        // $this->db->from('users');
        // $this->db->join('status_users', 'status_users.kd_user = users.kd_user');
        // $this->db->insert('users', $data);
        // redirect('dashboard');
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'   => 'smtp',
            'smtp_host'  => 'ssl://smtp.googlemail.com',
            'smtp_user'  => 'mzclientku@gmail.com',
            'smtp_pass'  => 'FARHANto99',
            'smtp_port' => 465,
            'mailtype'   => 'html',
            'charset'    => 'utf-8',
            'newline'    => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('mzclientku@gmail.com', 'Mz Ata');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : <a href="'. base_url() .'login/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) .'">Activate</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            echo "cuk";
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->Register->cekData(['email' => $email])->row_array();

        if($user) {
            $user_token = $this->Register->cekToken(['token' => $token])->row_array();

            if($user_token) {
                if(time() - $user_token['date_created'] < (60*60*24)) {
                    $this->db->set('status', 1);
                    $this->db->where('email', $email);
                    $this->db->update('users');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('pesan', "<div class='alert alert-success alert-message' role='alert'>. $email . berhasil diaktifkan!</div>");
                    redirect('login');
                } else {
                    $this->db->delete('users', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('pesan', "<div class='alert alert-danger alert-message' role='alert'>Aktivasi Gagal! Token Kadaluarsa</div>");
                redirect('login');
                }
            } else {
                $this->session->set_flashdata('pesan', "<div class='alert alert-danger alert-message' role='alert'>Aktivasi Gagal! Token Salah</div>");
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', "<div class='alert alert-danger alert-message' role='alert'>Aktivasi Gagal! Email Salah</div>");
            redirect('login');
        }
    }
}
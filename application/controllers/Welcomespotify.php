<?php

class Welcomespotify extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        // validasi jika user belum login
        $this->load->model('playlist');
        if($this->session->userdata('masuk') != TRUE)
        {
            $url = base_url('login');
            redirect($url);
        }
        // else if($this->session->userdata('masuk_admin') != TRUE)
        // {
        //     $url = base_url('login');
        //     redirect($url);
        // }
    }


public function index() {
    if($this->session->userdata('masuk') != FALSE)
        {
            redirect(base_url('dashboard'));
        }
    // else if($this->session->userdata('masuk_admin') != FALSE)
    //     {
    //         redirect(base_url('admin/dashboard'));
    //     }
        else
        {
            $this->load->view('v_header');
            $this->load->view('v_index');
            $this->load->view('v_footer');
        }

}
public function beranda(){

    $this->form_validation->set_rules('email','email','required|min_length[3]',[
        'required' => 'Email Harus diisi',
        'min_length' =>'Email Terlalu pendek'
        ]);
    $this->form_validation->set_rules('pass','password','required|min_length[3]',['required' =>'Password Harus diisi','min_length' =>'pass Terlalu pendek']);


    if($this->form_validation->run() == false){
        $this->index();
    }else{
        $data = [
            'email'=> $this->input->post('email'),
            'pass'=> $this->input->post('pass')
        
        ];
        $this->load->view('head',$data);
		$this->load->view('isi');
		$this->load->view('bawahan');

    // $this->load->view('welcome_message', $data);
    
    }
}
		public function homedepan() 
		{
            // $data['playlist'] = $this->playlist->show_playlist()->result();
    		$this->load->view('sidebar_depan');
			$this->load->view('head_depan');
			$this->load->view('isi_depan');
			$this->load->view('footer_depan');
		}
	public function kepala() 
		{
			$this->load->view('sidebar_depan');
			$this->load->view('head_depan');
			$this->load->view('release');
			$this->load->view('footer_depan');
		}
	public function genres() 
		{
            $data['genres'] = $this->genre->show_genre()->result();
			$this->load->view('sidebar_depan');
			$this->load->view('head_depan');
			$this->load->view('genre', $data);
			$this->load->view('footer_depan');
		}
	public function pl() 
		{
            $data['lagu'] = $this->playlist->ambil_lagu()->result();
			$this->load->view('sidebar_depan');
			$this->load->view('playlist', $data);
        }

        // public function edit($id = null) 
        // {
        //     $where = array(
        //         'kd_lagu' => $id
        //     );

		//     $this->load->view('admin/home_admin');
        //     $data['lagu'] = $this->playlist->edit_daftar_genre($where, 'lagu')->result();
        //     $data['genres'] = $this->genre->show_genre()->result();
        //     $data['genre'] = $this->playlist->edit_daftar_genre($where, 'lagu')->result();
        //     $this->load->view('edit_lagu', $data);
        // }
        
    public function playlist() 
    {
        $slug = $this->input->post('playlist');
        $kd_playlist = $this->input->post('kd_playlist');
        // $kd_genre = 35;

        $where = array(
                     'kd_playlist' => $id
                );

        // echo $slug;

        // if(current_url() == base_url('playlist' . '/' . $slug)) {
        //     $data['lagu'] = $this->playlist->genre_view($kd_genre);
        //     $this->load->view('sidebar_depan');
        //     $this->load->view('playlist', $data);
        // } 
        if(current_url() == base_url('playlist' . '/' . $slug)) {
            $data['lagu'] = $this->playlist->playlist_view_join($where, 'lagu')->result();
            $this->load->view('sidebar_depan');
            $this->load->view('playlist', $data);
        } 
        
        // else if(current_url() == base_url('genres/dangdut')) {
        //     $data['lagu'] = $this->playlist->genre_dangdut();
        //     $this->load->view('sidebar_depan');
        //     $this->load->view('playlist', $data);
        // }
              
    }

    public function genres_playlist() 
    {
        $slug = $this->input->post('genre');
        $kd_genre = $this->input->post('kd_genre');
        // echo $slug;

        if(current_url() == base_url('genres' . '/' . $slug)) {
            $data['lagu'] = $this->playlist->genre_view($kd_genre);
            $this->load->view('sidebar_depan');
            $this->load->view('playlist', $data);
        } else if(current_url() == base_url('genres/dangdut')) {
            $data['lagu'] = $this->playlist->genre_dangdut();
            $this->load->view('sidebar_depan');
            $this->load->view('playlist', $data);
        }
              
    }
       
	public function cari() 
		{
            // $data['lagu'] = $this->playlist->ambil_lagu()->result();
            // $this->load->view('playlist-cari', $data);
            
            $keyword = $this->input->post('keyword');
            $data['products']=$this->playlist->get_product_keyword($keyword);
			$this->load->view('sidebar_depan');
            $this->load->view('playlist-cari',$data);
        }
        
	public function profil() 
		{
            $akun = $this->session->userdata('session_nama');
            
            $where = array(
                'nama' => $akun  
            );

            // die($where['nama']);
            if ($this->session->userdata('masuk_admin') == !FALSE) {
                $data['profil'] = $this->profil->show_profil_admin($where);
            } else if ($this->session->userdata('masuk') == !FALSE) {
                $data['profil'] = $this->profil->show_profil($where);
            }

            $this->load->view('head');
			$this->load->view('admin/profil', $data);
			$this->load->view('bawahan');
        }

    public function edit_profil($id = null)
    {            
        // $where = array(
        //     'kd_user' => $id  
        // );

        if ($this->session->userdata('masuk_admin') == !FALSE) {
            $where = array(
                'kd_admin' => $id  
            );
        } else if ($this->session->userdata('masuk') == !FALSE) {
            $where = array(
                'kd_user' => $id  
            );            
        }

        if ($this->session->userdata('masuk_admin') == !FALSE) {
            $data['profil'] = $this->profil->show_profil_admin($where);
        } else if ($this->session->userdata('masuk') == !FALSE) {
            $data['profil'] = $this->profil->show_profil($where);            
        }


        $this->load->view('head');
		$this->load->view('admin/edit_profil', $data);
		$this->load->view('bawahan');
    }

    public function update_profil()
	{
        $this->load->helper('string');
        $nama_foto = random_string('alnum', 16) . '_' . $this->input->post('nama') . '.jpg';

        // die($nama_foto);

        $data = array(
            'upload_path' => './assets/img/home/', // folder lagu di simpan
            'file_name' => $nama_foto,
            'allowed_types' => 'jpg', // ekstensi yang diizinkan
            'overwrite' => true, // replace lagu yang sudah ada
            'max_size' => 1024 // 1MB
        );
        
        $this->load->library('upload', $data);

        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'password' => md5($this->input->post('password')),
            'jk' => $this->input->post('jk'),
            'foto' => $nama_foto
        );

        // die($data['password']);

        
        $where = array(
            'kd_user' => $this->input->post('kd_user')
        );
        
        $this->profil->update_profil($where, $data, 'users');
        $this->session->set_userdata('session_nama', $data['nama']);
        $msg = $this->session->set_flashdata('sukses', 'Profil Berhasil Diupdate!');

        if(!$this->upload->do_upload('berkas'))
            {
                // $error = array('error' => $this->upload->display_errors());
                // redirect('admin/dashboard/daftar-lagu');
                redirect('dashboard/profil');
            } 
            else
            {
                $msg = $this->session->set_flashdata('sukses', 'Genre Berhasil Diupdate!');
                redirect('dashboard/profil');
            }
        redirect('dashboard/profil');
            
        
    }

    public function upgrade() {
        echo "Thanks for request..";
    }
}
?>
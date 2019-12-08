<?php

class UploadController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('genre');
    }
	public function index() 
		{
		$this->load->view('head',$data);
		$this->load->view('isi');
		$this->load->view('bawahan');
		}
	
	/*public function admin() 
		{
			$this->load->view('admin/home_admin');
			$this->load->view('admin/isi_admin');
		}*/
	
		public function daftar() 
		{
		$this->load->view('admin/home_admin');
		$this->load->view('admin/daftarlagu');
		}
	
    public function admin()
    {
		$this->load->view('admin/home_admin');
        $genre['genres'] = $this->genre->show_genre()->result();
        $this->load->view('admin/isi_admin', $genre);
    }

    public function store()
    {
        $data = array(
            'upload_path' => './assets/music/', // folder lagu di simpan
            'file_name' => $this->input->post('judul_lagu'),
            'allowed_types' => 'mp3', // ekstensi yang diizinkan
            'overwrite' => true, // replace lagu yang sudah ada
            'max_size' => 20480 // 20MB
        );
        
        $this->load->library('upload', $data);

        $todb = array(
            'judul_lagu' => $this->input->post('judul_lagu'),
            'penyanyi' => $this->input->post('penyanyi'),
            'album' => $this->input->post('album'),
            'kd_genre' => $this->input->post('kd_genre')
        );

        $this->db->insert('lagu', $todb);
       

        if(!$this->upload->do_upload('berkas'))
        {
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/upload', $error);
        } 
        else
        {
            $msg = $this->session->set_flashdata('sukses', 'Lagu Berhasil Ditambahkan!');
			$this->load->view('admin/upload', $msg);
        }
			

    }

}

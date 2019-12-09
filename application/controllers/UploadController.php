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
		$this->load->view('head');
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
            $data['lagu'] = $this->playlist->joinTable()->result();
            // $data['lagu'] = $this->playlist->joinTable()->result();
            $this->load->view('admin/home_admin');
            $this->load->view('admin/daftarlagu', $data);
        }

        public function daftargenre()
        {
            $data['lagu'] = $this->playlist->ambil_genre()->result();
            // $data['lagu'] = $this->playlist->joinTable()->result();
            $this->load->view('admin/home_admin');
            $this->load->view('admin/daftargenre', $data);
        }

        public function edit_genre($id = null) 
        {
            $where = array(
                'kd_genre' => $id
            );

		    $this->load->view('admin/home_admin');
            $data['genres'] = $this->genre->show_edit_genre($where);
            $this->load->view('edit_genre', $data);
        }
        
        public function edit($id = null) 
        {
            $where = array(
                'kd_lagu' => $id
            );

		    $this->load->view('admin/home_admin');
            $data['lagu'] = $this->playlist->edit_daftar_genre($where, 'lagu')->result();
            $data['genres'] = $this->genre->show_genre()->result();
            $data['genre'] = $this->playlist->edit_daftar_genre($where, 'lagu')->result();
            $this->load->view('edit_lagu', $data);
        }

        public function update() 
        {
            $data_lagu = array(
                'upload_path' => './assets/music/', // folder lagu di simpan
                'file_name' => $this->input->post('judul_lagu'),
                'allowed_types' => 'mp3', // ekstensi yang diizinkan
                'overwrite' => true, // replace lagu yang sudah ada
                'max_size' => 20480 // 20MB
            );
            
            $this->load->library('upload', $data_lagu);
    
            $data = array(
                'judul_lagu' => $this->input->post('judul_lagu'),
                'penyanyi' => $this->input->post('penyanyi'),
                'kd_genre' => $this->input->post('kd_genre'),
                'album' => $this->input->post('album'),
                'dirilis' => $this->input->post('dirilis')
            );

            $where = array(
                'kd_lagu' => $this->input->post('kd_lagu')
            );
    
            $this->playlist->update_daftar($where, $data, 'lagu');
            
            if(!$this->upload->do_upload('berkas'))
            {
                // $error = array('error' => $this->upload->display_errors());
                // redirect('admin/dashboard/daftar-lagu');
                redirect('admin/dashboard/daftar-lagu');
            } 
            else
            {
                $msg = $this->session->set_flashdata('sukses', 'Lagu Berhasil Ditambahkan!');
                redirect('admin/dashboard/daftar-lagu');
            }
        }

        public function hapus($id = null)
        {
            $where = array('kd_lagu' => $id);
            $this->playlist->hapus_data($where,'lagu');
            redirect('admin/dashboard/daftar-lagu');
        }

        public function cari() 
        {
            $keyword = $this->input->post('keyword');
            $data['products']=$this->playlist->daftarlagu_cari($keyword);
			$this->load->view('admin/home_admin');
            $this->load->view('daftarlagu-cari',$data);
        }
	
    public function admin()
    {
		$this->load->view('admin/home_admin');
        $genre['genres'] = $this->genre->show_genre()->result();
        $this->load->view('admin/inputlagu', $genre);
    }

    public function tambahgenre()
    {
        $this->load->view('admin/home_admin');
        $this->load->view('admin/isi_genre');
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
            'kd_genre' => $this->input->post('kd_genre'),
            'album' => $this->input->post('album'),
            'dirilis' => $this->input->post('dirilis'),
            'tgl_upload' => time()
        );

        $this->db->insert('lagu', $todb);
       

        if(!$this->upload->do_upload('berkas'))
        {
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/home_admin');
            $this->load->view('admin/isi_admin', $error);;
        } 
        else
        {
            $msg = $this->session->set_flashdata('sukses', 'Lagu Berhasil Ditambahkan!');
            redirect('admin/dashboard/daftar-lagu');
        }
			

    }

    public function storegenre()
    {
        $data = array(
            'upload_path' => './assets/img/home/pop/', // folder lagu di simpan
            'file_name' => $this->upload->data('file_name'),
            'allowed_types' => 'jpg|jpeg|png', // ekstensi yang diizinkan
            'overwrite' => true, // replace lagu yang sudah ada
            'max_size' => 1024 // 1MB
        );
        
        $this->load->library('upload', $data);
        die($data['file_name']);
        $todb = array(
            'tgl_buat' => time(),
            'genre' => $this->input->post('genre'),
            'thumbnail' => $data['file_name'],
            'slug' => $this->input->post('slug')
        );

        $this->db->insert('genre_music', $todb);
       

        if(!$this->upload->do_upload('berkas'))
        {
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/home_admin');
            $this->load->view('admin/isi_genre', $error);;
        } 
        else
        {
            $msg = $this->session->set_flashdata('sukses', 'Lagu Berhasil Ditambahkan!');
            redirect('admin/dashboard/daftar-genre');
        }
			

    }

}

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
        
        public function edit($id = null) 
        {
            $where = array(
                'kd_lagu' => $id
            );

		    $this->load->view('admin/home_admin');
            $data['lagu'] = $this->playlist->edit_daftar($where, 'lagu')->result();
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

}

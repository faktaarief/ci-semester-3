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
    }


public function index() {
    if($this->session->userdata('masuk') != FALSE)
        {
            redirect(base_url('dashboard'));
        }
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
	
}
?>
<?php

class Welcomespotify extends CI_Controller {

Public function index() {
    $this->load->view('v_header');
    $this->load->view('v_index');
    //$this->load->view('view-form-spotify');
    $this->load->view('v_footer');
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

    // $this->load->view('welcome_message', $data);
    
    }


}
}
?>
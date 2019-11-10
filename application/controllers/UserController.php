<?php

class UserController extends CI_Controller {

    public function create() {
        $this->load->view('users/v_create');
    }

}
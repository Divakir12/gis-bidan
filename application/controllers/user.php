<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data User',
            'map' =>  $this->googlemaps->create_map(),
            'isi' => 'user/v_list'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->user_login->login($username, $password);
        }

        $data = array(
            'title' => 'Login',
            'map' =>  $this->googlemaps->create_map(),
            'isi' => 'v_login'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function logout()
    {
        $this->user_login->logout();
    }
}

/* End of file Controllername.php */

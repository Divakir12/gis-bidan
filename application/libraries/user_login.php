<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_user');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->m_user->login($username, $password);
        if ($cek) {
            $username = $cek->username;
            $nama = $cek->nama;

            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nama', $nama);

            redirect('home');
        } else {
            $this->ci->session->set_flashdata('pesan', 'Username atau Password salah');
            redirect('user/login');
        }
    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda belum login, silakan login terlebih dulu');
            redirect('user/login');
        }
    }

    public function logout()
    {

        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('password');
        $this->ci->session->set_flashdata('pesan', 'Logout sukses');
        redirect('user/login');
    }
}

/* End of file LibraryName.php */

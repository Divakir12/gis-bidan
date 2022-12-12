<?php

defined('BASEPATH') or exit('No direct script access allowed');

class bidan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_bidan');
    }


    public function index()
    {
        $data = array(
            'title' => 'Data Bidan Purwokerto',
            'map' =>  $this->googlemaps->create_map(),
            'bidan' => $this->m_bidan->lists(),
            'isi' => 'bidan/v_list'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function input()
    {
        $this->user_login->cek_login();
        //memunculkan peta
        $config['center'] = '-7.424629447404052, 109.23010441322953';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);
        $marker['position'] = '-7.424629447404052, 109.23010441322953';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setToForm(event.latLng.lat(), event.latLng.lng())';
        $this->googlemaps->add_marker($marker);
        //------------ selese bos

        $this->form_validation->set_rules('tempat', 'Nama Tempat Praktik Bidan', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Bidan Purwokerto',
                'map' =>  $this->googlemaps->create_map(),
                'isi' => 'bidan/v_add'
            );
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'tempat' => $this->input->post('tempat'),
                'no_telepon' => $this->input->post('no_telepon'),
                'alamat' => $this->input->post('alamat'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_bidan->input($data);
            $this->session->set_flashdata('pesan', 'data berhasil disimpan');
            redirect('bidan');
        }
    }

    public function edit($id_bidan)
    {
        $this->user_login->cek_login();

        //memunculkan peta
        $config['center'] = '-7.424629447404052, 109.23010441322953';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);
        $marker['position'] = '-7.424629447404052, 109.23010441322953';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setToForm(event.latLng.lat(), event.latLng.lng())';
        $this->googlemaps->add_marker($marker);
        //------------ selese bos

        $this->form_validation->set_rules('tempat', 'Nama Tempat Praktik Bidan', 'required');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Bidan Purwokerto',
                'map' =>  $this->googlemaps->create_map(),
                'bidan' => $this->m_bidan->detail($id_bidan),
                'isi' => 'bidan/v_edit',
            );
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_bidan' => $id_bidan,
                'tempat' => $this->input->post('tempat'),
                'no_telepon' => $this->input->post('no_telepon'),
                'alamat' => $this->input->post('alamat'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_bidan->edit($data);
            $this->session->set_flashdata('pesan', 'data berhasil diedit');
            redirect('bidan');
        }
    }

    public function delete($id_bidan)
    {
        $this->user_login->cek_login();

        $data = array('id_bidan' => $id_bidan);
        $this->m_bidan->delete($data);
        $this->session->set_flashdata('pesan', 'data berhasil di hapus');
        redirect('bidan');
    }
}

/* End of file Controllername.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
        $this->load->model('m_bidan');
    }

    public function index()
    {
        $config['center'] = '-7.424629447404052, 109.23010441322953';
        $config['zoom'] = '15';
        $this->googlemaps->initialize($config);
        //---pemetaan---
        $bidan = $this->m_bidan->lists();
        foreach ($bidan as $key => $value) {
            $marker = array();
            $marker['position'] = "$value->latitude, $value->longitude";
            $marker['animation'] = "DROP";
            $marker['infowindow_content'] = '<div class="media" style="width: 250px;">';
            $marker['infowindow_content'] = '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5> Nama Tempat Praktik Bidan: ' . $value->tempat . '<h5>';
            $marker['infowindow_content'] .= '<p> Nomor Telepon: ' . $value->no_telepon . '</p>';
            $marker['infowindow_content'] .= '<p> Alamat: ' . $value->alamat . '</p>';
            $marker['infowindow_content'] .= '<p> Deskripsi: ' . $value->deskripsi . '</p>';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '</div>';
            $this->googlemaps->add_marker($marker);
        }
        //end pemetaan
        $data = array(
            'title' => 'Pemetaan Bidan Purwokerto',
            'map' =>  $this->googlemaps->create_map(),
            'isi' => 'v_home'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */

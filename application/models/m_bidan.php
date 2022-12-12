<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_bidan extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('bidan');
        $this->db->order_by('id_bidan', 'asc');
        return $this->db->get()->result();
    }

    public function input($data)
    {
        $this->db->insert('bidan', $data);
    }

    public function detail($id_bidan)
    {
        $this->db->select('*');
        $this->db->from('bidan');
        $this->db->where('id_bidan', $id_bidan);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_bidan', $data['id_bidan']);
        $this->db->update('bidan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_bidan', $data['id_bidan']);
        $this->db->delete('bidan', $data);
    }
}

/* End of file ModelName.php */

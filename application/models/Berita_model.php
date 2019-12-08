<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('berita.*, user.name');
        $this->db->from('berita');
        //relasi database
        $this->db->join('user', 'user.id = berita.id_user', 'left');
        //end relasi database
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    //show data detail
    public function detail($id)
    {
        $query = $this->db->get_where('berita', array('id' => $id));
        return $query->row();
    }

    //tambah data
    public function add($data)
    {
        $this->db->insert('berita', $data);
    }

    //edit data
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('berita', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('berita', $data);
    }
}

/* End of file Pengguna_model.php */
/* Location: ./application/models/Pengguna_model.php */

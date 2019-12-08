<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('berkas.*, user.name');
        $this->db->from('berkas');
        //relasi database
        $this->db->join('user', 'user.id = berkas.id_user', 'left');
        //end relasi database
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    //show data detail
    public function detail($id)
    {
        $query = $this->db->get_where('berkas', array('id' => $id));
        return $query->row();
    }

    //tambah data
    public function add($data)
    {
        $this->db->insert('berkas', $data);
    }

    //edit data
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('berkas', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('berkas', $data);
    }
}

/* End of berkas Pengguna_model.php */
/* Location: ./application/models/Pengguna_model.php */

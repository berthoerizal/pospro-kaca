<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Excel_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $query = $this->db->get('excel');
        return $query->result();
    }

    //tambah data
    public function add($data)
    {
        $this->db->insert('excel', $data);
    }

    //edit data
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('excel', $data);
    }

    //delete data
    public function delete()
    {
        $this->db->empty_table('excel');
    }

    function autofill_listing()
    {
        return $this->db->get('excel');
    }

    function autofill_cari($username)
    {
        $query = $this->db->get_where('excel', array('username' => $username));
        return $query;
    }
}

/* End of file Pengguna_model.php */
/* Location: ./application/models/Pengguna_model.php */

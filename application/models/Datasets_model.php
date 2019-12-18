<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasets_model extends CI_Model
{
    public $CI;

    public function __construct()
    {
        parent::__construct();
        $CI = &get_instance();
        $this->db2 = $CI->load->database('db_kaca', TRUE);
    }

    public function listing()
    {
        $query = $this->db2->get('tb_datasets');
        return $query->result();
    }

    //show data detail
    public function detail($id)
    {
        $query = $this->db2->get_where('tb_datasets', array('id' => $id));
        return $query->row();
    }

    //tambah data
    public function add($data)
    {
        $this->db2->insert('tb_datasets', $data);
    }

    //edit data
    public function update($data)
    {
        $this->db2->where('id', $data['id']);
        $this->db2->update('tb_datasets', $data);
    }

    //delete data
    public function delete($data)
    {
        $this->db2->where('id', $data['id']);
        $this->db2->delete('tb_datasets', $data);
    }
}

/* End of file Pengguna_model.php */
/* Location: ./application/models/Pengguna_model.php */

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
        $this->db2->select('tb_datasets.*, tb_jenis.kode_jenis, tb_jenis.nama_jenis');
        $this->db2->from('tb_datasets');
        //relasi database
        $this->db2->join('tb_jenis', 'tb_jenis.kode_jenis = tb_datasets.id_jenis', 'left');
        //end relasi database
        $this->db2->order_by('id');
        $query = $this->db2->get();
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
    public function delete_all()
    {
        $this->db2->empty_table('tb_datasets');
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

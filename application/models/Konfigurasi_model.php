<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model
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
        $query = $this->db2->get('konfigurasi');
        return $query->row();
    }

    //show data detail
    public function detail($id)
    {
        $query = $this->db2->get_where('konfigurasi', array('id' => $id));
        return $query->row();
    }

    //edit data
    public function update($data)
    {
        $this->db2->where('id', $data['id']);
        $this->db2->update('konfigurasi', $data);
    }
}

/* End of file Pengguna_model.php */
/* Location: ./application/models/Pengguna_model.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autofill extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('akses_level') == 1 || $this->session->userdata('akses_level') == 2) {
            $this->load->model('excel_model');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        // $data['title'] = 'AutoFill';
        // $data['users'] = $this->db->get_where('users', ['fullname' => $this->session->userdata('fullname')])->row_array();
        // $data['record'] =  $this->surat_model->tampil_data();
        $data = array(
            'title' => 'Auto Fill',
            'record' => $this->excel_model->autofill_listing(),
            'isi' => 'admin/autofill/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function cari()
    {
        $username = $_GET['username'];
        $cari = $this->excel_model->autofill_cari($username)->result();
        echo json_encode($cari);
    }
}

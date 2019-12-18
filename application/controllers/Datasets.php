<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasets extends CI_Controller
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
            $this->load->model('datasets_model');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $datasets = $this->datasets_model->listing();
        $data = array(
            'title' => "Datasets",
            'isi' => 'admin/datasets/list',
            'datasets' => $datasets
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Entri_baru extends CI_Controller
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
        $this->load->model('jeniskaca_model');
        $this->load->model('datasets_model');
    }

    public function index()
    {
        $valid = $this->form_validation;
        $valid->set_rules('ri', 'Ri', 'required', array('required' => 'Ri harus diisi'));
        $valid->set_rules('na', 'Na', 'required', array('required' => 'Na harus diisi'));
        $valid->set_rules('mg', 'Mg', 'required', array('required' => 'Mg harus diisi'));
        $valid->set_rules('al', 'Al', 'required', array('required' => 'Al harus diisi'));
        $valid->set_rules('si', 'Si', 'required', array('required' => 'Si harus diisi'));
        $valid->set_rules('k', 'K', 'required', array('required' => 'K harus diisi'));
        $valid->set_rules('ca', 'Ca', 'required', array('required' => 'Ca harus diisi'));
        $valid->set_rules('ba', 'Ba', 'required', array('required' => 'Ba harus diisi'));
        $valid->set_rules('fe', 'Fe', 'required', array('required' => 'Fe harus diisi'));
        $valid->set_rules('nama_jenis', 'Jenis', 'required', array('required' => 'Hasil Jenis Kaca tidak boleh kosong'));

        if ($valid->run() === FALSE) {
            $lama = $this->datasets_model->listing();
            $jumlah_data = count($this->datasets_model->listing());
            $jenis_kaca = $this->jeniskaca_model->listing();
            if ($this->session->userdata('username')) {
                $data = array(
                    'title' => 'Entri Baru Kaca',
                    'isi' => 'admin/entri_baru/list',
                    'lama' => $lama,
                    'jumlah_data' => $jumlah_data,
                    'jenis_kaca' => $jenis_kaca
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            } else {
                $data = array(
                    'title' => 'Entri Baru Kaca',
                    'isi' => 'entri_baru/list',
                    'lama' => $lama,
                    'jumlah_data' => $jumlah_data,
                    'jenis_kaca' => $jenis_kaca
                );
                $this->load->view('layout/wrapper', $data, FALSE);
            }
        } else {
            $data = array(
                "ri" => $this->input->post('ri'),
                "na" => $this->input->post('na'),
                "mg" => $this->input->post('mg'),
                "al" => $this->input->post('al'),
                "si" => $this->input->post('si'),
                "k" => $this->input->post('k'),
                "ca" => $this->input->post('ca'),
                "ba" => $this->input->post('ba'),
                "fe" => $this->input->post('fe'),
                "id_jenis" => $this->input->post('id_jenis')
            );

            $this->datasets_model->add($data);
            $this->session->set_flashdata('sukses', 'Data berhasil ditambah');
            redirect(base_url('entri_baru'));
        }
    }
}

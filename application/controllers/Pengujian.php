<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengujian extends CI_Controller
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
            $this->load->model('pengujian_model');
            $this->load->model('jeniskaca_model');
            $this->load->model('datasets_model');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $baru = array(
            "ri" => $this->input->post('ri'),
            "na" => $this->input->post('na'),
            "mg" => $this->input->post('mg'),
            "al" => $this->input->post('al'),
            "si" => $this->input->post('si'),
            "k" => $this->input->post('k'),
            "ca" => $this->input->post('ca'),
            "ba" => $this->input->post('ba'),
            "fe" => $this->input->post('fe')
        );

        $i = 0;
        $lama = $this->datasets_model->listing();
        if ($lama != NULL) {
            foreach ($lama as $lama) {
                $jarak[$i] =  sqrt(pow($lama->ri - $baru['ri'], 2) + pow($lama->na - $baru['na'], 2) + pow($lama->mg - $baru['mg'], 2) + pow($lama->al - $baru['al'], 2) + pow($lama->si - $baru['si'], 2) + pow($lama->k - $baru['k'], 2) + pow($lama->ca - $baru['ca'], 2) + pow($lama->ba - $baru['ba'], 2) + pow($lama->fe - $baru['fe'], 2));
                $i++;
            }


            $n = count($this->datasets_model->listing());
            $n_datasets = $this->datasets_model->listing();
            for ($i = 0; $i < $n; $i++) {
                $data = array(
                    "id" => $n_datasets[$i]->id,
                    "jarak" => $jarak[$i]
                );
                $this->pengujian_model->update($data);
            }

            if ($data) {
                $datasets = $this->pengujian_model->listing();
                $data_js = $this->pengujian_model->listing();
                $jenis_kaca = $this->jeniskaca_model->listing();
                $data = array(
                    'title1' => 'Pengujian',
                    'title2' => 'Jarak Data Pengujian',
                    'isi' => 'admin/pengujian/list',
                    'datasets' => $datasets,
                    'jenis_kaca' => $jenis_kaca,
                    'data_js' => $data_js,
                    'baru' => $baru
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            }
        } else {
            $this->session->set_flashdata('sukses', 'Datasets masih kosong, harap isi datasets terlebih dahulu.');
            redirect(base_url('datasets'));
        }
    }
}

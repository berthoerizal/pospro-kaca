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
            $this->load->model('jeniskaca_model');
            $this->load->library('PHPExcel/IOFactory');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $datasets = $this->datasets_model->listing();
        $jenis_kaca = $this->jeniskaca_model->listing();
        $jenis_kaca_edit = $this->jeniskaca_model->listing();
        $data = array(
            'title' => 'Datasets Kaca',
            'isi' => 'admin/datasets/list',
            'datasets' => $datasets,
            'jenis_kaca' => $jenis_kaca,
            'jenis_kaca_edit' => $jenis_kaca_edit
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function store()
    {
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
        redirect(base_url('datasets'));
    }

    public function update($id)
    {
        $data = array(
            "id" => $id,
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

        $this->datasets_model->update($data);
        $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
        redirect(base_url('datasets'));
    }

    public function store_all()
    {
        $this->datasets_model->delete_all();

        // $datasets = $this->datasets_model->listing();
        // //hapus file
        // if ($datasets != "") {
        //     unlink('./assets/import/');
        // }
        // //end hapus file

        $this->load->library('upload');
        $fileName = "file_" . time(); //nama file
        $config['upload_path'] = './asset/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 1024000;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('excel')) {
            $xcl = $this->upload->data();
            $Name = $xcl['file_name'];
            $link = base_url();
            $inputFileName = './asset/' . $this->upload->data()['file_name'];
        }

        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; $row++) { //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

            //Sesuaikan sama nama kolom tabel di database                                
            $data = array(
                "ri" => $rowData[0][0],
                "na" => $rowData[0][1],
                "mg" => $rowData[0][2],
                "al" => $rowData[0][3],
                "si" => $rowData[0][4],
                "k" => $rowData[0][5],
                "ca" => $rowData[0][6],
                "ba" => $rowData[0][7],
                "fe" => $rowData[0][8],
                "id_jenis" => $rowData[0][9]
            );
            //sesuaikan nama dengan nama tabel
            $insert = $this->datasets_model->add($data);
        }

        $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
        redirect(base_url('datasets'));
    }

    public function destroy_all()
    {
        $this->datasets_model->delete_all();
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('datasets'));
    }

    public function destroy($id)
    {
        $datasets = $this->datasets_model->detail($id);
        $data = array('id' => $datasets->id);
        $this->datasets_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('datasets'));
    }
}

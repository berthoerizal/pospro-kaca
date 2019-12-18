<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Excel extends CI_Controller
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
        if ($this->session->userdata('akses_level') == 1) {
            $this->load->model('excel_model');
            $this->load->library('PHPExcel/IOFactory');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $excel = $this->excel_model->listing();
        if ($excel != NULL) {
            $data = array(
                'title' => 'Import Excel',
                'isi' => 'admin/excel/list',
                'excel' => $excel
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $data = array(
                'title' => 'Import Excel',
                'isi' => 'admin/excel/list_null',
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    public function store()
    {
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
                "username" => $rowData[0][0],
                "nama" => $rowData[0][1],
                "nomor_tps" => $rowData[0][2]
            );
            //sesuaikan nama dengan nama tabel
            $insert = $this->excel_model->add($data);
        }

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data berhasil ditambah');
            redirect(base_url('excel'));
        } else {
            $this->session->set_flashdata('sukses', 'Data gagal ditambah');
            redirect(base_url('excel'));
        }
    }

    public function update()
    {
        $this->excel_model->delete();
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
                "username" => $rowData[0][0],
                "nama" => $rowData[0][1],
                "nomor_tps" => $rowData[0][2]
            );
            //sesuaikan nama dengan nama tabel
            $insert = $this->excel_model->add($data);
        }

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
            redirect(base_url('excel'));
        } else {
            $this->session->set_flashdata('sukses', 'Data gagal diperbarui');
            redirect(base_url('excel'));
        }
    }

    public function destroy_all()
    {
        $this->excel_model->delete();
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('excel'));
    }
}

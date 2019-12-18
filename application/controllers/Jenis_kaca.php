<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_kaca extends CI_Controller
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
            $this->load->model('jeniskaca_model');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $jenis_kaca = $this->jeniskaca_model->listing();
        $this->form_validation->set_rules('nama_jenis', 'Nama Jenis', 'required', array('required' => 'Jenis Kaca harus diisi'));

        if ($this->form_validation->run() === FALSE) {
            $data = array(
                'title' => "Jenis Kaca",
                'isi' => 'admin/jenis_kaca/list',
                'jenis_kaca' => $jenis_kaca
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_jenis' => $this->input->post('nama_jenis'),
                'kode_jenis' => $this->input->post('kode_jenis')
            );

            $this->jeniskaca_model->add($data);
            $this->session->set_flashdata('sukses', 'Data berhasil ditambah');
            redirect(base_url('jenis_kaca'));
        }
    }

    public function update($id)
    {
        $jenis_kaca = $this->jeniskaca_model->listing();
        $this->form_validation->set_rules('nama_jenis', 'Nama Jenis', 'required', array('required' => 'Jenis Kaca harus diisi'));
        $this->form_validation->set_rules('kode_jenis', 'Kode Jenis', 'required', array(
            'required' => 'Kode Jenis harus diisi'
        ));

        if ($this->form_validation->run() === FALSE) {
            $data = array(
                'title'     => 'User',
                'isi'         => 'admin/jenis_kaca/list',
                'jenis_kaca'    => $jenis_kaca
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {
            $data = array(
                'id'    => $id,
                'nama_jenis' => $this->input->post('nama_jenis'),
                'kode_jenis' => $this->input->post('kode_jenis')
            );

            $this->jeniskaca_model->update($data);
            $this->session->set_flashdata('sukses', 'Data telah diperbarui');
            redirect(base_url('jenis_kaca'));
        }
    }

    public function destroy($id)
    {
        $jenis_kaca = $this->jeniskaca_model->detail($id);
        $data = array('id' => $jenis_kaca->id);
        $this->jeniskaca_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('jenis_kaca'));
    }
}

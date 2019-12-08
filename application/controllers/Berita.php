<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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
            $this->load->model('berita_model');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $berita = $this->berita_model->listing();
        $data = array(
            'title' => 'Berita',
            'isi' => 'admin/berita/list',
            'berita' => $berita
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function create()
    {
        $data = array(
            'title' => 'Tambah Berita',
            'isi' => 'admin/berita/create'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function store()
    {
        $valid = $this->form_validation;
        $valid->set_rules('judul', 'Judul Berita', 'required', array('required' => 'Judul berita harus diisi'));
        $valid->set_rules('isi', 'Isi', 'required', array('required' => 'Isi berita materi harus diisi'));

        if ($valid->run() === FALSE) {
            $data = array(
                'title' => 'Tambah Berita',
                'isi' => 'admin/berita/create'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $slug_judul = url_title($this->input->post('judul'), 'dash', TRUE);
            $data = array(
                'id_user'            => $this->session->userdata('id'),
                'judul'         => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'slug_judul'          => $slug_judul
            );

            $this->berita_model->add($data);
            $this->session->set_flashdata('sukses', 'Data berhasil ditambah');
            redirect(base_url('berita'));
        }
    }

    public function edit($id)
    {
        $berita = $this->berita_model->detail($id);
        $data = array(
            'title' => 'Edit Berita',
            'isi' => 'admin/berita/edit',
            'berita' => $berita
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function update($id)
    {
        $valid = $this->form_validation;
        $valid->set_rules('judul', 'Judul Berita', 'required', array('required' => 'Judul berita harus diisi'));
        $valid->set_rules('isi', 'Isi', 'required', array('required' => 'Isi berita materi harus diisi'));
        $berita = $this->berita_model->detail($id);

        if ($valid->run() === FALSE) {
            $data = array(
                'title' => 'Edit Berita',
                'isi' => 'admin/berita/edit',
                'berita' => $berita
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $slug_judul = url_title($this->input->post('judul'), 'dash', TRUE);
            $data = array(
                'id' => $id,
                'id_user' => $this->session->userdata('id'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'slug_judul' => $slug_judul
            );

            $this->berita_model->update($data);
            $this->session->set_flashdata('sukses', 'Data berhasil ditambah');
            redirect(base_url('berita'));
        }
    }

    public function destroy($id)
    {
        $berita = $this->berita_model->detail($id);
        $data = array('id' => $berita->id);
        $this->berita_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('berita'));
    }
}

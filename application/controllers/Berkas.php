<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas extends CI_Controller
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
            $this->load->model('berkas_model');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $berkas = $this->berkas_model->listing();
        $data = array(
            'title' => 'Berkas',
            'isi' => 'admin/berkas/list',
            'berkas' => $berkas
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function create()
    {
        $data = array(
            'title' => 'Tambah Berkas',
            'isi' => 'admin/berkas/create'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function store()
    {
        $this->form_validation->set_rules('name_file', 'Nama File', 'required|max_length[50]', array(
            'required' => 'Nama File harus diisi',
            'max_length' => 'Nama File/Berkas maksimal 50 karakter'
        ));

        if ($this->form_validation->run()) {
            $config['upload_path']         = './asset/upload/image/';  //lokasi folder upload
            $config['allowed_types']     = 'gif|jpg|png|svg|tiff|doc|docx|xls|xlsx|pdf|ppt|pptx|txt|doc|docx|zip|rar'; //format file yang di-upload
            $config['max_size']            = '10000'; // KB	
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $data = array(
                    'title'     => 'Tambah Berkas',
                    'isi'         => 'admin/berkas/create'
                );
                $this->load->view('admin/layout/wrapper', $data);

                // Masuk database 
            } else {
                $upload_data                = array('uploads' => $this->upload->data());
                // Image Editor
                $config['image_library']    = 'gd2';
                $config['source_image']     = './asset/upload/image/' . $upload_data['uploads']['file_name'];
                $config['new_image']         = './asset/upload/image/thumbs/';
                $config['create_thumb']     = TRUE;
                $config['quality']             = "100%";
                $config['maintain_ratio']     = TRUE;
                $config['width']             = 360; // Pixel
                $config['height']             = 360; // Pixel
                $config['x_axis']             = 0;
                $config['y_axis']             = 0;
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i = $this->input;
                $data = array(
                    'name_file'    => $i->post('name_file'),
                    'file'        => $upload_data['uploads']['file_name'],
                    'id_user'        => $this->session->userdata('id')
                );

                $this->berkas_model->add($data);
                $this->session->set_flashdata('sukses', 'Data berhasil ditambah');
                redirect(base_url('berkas'));
            }
        }

        $data = array(
            'title' => 'Tambah Berkas',
            'isi' => 'admin/berkas/create'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function edit($id)
    {
        $berkas = $this->berkas_model->detail($id);
        $data = array(
            'title' => 'Edit berkas',
            'isi' => 'admin/berkas/edit',
            'berkas' => $berkas
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name_file', 'Nama File', 'required|max_length[50]', array(
            'required' => 'Nama File harus diisi',
            'max_length' => 'Nama File/Berkas maksimal 50 karakter'
        ));

        if ($this->form_validation->run()) {
            //kalau ada gambar
            if (!empty($_FILES['file']['name'])) {
                $config['upload_path']         = './asset/upload/image/';  //lokasi folder upload
                $config['allowed_types']     = 'gif|jpg|png|svg|tiff|doc|docx|xls|xlsx|pdf|ppt|pptx|txt|doc|docx|zip|rar'; //format file yang di-upload
                $config['max_size']            = '10000'; // KB	
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $berkas = $this->berkas_model->detail($id);
                    $data = array(
                        'title' => 'Edit berkas',
                        'isi' => 'admin/berkas/edit',
                        'berkas' => $berkas
                    );
                    $this->load->view('admin/layout/wrapper', $data, FALSE);

                    // Masuk database 
                } else {
                    $upload_data                = array('uploads' => $this->upload->data());
                    // Image Editor
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './asset/upload/image/' . $upload_data['uploads']['file_name'];
                    $config['new_image']         = './asset/upload/image/thumbs/';
                    $config['create_thumb']     = TRUE;
                    $config['quality']             = "100%";
                    $config['maintain_ratio']     = TRUE;
                    $config['width']             = 360; // Pixel
                    $config['height']             = 360; // Pixel
                    $config['x_axis']             = 0;
                    $config['y_axis']             = 0;
                    $config['thumb_marker']     = '';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    //hapus gambar
                    $berkas = $this->berkas_model->detail($id);
                    if ($berkas->file != "") {
                        unlink('./asset/upload/image/' . $berkas->file);
                        unlink('./asset/upload/image/thumbs/' . $berkas->file);
                    }
                    //end hapus gambar

                    $i = $this->input;
                    $data = array(
                        'id' => $id,
                        'name_file'    => $i->post('name_file'),
                        'file'        => $upload_data['uploads']['file_name'],
                        'id_user'        => $this->session->userdata('id')
                    );

                    $this->berkas_model->update($data);
                    $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
                    redirect(base_url('berkas'));
                }
            } else {
                $i = $this->input;
                $data = array(
                    'id' => $id,
                    'name_file'    => $i->post('name_file'),
                    'id_user'        => $this->session->userdata('id')
                );

                $this->berkas_model->update($data);
                $this->session->set_flashdata('sukses', 'Data berhasil diperbarui');
                redirect(base_url('berkas'));
            }
        }

        $berkas = $this->berkas_model->detail($id);
        $data = array(
            'title' => 'Edit berkas',
            'isi' => 'admin/berkas/edit',
            'berkas' => $berkas
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function destroy($id)
    {
        $berkas = $this->berkas_model->detail($id);

        //hapus gambar
        if ($berkas->file != "") {
            unlink('./asset/upload/image/' . $berkas->file);
            unlink('./asset/upload/image/thumbs/' . $berkas->file);
        }
        //end hapus gambar

        $data = array('id' => $id);
        $this->berkas_model->delete($data);

        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('berkas'));
    }

    public function download($id)
    {
        $berkas = $this->berkas_model->detail($id);
        $file = $berkas->file;
        force_download('./asset/upload/image/' . $file, NULL);
    }
}

<script src="<?php echo base_url('asset/tinymce/js/tinymce/tinymce.min.js') ?>" type="text/javascript"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 100,
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        image_advtab: true,
        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    if ($this->session->flashdata('sukses')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '</div>';
    }
    //error validasi
    echo validation_errors('<div class="alert alert-warning">', '</div>'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('berita'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <?php
            echo form_open(base_url('berita/store'));
            ?>
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control form-control-sm" name="judul" id="judul" placeholder="Judul Berita" value="<?php echo set_value('judul'); ?>" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
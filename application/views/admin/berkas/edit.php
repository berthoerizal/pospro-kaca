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
            <a href="<?php echo base_url('berkas'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart(base_url('berkas/update/' . $berkas->id)); ?>
            <div class="form-group">
                <label for="name_file">Nama File</label>
                <input type="text" class="form-control form-control-sm" name="name_file" id="name_file" placeholder="Nama File" value="<?php echo $berkas->name_file; ?>" required>
            </div>
            <div class="form-group">
                <label for="file">File</label><br>
                <input type="file" name="file" id="file" multiple onchange="GetFileSize()"><br>
                <span id="fp" style="color: red; font-weight: bold;"></span>
            </div>
            <br>
            <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
    function GetFileSize() {
        var fi = document.getElementById('file'); // GET THE FILE INPUT.

        // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
        if (fi.files.length > 0) {
            // RUN A LOOP TO CHECK EACH SELECTED FILE.
            for (var i = 0; i <= fi.files.length - 1; i++) {

                var fsize = fi.files.item(i).size; // THE SIZE OF THE FILE.
                if (fsize >= 1073741824) {
                    fsize = (fsize / 1073741824) + ' GB';
                } else if (fsize >= 1048576) {
                    fsize = (fsize / 1048576) + ' MB';
                } else if (fsize >= 1024) {
                    fsize = (fsize / 1024) + ' KB';
                } else if (fsize > 1) {
                    fsize = fsize + ' bytes';
                } else if (fsize == 1) {
                    fsize = fsize + ' byte';
                } else {
                    fsize = '0 bytes';
                }
            }
            document.getElementById('fp').innerHTML = fsize;
        }
    }
</script>
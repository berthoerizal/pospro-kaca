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
    <h1 class="h4 mb-2 text-gray-800 ml-5"><?php echo $title; ?></h1>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-3 mr-2 ml-5 mb-2">
            <div class="card shadow col-md-12">
                <div class="card-body">
                    <?php echo form_open_multipart(base_url('excel/store')); ?>
                    <div class="form-group">
                        <input id="excel" type="file" name="excel" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow col-md-12">
                <div class="card-header py-3">
                    <a href="<?php echo base_url('excel/destroy_all'); ?>" class="btn btn-dark btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Nomor TPS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($excel as $excel) { ?>
                                    <tr>
                                        <td><?php echo $excel->username; ?></td>
                                        <td><?php echo $excel->nama; ?></td>
                                        <td><?php echo $excel->nomor_tps; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
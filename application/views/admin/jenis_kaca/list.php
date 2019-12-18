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
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus-circle"></i> Tambah Jenis Kaca</h6>
                </div>
                <div class="card-body">
                    <?php echo form_open(base_url('jenis_kaca')); ?>
                    <div class="form-group">
                        <label for="nama_jenis">Jenis Kaca</label>
                        <input type="text" name="nama_jenis" id="nama_jenis" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="kode_jenis">Kode Jenis</label>
                        <input type="number" name="kode_jenis" id="kode_jenis" class="form-control" required>
                    </div>
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
                    <!-- <h6 class="m-0 font-weight-bold text-primary"></h6> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jenis Kaca</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($jenis_kaca as $jenis_kaca) { ?>
                                    <tr>
                                        <td><?php echo $jenis_kaca->kode_jenis; ?></td>
                                        <td><?php echo $jenis_kaca->nama_jenis; ?></td>
                                        <td><?php include('edit.php'); ?><?php include('delete.php'); ?></td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
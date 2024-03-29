<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
    <h1 class="h4 mb-2 text-gray-800"><?php echo $title; ?></h1>

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow col-md-12">
                <div class="card-header py-3">
                    <div class="col-md-12">
                        <div class="float-right">
                            <?php include('create.php'); ?>
                            <a href="<?php echo base_url('jenis_kaca'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-window-restore"></i> Jenis Kaca</a>
                            <?php include('delete_all.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ri</th>
                                    <th>Na</th>
                                    <th>Mg</th>
                                    <th>Al</th>
                                    <th>Si</th>
                                    <th>K</th>
                                    <th>Ca</th>
                                    <th>Ba</th>
                                    <th>Fe</th>
                                    <th>Class</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($datasets as $datasets) { ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $datasets->ri; ?></td>
                                        <td><?php echo $datasets->na; ?></td>
                                        <td><?php echo $datasets->mg; ?></td>
                                        <td><?php echo $datasets->al; ?></td>
                                        <td><?php echo $datasets->si; ?></td>
                                        <td><?php echo $datasets->k; ?></td>
                                        <td><?php echo $datasets->ca; ?></td>
                                        <td><?php echo $datasets->ba; ?></td>
                                        <td><?php echo $datasets->fe; ?></td>
                                        <td><a href="#" data-toggle="popover" data-placement="top" title="Jenis Kaca" data-content="<?php echo $datasets->nama_jenis; ?>"><b><?php echo $datasets->id_jenis; ?></b></a></td>
                                        <td><?php include('edit.php'); ?>
                                            <?php include('delete.php'); ?></td>
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
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
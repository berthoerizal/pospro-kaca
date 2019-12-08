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
             <a href="<?php echo base_url('berita/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Judul</th>
                             <th>Oleh</th>
                             <th>Tanggal Upload</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($berita as $berita) { ?>
                             <tr>
                                 <td><?php echo $berita->slug_judul; ?></td>
                                 <td><?php echo $berita->name; ?></td>
                                 <td><?php echo date("d-M-Y", strtotime($berita->date_berita)); ?></td>
                                 <td>
                                     <a href="<?php echo base_url('berita/edit/' . $berita->id); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                     <?php include('delete.php'); ?>
                                 </td>
                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->
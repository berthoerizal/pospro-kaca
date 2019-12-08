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
             <?php include('create.php'); ?>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Nama</th>
                             <th>Username</th>
                             <th>Akses Level</th>
                             <th>Tanggal</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($user as $user) { ?>
                             <tr>
                                 <td><?php echo $user->name; ?></td>
                                 <td><?php echo $user->username; ?></td>
                                 <td><?php if ($user->akses_level == 1) {
                                                echo "Usermaster";
                                            } else {
                                                echo "User";
                                            } ?></td>
                                 <td><?php echo date("d-M-Y", strtotime($user->date)); ?></td>
                                 <td>
                                     <?php include('edit.php'); ?>
                                     <?php include('resetpassword.php'); ?>
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
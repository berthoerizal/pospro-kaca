<?php
$konfig = $this->konfigurasi_model->listing(); ?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            PK
        </div>
        <div class="sidebar-brand-text mx-3">POSPRO-<?php echo $konfig->nama_web; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>entri_baru">
            <i class="fa fa-calendar-alt"></i>
            <span>Entri Baru Kaca</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- <hr class="sidebar-divider"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Alerts -->
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center my-3" href="<?php echo base_url()?>dashboard">
                <div class="sidebar-brand-icon">
                    <div class="sidebar-brand-text mx-3">PMS</div>
                </div>
                
            </a>
            <?php
            foreach($menu_items as $menulist)
            {
            ?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><?php echo $menulist->label; ?></span></a>
                </li>
             <?php

            }

             ?>

            <!-- Divider -->
            
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
                    <ul class="navbar-nav mr-auto">

                        <!-- Web Page Logo -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'dashboard' ?>">
                                <img class="logo"
                                    src="<?php echo base_url().'assets/img/logo.png' ?>">
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Web Page Title -->
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#">
                                <div class="text-lg text-dark font-weight-bold">Payroll Management System  <?php $username = $this->session->userdata('username'); ?>
                            <h3 class="card-title text-danger">Welcome <?php echo $username;  ?></h3></div>  
                            </a>
                             
                        </li>

                    </ul>
                    

                </nav>
                <!-- End of Topbar -->

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3 mb-4">Are you sure you're going out?</div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <a class="flex-fill btn btn-danger p-2 rounded-0" href="<?php echo base_url().'welcome/logout'?>">Logout</a>
                                    <button class="flex-fill btn btn-secondary p-2 rounded-0" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

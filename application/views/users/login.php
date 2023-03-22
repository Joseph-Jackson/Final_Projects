
                  
<html>
<head>
        <title>Mwecau payroll Management System </title>

<style>
    html, body{
        height:100%;
        width:100%;
        overflow:hidden
    }
    #system-logo{
        height:5em !important;
        width:5em !important;
        object-fit:cover;
        object-position: center center;
    }
   
</style>
 <!-- Custom made script for this project-->
    <script src="<?php echo base_url().'assets/js/script.js' ?>"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/js/sb-admin-2.min.js' ?>"></script>

    <!-- Page level plugins for Tables-->
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js' ?>"></script>

    <!-- Page level custom scripts for Tables-->
    <script src="<?php echo base_url().'assets/js/demo/datatables-demo.js' ?>"></script>



    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url().'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'assets/css/sb-admin-2.min.css' ?>" rel="stylesheet">

    <!-- Datatables-->
    <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.css' ?>" rel="stylesheet">
    
</head>
<body class="bg-gradient-primary">

    <div class="row justify-content-center h-100 align-items-center">

        <div class="col-xl-4 col-lg-5 col-md-10 col-sm-12 col-xs-12 mt-3">

            <div class="card o-hidden border-0 shadow-lg my-5 rounded-0 mb-3">
                <div class="card-body p-0">

                    <?php 
                     echo $this->session->tempdata('error'); 
                     ?>
                     
                    <div class="p-5">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url() ?>assets/img/logo.png" class="w-29" id="system-logo">
                            <h6 class="h6 text-gray-900"><strong>Payroll Management System</strong></h6>
                        </div>

                     
                        <form method="post" class="w-75 m-auto pt-3" action="<?php echo base_url()?>welcome/login">
                           <?php
                           if($msg=$this->session->flashdata('message')):?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="alert alert-dismissible alert-danger">
                                        <?php echo $msg; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        <!-- message if the user is not active  -->
                        <?php
                           if($msgs=$this->session->flashdata('messages')):?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="alert alert-dismissible alert-danger">
                                        <?php echo $msgs; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>


                        <!-- end of the error message -->

                        <!--<?= $this->session->flashdata('logout_success') ?>-->
                            <div class="form-group">
                                <input type="text" class="form-control"
                                    id="username" aria-describedby="emailHelp"
                                    placeholder="Username" name="username" >
                                    <?php
                                    if(form_error('username')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('username');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                                    
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"
                                     placeholder="Password" name="password" id="pass" >
                                     <?php
                                    if(form_error('password')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('password');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                            </div>
                            <hr class="pt-3">
                            <input class="form-check-input" type="checkbox" onclick="showpass()" > Show password
                            <button  class="btn btn-primary btn-user btn-block rounded-pill" type="submit">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
          <!--   <?php if(!empty($this->session->flashdata('logout_success'))): ?>
                <div class="alert alert-success rounded-0">
                    <?= $this->session->flashdata('logout_success') ?>
                </div>
            <?php endif; ?> -->

        </div>

    </div>



<script>
  function showpass()
  {
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    }
    else{
      x.type = "password";
    }
  }
</script>
</script>
</body>
</html>
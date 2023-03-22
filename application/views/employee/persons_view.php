                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Persons Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addperson"><i
                                class="fas fa-plus fa-sm text-white-500"></i> Add Person </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Employee <sup>(M/F)</sup></th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Salary</th>
                                            <th>Join Date</th>
                                            <th>End Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Modal for adding new data -->
            <div class="modal fade" id="addperson" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddKaryawan" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                    <?php 
                     echo $this->session->tempdata('error'); 
                     ?>
                     
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddKaryawanLabel">Add Personal data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo base_url('AdminController/persondata');?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <?php 
                                if($msg=$this->session->flashdata('message')):
                                 ?>
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="alert alert-dismissible alert-danger">
                                        <?php echo $msg; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif;?>
                                <div class="row">
                              <div class="col">
                                <input type="text" name="id" class="form-control" placeholder="Staff Id" aria-label="person id">
                                <?php
                                    if(form_error('id')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('id');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                <input type="text" name="firstname"class="form-control" placeholder="First Name" aria-label="first name">
                                <?php
                                    if(form_error('firstname')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('firstname');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="text" name ="middlename"class="form-control" placeholder="Middle name" aria-label="Middle name">
                                <?php
                                    if(form_error('middlename')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('middlename');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="col">
                                <input type="text" name="lastname"  class="form-control" placeholder="Last name" aria-label="Last name">
                                <?php
                                    if(form_error('lastname')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('lastname');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="date" name="dob"  class="form-control" placeholder="Birth date" aria-label="Birthdate">
                                <?php
                                    if(form_error('dob')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('dob');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="text" name="address" class="form-control" placeholder="Home Address" aria-label="Address">
                                <?php
                                    if(form_error('address')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('address');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              
                        </div> <br>
                                 
                        <div class="row">
                             <div class="col">
                               <select class="form-control" name="gender" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <?php
                                    if(form_error('gender')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('gender');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                 <select class="form-control" name="maritalstatus" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Select status--</option>
                                        <option value="1">single</option>
                                        <option value="2">married</option>
                                    </select>
                                    <?php
                                    if(form_error('maritalstatus')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('maritalstatus');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                 <select class="form-control" name="nationality" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--nationality--</option>
                                        <option value="Tanzania">United Republic of Tanzania</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Congo">Congo Drc</option>
                                    </select>
                                    <?php
                                    if(form_error('nationality')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('nationality');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Valid Email" aria-label="Email">
                                <?php
                                    if(form_error('email')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('email');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>

                        </div><br>
                                
                        <div class="row">
                              <div class="col">
                                <input type="text" name="phone_no1" class="form-control" placeholder="Enter phone number 1" aria-label="phone number 1">
                                <?php
                                    if(form_error('phone_no1')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('phone_no1');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                <input type="text" name="phone_no2" class="form-control" placeholder="Enter phone number 2" aria-label="Phone number 2">
                                <?php
                                    if(form_error('phone_no2')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('phone_no2');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="text" name="kinname" class="form-control" placeholder="kin full name" aria-label="Kin name">
                                <?php
                                    if(form_error('kinname')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('kinanme');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                        </div>
 <br>
                                
                        <div class="row">
                              <div class="col">
                                <input type="text" name="kinaddress" class="form-control" placeholder="kin Home address" aria-label="kin address">
                                <?php
                                    if(form_error('kinaddress')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('kinaddress');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                <input type="text" name="parentphone" class="form-control" placeholder="Enter parent phone number" aria-label="parent phone number">
                                <?php
                                    if(form_error('parentphone')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('parentphone');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="text" name="kinrelation" class="form-control" placeholder="Enter kin relationship" aria-label="Kin relationship">
                                <?php
                                    if(form_error('kinrelation')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('kinrelation');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                        </div>
                         <br>
                                
                        <div class="row">
                              <div class="col">
                                <input type="text" name="accountnumber" class="form-control" placeholder="Enter account number" aria-label="bank account no">
                                <?php
                                    if(form_error('accountnumber')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('accountnumber');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                <input type="text" name="accountname" class="form-control" placeholder="Account Name" aria-label="Account name">
                                <?php
                                    if(form_error('accountname')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('accountname');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="text" name="bankname" class="form-control" placeholder="Bank name" aria-label="bank name">
                                <?php
                                    if(form_error('bankname')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('bankname');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                        </div>
                         <br>
                                
                        <div class="row">
                              <div class="col">
                                <input type="text" name="bankbranch" class="form-control" placeholder="Bank branch" aria-label="Bank branch">
                                <?php
                                    if(form_error('bankbranch')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('bankbranch');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                              <div class="col">
                                <input type="text" name="registrar" class="form-control" placeholder="name of registar" aria-label="Registratr">
                                <?php
                                    if(form_error('registrar')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('registrar');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                               <div class="col">
                                <input type="text" name="updatedby" class="form-control" placeholder="name of updator" aria-label="updated by">
                                <?php
                                    if(form_error('updatedby')){
                                        ?>
                                        <?php
                                        echo"<div class='alert alert-danger'>";
                                        ?>

                                        <?php
                                        echo form_error('updatedby');
                                        ?>
                                        <?php 
                                        echo"</div>";            
                                     ?>
                                     <?php
                                        }
                                     ?>
                              </div>
                        </div>
                         <br> 
                         
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <input type="submit" name="submit" value="Save" class="flex-fill  btn-primary rounded-0">
                            
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal for editing existing data -->
            <!-- <?php
                foreach ($data_karyawan as $karyawan) {
            ?> -->
            <div class="modal fade" id="editKaryawan<?php echo $karyawan->karyawan_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditKaryawan" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditKaryawanLabel">Change Employee data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_mahasiswa" action="<?php echo base_url().'karyawan/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Emp ID" autofocus name="karyawan_id" value="<?php echo $karyawan->karyawan_id ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Employee Name</label>
                                    <input type="text" class="form-control" title="Fill in the Employee Name with Letters" placeholder='Employee Name'  name="nama_karyawan" pattern="[A-Za-z ]{1,50}" value="<?php echo $karyawan->nama_karyawan ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the name of the employee with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Gender</label>
                                    <select class="form-control" name="jeniskelamin" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male" <?php if ($karyawan->jeniskelamin === 'Male') { echo "selected"; } ?>>Male</option>
                                        <option value="Female" <?php if ($karyawan->jeniskelamin === 'Female') { echo "selected"; } ?>>Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Address</label>
                                    <input type="text"  class="form-control" placeholder='Employee Address' name="alamat"  value="<?php echo $karyawan->alamat ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Mobile Number</label>
                                    <input type="tel"  class="form-control" placeholder='Employees Mobile Number' name="no_hp" pattern="[0-9]{11,15}" value="<?php echo $karyawan->no_hp ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in No. Employee cell phone!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Salary per month</label>
                                    <input type="number"  class="form-control" placeholder='Employee Salary per month' name="gaji_perbulan" value="<?php echo $karyawan->gaji_perbulan ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's monthly salary!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Join Date</label>
                                    <input type="date"  class="form-control" placeholder='Join Date Employees' name="tgl_bergabung" value="<?php echo $karyawan->tgl_bergabung ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the date of joining the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Stop Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee Stop Date' name="tgl_berhenti" value="<?php echo $karyawan->tgl_berhenti ?>">
                                </div>
                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

            

            
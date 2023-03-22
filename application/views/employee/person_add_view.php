<div class="container">
<!-- card body for the form adding information -->
<h3 style="color:blue;">Add Personal Information</h3>
 
    <form method="POST" action="<?php echo base_url(); ?>AdminController/personvalidation" >
                              <?php
                        if($this->uri->segment(2) == "inserted")
                        {
                            echo '<p class="text-success">Data inserted Successfully</p>';
                        }
                               ?> 
                                <div class="row">
                              <div class="col">
                                 <div class="form-group">
                          <input type="text" name="id" class="form-control" placeholder="mwecau-0000" autocomplete="off" />
                          <span class="text-danger"><?php echo form_error("id"); ?></span>
                          
                                </div>
                              </div>
                              <div class="col">
                            
                         <div class="form-group">
                              <input type="text" name="firstname" class="form-control" placeholder="Enter first name" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("firstname"); ?></span>
                              
                            </div>
                              </div>
                               <div class="col">
                                     <div class="form-group">
                              <input type="text" name="middlename" class="form-control" placeholder="Enter Middle name"autocomplete="off" />
                              <span class="text-danger"><?php echo form_error("middlename"); ?></span>
                              
                                    </div>

                              </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="col">
                                  <div class="form-group">
                              <input type="text" name="lastname" class="form-control" placeholder="Enter Last name" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("lastname"); ?></span>
                              
                                    </div>

                              </div>
                               <div class="col">
                                  <div class="form-group">
                              <input type="date" name="dob" class="form-control" placeholder="Enter Birth Date" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("dob"); ?></span>
                              
                                    </div>

                              </div>

                               <div class="col">
                                <div class="form-group">
                              <input type="text" name="address" class="form-control" placeholder="Enter home address" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("address"); ?></span>
                              
                                    </div>

                              </div>
                              
                        </div> <br>
                                 
                        <div class="row">
                             <div class="col">
                                <div class="form-group">
                               <select class="form-control" name="gender" >
                                        <option value="">--Select Gender--</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                     <span class="text-danger"><?php echo form_error("gender");?></span>
                                 </div>

                              </div>
                              <div class="col">
                                <div class="form-group">
                                 <select class="form-control" name="maritalstatus" >
                                        <option value="">--Select status--</option>
                                        <option value="1">single</option>
                                        <option value="2">married</option>
                                    </select>
                                   <span class="text-danger"><?php echo form_error("maritalstatus");?></span>
                               </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                 <select class="form-control" name="nationality" >
                                        <option value="">--nationality--</option>
                                        <?php foreach($countries as $row)
                                        {
                                         ?>
                                           <option value="<?php echo $row->id; ?>"><?php echo $row->Country_name; ?></option>
                                           <?php
                                        }
                                      
                                        ?>
                                    </select>
                                    <span class="text-danger"><?php echo form_error("nationality");?></span>
                                </div>
                              </div>
                               <div class="col">
                                <div class="form-group">
                              <input type="email" name="email" class="form-control" placeholder="Enter Valid Email" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("email"); ?></span>
                              
                                    </div>

                              </div>

                        </div><br>
                                
                        <div class="row">
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="phone_no1" class="form-control" placeholder="Enter Mobile number 1" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("phone_no1"); ?></span>
                              
                                    </div>
                                

                              </div>
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="phone_no2" class="form-control" placeholder="Enter Mobile number 2" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("phone_no2"); ?></span>
                              
                                    </div>

                              </div>
                               <div class="col">
                                <div class="form-group">
                              <input type="text" name="kinname" class="form-control" placeholder="Enter Kin full name" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("kinname"); ?></span>
                              
                                    </div>

                              </div>
                        </div>
                        <br>
                                
                        <div class="row">
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="kinaddress" class="form-control" placeholder="Enter kin address" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("kinaddress"); ?></span>
                              
                                    </div>
                               
                              </div>
                               <div class="col">
                                <div class="form-group">
                              <input type="text" name="kinphone" class="form-control" placeholder="Enter Kin Phone no" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("kinphone"); ?></span>
                              
                                    </div>

                              </div>
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="parentphone" class="form-control" placeholder="Enter Parent Phone no" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("parentphone"); ?></span>
                              
                                    </div>

                              </div>
                               <div class="col">
                                <div class="form-group">
                              <input type="text" name="kinrelation" class="form-control" placeholder="Enter Kin relation" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("kinrelation"); ?></span>
                              
                                    </div>

                              </div>
                        </div>
                         <br>
                                
                        <div class="row">
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="accountnumber" class="form-control" placeholder="Enter Account number" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("accountnumber"); ?></span>
                              
                                    </div>

                              </div>
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="accountname" class="form-control" placeholder="Enter Account name" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("accountname"); ?></span>
                              
                                    </div>
                               

                              </div>
                               <div class="col">
                                <div class="form-group">
                              <input type="text" name="bankname" class="form-control" placeholder="Enter Bank name" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("bankname"); ?></span>
                              
                                    </div>
                              </div>
                        </div>
                         <br>
                                
                        <div class="row">
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="bankbranch" class="form-control" placeholder="Enter Bank branch" autocomplete="off"/>
                              <span class="text-danger"><?php echo form_error("bankbranch"); ?></span>
                              
                                    </div>

                               </div>
                              <div class="col">
                                <div class="form-group">
                              <input type="text" name="" class="form-control" placeholder="Enter Registerer name" readonly />
                              <span class="text-danger"><?php echo form_error("registrar"); ?></span>
                              
                                    </div>

                              </div>
                               <div class="col">
                                <div class="form-group">
                              <input type="text" name="" class="form-control" placeholder="Enter Updator name" readonly />
                              <span class="text-danger"><?php echo form_error("updatedby"); ?></span>
                              
                                    </div>
                              </div>
                          </div>
                          <br>
                          <div class="form-group">
                                <input type="submit" name="submit" value="Save" class=" form-control btn-primary ">
                            </div>
                         
                          
                           
                        </form>

                        </div>

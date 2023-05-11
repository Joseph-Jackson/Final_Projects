<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Users Profile</h4>
                            <div class="d-flex">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="text-primary fas fa-users font-weight-bold"><b>&nbsp;&nbsp;&nbsp;Personal Information</b></h4><br>
                                <?php
                                            
                                    foreach($profileinfo as $row){
                                        ?>                                    
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><b>Staff Registration :</b></strong>  <?php echo $row->person_id; ?><br>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><b>Full Name:</b></strong>  <?php echo $row->surname; ?>, <?php echo $row->f_name; ?>  <?php echo $row->other_name; ?>
                                           <br>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><b>Gender: </b></strong> <?php echo $row->sex_id; ?><br>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><b>Birth Date: </b></strong> <?php echo $row->birth_date; ?><br>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><b>Marital Status: </b></strong> <?php  $row->marital_status_id;
                                                if($row->marital_status_id == 1)
                                                {
                                                    echo "Single";
                                                }
                                                else{
                                                    echo "Married";
                                                }
                                            ?><br>
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><b>Nationality: </b></strong> <?php echo $row->nationality; ?><br>
                                           <hr>
                                        <h4 class="fas fa-map text-primary">&nbsp;&nbsp;&nbsp;About</h4><br>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong><b>Home Address: </b></strong> <?php echo $row->address; ?><br>
                                          <hr><br>
                                         <h4 class="text-primary fas fa-phone">&nbsp;&nbsp;&nbsp;Contacts</h4><br>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><b>Email: </b></strong> <?php echo $row->email; ?><br>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><b>Phone : </b></strong> <?php echo $row->phone1; ?><br>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><b>Phone : </b></strong> <?php echo $row->phone2; ?><br>
                                          <?php 
                                    } 
                                  ?>
                                  
                            </div>
                        </div>
                    </div>

                </div> 
          </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal for editing existing data -->
         
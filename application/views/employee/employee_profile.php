<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">System Users</h4>
                            <div class="d-flex">

                                <button type="button" class="btn-primary shadow-sm rounded-0 fas fa-plus fa-sm text-white-500" data-toggle="modal" data-target="#Addusermodal">
                                  Add user
                                </button>
                                
                                <!-- <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addPengeluaran"><i
                                    class="fas fa-plus fa-sm text-white-500"></i> Add User</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>User Id</th>
                                            <th>User Name</th>
                                            <th>Date Registered</th>
                                            <th>Role Name</th>
                                            <th>Status Id</th>
                                            <th class="actions">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            
                                            foreach($emploprofile as $row) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row->person_id; ?></th>
                                            <td><?php echo $row->f_name; ?></td>
                                            <td><?php echo $row->other_name; ?></td>
                                            <td><?php echo $row->surname; ?></td>
                                            <td><?php echo $row->phone1; ?></td>
                                        </tr>
                                        <?php 
                                    } 

                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


               <!--  <script>
                    $(document).ready(function(){

                        $('.delete_data').click(function(){
                            var id = $(this).attr("user_id");
                            if (confirm("Are you sure you want to delete this Record?")) 
                            {
                                window.location = "<?php echo base_url(); ?>/AdminController/delete_data/"+id;
                            }
                                else
                                {
                                    return false;
                                }
                        });
                    });

                </script> -->
            <!-- Modal used to add user  -->
<!-- <div class="modal fade" id="Addusermodal" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="AdduserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AdduserModalLabel">ADD USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form method="POST" action="<?php echo base_url(); ?>AdminController/uservalidation">
                    <?php
                        if($this->uri->segment(2) == "added")
                        {
                            echo '<p class="text-success">Data inserted Successfully</p>';
                        }
                        ?> 
   <div class="form-group">
   
  <select class="form-control" name="username" >
       <option value="">--Select username--</option>
    <?php 
  foreach($display_username as $value){
    ?>
     <option value="<?php echo $value->person_id;?>">
        <?php echo $value->person_id; ?>
        </option>
     <?php
     }
 ?>
</select>
  
   <span class="text-danger"><?php echo form_error("username");?></span>
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" />
      <span class="text-danger"><?php echo form_error("password"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Role</label>
      <input type="text" name="privilege_id" class="form-control" />
      <span class="text-danger"><?php echo form_error("privilege_id"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Registered By</label>
      <input type="text" name="registrar" class="form-control" />
      <span class="text-danger"><?php echo form_error("registrar"); ?></span>
      
    </div>
    <div class="form-group">
    </div> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit"  class="btn-primary" >Register</button>

            <!--<button type="button" class="btn btn-primary">Save changes</button>-->     
          </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal for editing existing data -->
         
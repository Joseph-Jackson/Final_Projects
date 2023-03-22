<!-- <div class="container">
  <h3 align="center">Add User </h3><br>

  
  
</div> -->
<!-- Button trigger modal -->
<<!-- button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add user
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <form method="POST" action="<?php echo base_url(); ?>AdminController/employeevalidation">
                    <?php
                        if($this->uri->segment(2) == "added")
                        {
                            echo '<p class="text-success">Data inserted Successfully</p>';
                        }
                        ?> 
   <div class="form-group">
   
  <select class="form-control" name="employee_id" >
       <option value="">--Select employee id--</option>
    <?php 
  foreach($display_employeeid as $value){
    ?>
     <option value="<?php echo $value->person_id;?>">
        <?php echo $value->person_id; ?>
        </option>
     <?php
     }
 ?>
</select>
  
   <span class="text-danger"><?php echo form_error("employee_id");?></span>
    </div>

     <div class="form-group">
   
  <select class="form-control" name="department_id" >
       <option value="">--Select Department id--</option>
    <?php 
  foreach($display_employeeid as $value){
    ?>
     <option value="<?php echo $value->dept_id;?>">
        <?php echo $value->person_id; ?>
        </option>
     <?php
     }
 ?>
</select>
  
   <span class="text-danger"><?php echo form_error("department_id");?></span>
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

            <button type="button" class="btn btn-primary">Save changes</button>   
          </div>
      </form>
    </div>
  </div>
</div>
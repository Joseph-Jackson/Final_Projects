<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Employees Information</h4>
                            <div class="d-flex">

                                <button type="button" class="btn btn-primary shadow-sm rounded-0 fas fa-plus fa-sm text-white-500" data-toggle="modal" data-target="#Addemployeemodal">
                                  Add employee
                                </button>
                                
                                <!-- <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addPengeluaran"><i
                                    class="fas fa-plus fa-sm text-white-500"></i> Add User</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                        if($this->uri->segment(2) == "added_employee")
                        {
                            echo '<p class="text-success">New Record Inserted Successfully</p>';
                        }
                        ?> 

                            <?php
                        if($this->uri->segment(2) == "employee_deleted")
                        {
                            echo '<p class="text-danger">Record deleted Successfully</p>';
                        }
                        ?> 
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>Employee Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th> Basic Salary </th>
                                            <th class="actions">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            
                                            foreach($employees as $row) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row->employee_id; ?></th>
                                            <td><?php echo $row->f_name; ?></td>
                                            <td><?php echo $row->surname; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->phone1; ?></td>
                                            <td><?php echo $row->scale_amount; ?></td>

                                            <td class="action-icons">
                                                <a href="<?php echo base_url();?>AdminController/Update_employee/<?php echo $row->employee_id;?>"> 
                                                    <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                              <a href="<?php echo base_url();?>AdminController/View_employee_deductions/<?php echo $row->employee_id;?>"> 
                                                    <i title="View employee Deduction & Allowances" class="fas fa-eye text-lg text-warning"></i>
                                                </a> 
                                                <a href="<?php echo base_url().'AdminController/delete_employee/'.$row->employee_id; ?>"> 
                                                    <i title="Delete" class=" fas fa-trash text-lg text-danger" ></i>    
                                                </a>
                                            </td>
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

            <!-- Modal used to add user  -->
<div class="modal fade" id="Addemployeemodal" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="AdduserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ADD EMPLOYEE</h5>
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
         <label>Employee Id</label>
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
         <label>Department</label>
  <select class="form-control" name="department_id" >
       <option value="">--Select Department id--</option>
    <?php 
  foreach($departmentid as $value){
    ?>
     <option value="<?php echo $value->dept_id;?>">
        <?php echo $value->dept_name; ?>
        </option>
     <?php
     }
 ?>
</select>
  
   <span class="text-danger"><?php echo form_error("department_id");?></span>
    </div>

    <div class="form-group">
         <label>Salary</label>
  <select class="form-control" name="salary" >
       <option value="">--Select salary--</option>
    <?php 
  foreach($salaryscale as $value){
    ?>
     <option value="<?php echo $value->salary_scale_id;?>">
        <?php echo $value->scale_amount; ?>
        </option>
     <?php
     }
 ?>
</select>
   <span class="text-danger"><?php echo form_error("salary");?></span>
    </div>

    <div class="form-group">
              <label>Employee Status</label>
        <select name="employee_status" class="form-control">
            <option value="">--select status--</option>
            <option value="1">active</option>
            <option value="2">inactive</option>
        </select>
           <span class="text-danger"><?php echo form_error("employee_status");?></span>
    </div>
    
    <div class="form-group">
      <label>Registered By</label>
      <input type="text" name="registrar" class="form-control" />
      <span class="text-danger"><?php echo form_error("registrar"); ?></span>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" name="submit"  class="btn btn-primary" >Register</button>
          </div>
      </form>
    </div>
  </div>
</div> 


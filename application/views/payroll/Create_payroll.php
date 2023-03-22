
	 <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Payroll Lists</h4>
                            <div class="d-flex">

                                <button type="button" class="btn btn-primary shadow-sm rounded-0 fas fa-plus fa-sm text-white-500" data-toggle="modal" data-target="#Createpayroll">
                                  + New Payroll
                                </button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                        	 <?php
                        if($this->uri->segment(2) == "added_payroll")
                        {
                            echo '<p class="text-success">New payroll Created Successfully!</p>';
                        }
                        ?> 
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>Employee Id</th>
                                            <th>Payroll Code</th>
                                            <th>Basic Salary</th>
                                            <th>Date Created</th>
                                            <th>Status Id</th>
                                            <th class="actions">Action</th>
                                        </tr>
                                    </thead>
                                    
                                 <tbody>
                                        <?php
                                            
                                            foreach($display_payroll as $row) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row->employee_id; ?></th>
                                            <td><?php echo $row->payroll_code; ?></td>
                                            <td><?php echo $row->basic_salary; ?></td>
                                            <td><?php echo $row->created_date; ?></td>
                                            <td><?php echo $row->payroll_status_name; ?></td>
                                            
                                            <td class="action-icons">
                                                <a href="<?php echo base_url();?>AdminController/Update_payroll/<?php echo $row->employee_id;?>"> 
                                                    <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'AdminController/payroll_detail/'.$row->employee_id; ?>"> 
                                                    <i title="View" class=" fas fa-eye text-lg text-primary" ></i>    
                                                </a>
                                                <a href="<?php echo base_url().'AdminController/delete_payroll/'.$row->employee_id; ?>"> 
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
<div class="modal fade" id="Createpayroll" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="AdduserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AdduserModalLabel">Create new payroll here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form method="POST" action="<?php echo base_url(); ?>AdminController/payrollvalidation">
                   
   <div class="form-group">
   
  <select class="form-control" name="emplo_id" >
       <option value="">--Select employeeID--</option>
  <?php 
  foreach($employee_id as $value){
    ?>
     <option value="<?php echo $value->employee_id;?>">
        <?php echo $value->employee_id; ?>
        </option>
     <?php
     }
 ?> 
</select>
  
   <span class="text-danger"><?php echo form_error("emplo_id");?></span>
    </div>

    <div class="form-group">
      <label>Payroll Code</label>
      <input type="text" name="payroll_code" class="form-control" />
      <span class="text-danger"><?php echo form_error("payroll_code"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Salary</label>
      <input type="text" name="basic_salary" class="form-control" />
      <span class="text-danger"><?php echo form_error("basic_salary"); ?></span>
      
    </div>
   <div class="form-group">
   
  <select class="form-control" name="payroll_status" >
       <option value="">--Select Status--</option>
  <?php 
  foreach($payroll_status_id as $value){
    ?>
     <option value="<?php echo $value->payroll_status_id;?>">
        <?php echo $value->payroll_status_name; ?>
        </option>
     <?php
     }
 ?> 
</select>
  
   <span class="text-danger"><?php echo form_error("payroll_status");?></span>
    </div>
    <div class="form-group">
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




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
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-danger">
                                            <th>S/NO</th>
                                            <th>Employee Id</th>
                                            <th>Payroll Code</th>
                                            <th>Basic Salary</th>
                                            <th>Status Id</th>
                                            <th class="actions">Action</th>
                                        </tr>
                                    </thead>
                                    
                                 <!--    <tbody>
                                        <?php
                                            
                                            foreach($displayed as $row) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row->user_id; ?></th>
                                            <td><?php echo $row->username; ?></td>
                                            <td><?php echo $row->date_reg; ?></td>
                                            <td><?php echo $row->privilege_name; ?></td>
                                            <td><?php echo $row->status_id; ?></td>
                                            
                                            <td class="action-icons">
                                                <a href="<?php echo base_url();?>AdminController/Update_data/<?php echo $row->user_id;?>"> 
                                                    <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'AdminController/delete_data/'.$row->user_id; ?>"> 
                                                    <i title="Delete" class=" fas fa-trash text-lg text-danger" ></i>    
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                    } 

                                    ?>
                                    </tbody> -->
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
                    <?php
                        if($this->uri->segment(2) == "added")
                        {
                            echo '<p class="text-success">Data inserted Successfully</p>';
                        }
                        ?> 
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
      <label>Payrol Code</label>
      <input type="password" name="payroll_code" class="form-control" />
      <span class="text-danger"><?php echo form_error("payroll_code"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Salary</label>
      <input type="text" name="basic_salary" class="form-control" />
      <span class="text-danger"><?php echo form_error("basic_salary"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Status</label>
      <input type="text" name="status_id" class="form-control" />
      <span class="text-danger"><?php echo form_error("status_id"); ?></span>
      
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



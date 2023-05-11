<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 text-primary ">LIST OF DEDUCTION ITEMS AND ALLOWANCES</h4>
                            <div class="d-flex">

                                <button type="button" class="btn btn-primary shadow-sm rounded-0  fa-sm text-white-500" data-toggle="modal" data-target="#Addusermodal">
                                  <span class="font-weight-bold fa fa-plus"> ADD NEW ITEM</span>
                                </button>
                                
                                <!-- <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addPengeluaran"><i
                                    class="fas fa-plus fa-sm text-white-500"></i> Add User</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                     
                          <!-- show error message for data not deleted -->

                                   <!-- <?php if($msgs=$this->session->flashdata('success')):?>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="alert alert-dismissible alert-danger">
                                        <?php echo $msgs; ?>
                                           </div>
                                            </div>
                                            </div>
                                    <?php endif;?>
                                    <?php
                                if($this->uri->segment(2) == "added_item")
                                {
                                    echo '<p class="text-success">New Record Added Successfully</p>';
                                }
                                ?>  -->
                              
                           <span class="text-danger"><?php echo form_error("Item_name"); ?></span>

                          <span class="text-danger"><?php echo form_error("item_description"); ?></span>

                          <span class="text-danger"><?php echo form_error("amount"); ?></span>

                          <span class="text-danger"><?php echo form_error("allowance"); ?></span>
                         
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>Staff Id</th>
                                            <th>Item Id</th>
                                            <th>Amount</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th class="actions">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       <!--  <?php
                                            
                                            foreach($items as $row) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row->item_id; ?></th>
                                            <td><?php echo $row->item_name; ?></td>
                                            <td><?php echo $row->item_description; ?></td>
                                            <td><?php echo $row->item_amount; ?></td>
                                            <td><?php echo $row->is_allowance; ?></td>
                                            
                                            <td class="action-icons">
                                                <a href="<?php echo base_url();?>AdminController/Update_deduction_items/<?php echo $row->item_id;?>"> 
                                                    <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                              
                                                <a href="<?php echo base_url().'AdminController/delete_deduction_items/'.$row->item_id; ?>"> 
                                                    <i title="Delete" class=" fas fa-trash text-lg text-danger" ></i>    
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                    } 

                                    ?> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


            <!-- Modal used to add deduction items  -->
        <div class="modal fade" id="Addusermodal" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="AdduserModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold" id="AdduserModalLabel">ADD EMPLOYEE DEDUCTIONS AND ALLOWANCES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
        <form method="POST" action="<?php echo base_url(); ?>AdminController/Dedallowances_validation">
                            
        
            <div class="form-group">
              <label>Staff Id</label>
              <input type="text" name="employee_id" class="form-control" 
              value="<?php foreach($persid as $row){ echo $row->person_id; } ?>" readonly>
            </div>

            <div class="form-group">
              <label>Item Id</label>
               <select class="form-control" name="item_id" id="items">
                    <option>--select item --</option>
                    <?php foreach($itemsid as $row){ ?>
                    <option value="<?php echo $row->item_id; ?>"><?php echo $row->item_name; ?> - <?php echo $row->item_amount; ?></option> 
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
              <label>Amount</label>
              <input type="text" 
              value ="<?php
              foreach($slaryscl as $row){
               echo $row->scale_amount; 
                }?>" 
               readonly class="form-control" id="salary">
            </div>

            <div class="form-group">
                <label>Amount to be deducted</label>
                <input type="text" name="amount" value="" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" class="form-control">
            </div> 

            <div class="form-group">
                <label>End Date</label>
                <input type="date" name="end_date" class="form-control">
            </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="submit" name="submit"  class="btn btn-primary" >Save</button>

                  </div>
              </form>
            </div>
          </div>
        </div> 

<script type="text/javascript">
    const item_selected = document.getElementById("items");
    const salary_amount = document.getElementById("salary");

</script>

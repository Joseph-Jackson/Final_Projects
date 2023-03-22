<div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">LIST OF DEDUCTION ITEMS</h4>
                            <div class="d-flex">

                                <button type="button" class="btn btn-primary shadow-sm rounded-0 fa fa-plus fa-sm text-white-500" data-toggle="modal" data-target="#Addusermodal">
                                  ADD DEDUCTION ITEM
                                </button>
                                
                                <!-- <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addPengeluaran"><i
                                    class="fas fa-plus fa-sm text-white-500"></i> Add User</a> -->
                            </div>
                        </div>
                        <div class="card-body">
                     
                          <!-- show error message for data not deleted -->

                                   <?php if($msgs=$this->session->flashdata('success')):?>
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
                                ?> 
                              
                           <span class="text-danger"><?php echo form_error("Item_name"); ?></span>

                          <span class="text-danger"><?php echo form_error("item_description"); ?></span>

                          <span class="text-danger"><?php echo form_error("amount"); ?></span>

                          <span class="text-danger"><?php echo form_error("allowance"); ?></span>
                         
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                            <th>Item Id</th>
                                            <th>Item Name</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Is_Allowance<br><sup class="text-danger">0-No<br>1-Yes</sup></th>
                                            <th class="actions">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            
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

                                    ?>
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
                <h5 class="modal-title" id="AdduserModalLabel">ADD DEDUCTION ITEM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
        <form method="POST" action="<?php echo base_url(); ?>AdminController/Deduction_item_validation">
                            
        
            <div class="form-group">
              <label>Item Name</label>
              <input type="text" name="Item_name" class="form-control" />
              
            </div>
            <div class="form-group">
              <label>Item Description</label>
              <input type="text" name="item_description" class="form-control" />
              
            </div>
            <div class="form-group">
              <label>Item Amount</label>
              <input type="text" name="amount" class="form-control" />
            </div>
            <div class="form-group">
                <label>Is Allowance?</label>
                <select class="form-control" name="allowance">
                    <option>--select--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>

                </select>

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



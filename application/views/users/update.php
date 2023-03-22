<!-- Modal for editing existing data -->
            <?php
                
                foreach ($displayed as $row) {
            ?>
            <div class="modal fade" id="editUser<?php echo $row->user_id; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditUser" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEdituserLabel">Edit User data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_user" action="<?php echo base_url().'AdminController/EditUsers' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <?php
                        if($this->uri->segment(2) == "updated")
                        {
                            echo '<p class="text-success">Data Updated Successfully</p>';
                        }
                               ?> 
                            <div class="modal-body">                                 
                                <div class="form-group d-none">
                                    <label class="control-label ">User Id</label>
                                    <input type="text"  class="form-control" value="<?php echo $row->user_id ?>" required readonly>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">UserName</label>
                                    <input type="text"  class="form-control" placeholder='User name' name="username" value="<?php echo $row->username ?>" required>
                                    <div class="invalid-feedback">
                                        Fill in the username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Date Registered</label>
                                    <input type="date"  class="form-control" placeholder="date registered" value="<?php echo $row->date_reg; ?>" required readonly>
                                    <div class="invalid-feedback">
                                        Fill in the date
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Role Id</label>
                                     <input type="text"  class="form-control" placeholder="Role Id " value="<?php echo $row->privilege_id; ?>" required readonly>

                                    <div class="invalid-feedback">
                                    fill role id
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Status Id</label>
                                    <input type="text"  class="form-control" placeholder='Status id' name="status" value="<?php echo $row->status_id ?>" required>
                                    <div class="invalid-feedback">
                                    Enter the status
                                    </div>
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
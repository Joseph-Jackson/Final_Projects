<div class="container">

<form method="POST" action="<?=base_url()?>AdminController/update_deduction_items/<?=$item_id ?>">
            <?php
             if($msgu=$this->session->flashdata('updated_item')):?>
              <div class="row">
                <div class="col-md-6">
                  <div class="alert alert-dismissible alert-success">
                    <?php echo $msgu; ?>
                       </div>
                        </div>
                        </div>
                        <?php endif;?>         
        
            <div class="form-group">
              <label>Item Name</label>
              <input type="text" name="Item_name" value="<?php echo $items_deduction->item_name; ?>" class="form-control" />
              
            </div>
            <div class="form-group">
              <label>Item Description</label>
              <input type="text" name="item_description" value="<?php echo $items_deduction->item_description; ?>" class="form-control" />
              
            </div>
            <div class="form-group">
              <label>Item Amount</label>
              <input type="text" name="amount" value="<?php echo $items_deduction->item_amount; ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Is Allowance?</label>
                <select class="form-control" name="allowance">
                    <option value="<?php echo $items_deduction->is_allowance; ?>"><?php echo $items_deduction->is_allowance; ?></option>
                </select>
            </div> 
              </div>
              <div class="modal-footer">
              <button class="btn btn-danger "><a style="text-decoration: none;" class="text-white" href="<?php echo base_url('AdminController/view_deduction_items');?>">Close</a></button>
              <input type="submit" name="submit" value="Update" class="btn-primary" />

                  </div>
              </form>

</div>
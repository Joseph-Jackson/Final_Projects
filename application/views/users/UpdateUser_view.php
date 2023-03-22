

<div class="container">

<form method="POST" action="<?=base_url()?>AdminController/Update_data/<?= $user_id ?>">
            <?php
             if($msgu=$this->session->flashdata('updated')):?>
              <div class="row">
                <d;iv class="col-md-6">
                  <div class="alert alert-dismissible alert-success">
                    <?php echo $msgu; ?>
                       </div>
                        </div>
                        </div>
                        <?php endif?>  
    <div class="form-group">
      <label>Enter username</label>
      <input type="text" name="username" value="<?php echo $records->username; ?>" class="form-control" placeholder="Enter staff Id" readonly/>
      <span class="text-danger"><?php echo form_error("username");?></div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" value="<?php echo $records->password; ?>" class="form-control" readonly/>
      <span class="text-danger"><?php echo form_error("password"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Role</label>
      <input type="text" name="privilege_id" value="<?php echo $records->privilege_id; ?>" class="form-control" readonly/>
      <span class="text-danger"><?php echo form_error("privilege_id"); ?></span>
      
    </div>
    <div class="form-group">
      <label>Registered By</label>
      <input type="text" name="registrar" value="<?php echo $records->registrar; ?>" class="form-control" />
      <span class="text-danger"><?php echo form_error("registrar"); ?></span>
      
    </div>
    <div class="form-group">
    </div> 

      </div>
      <div class="modal-footer">
        <button class="btn btn-danger "><a style="text-decoration: none;" class="text-white" href="<?php echo base_url('AdminController/Display_users');?>">Close</a></button>
              <input type="submit" name="submit" value="Update" class="btn-primary" />

<!--         <button type="button" class="btn btn-primary">Save changes</button>
 -->      </div>
      </form>

</div>

  	


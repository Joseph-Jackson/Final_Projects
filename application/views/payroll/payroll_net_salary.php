<div class="contriner-fluid">
	<div class="col-md-12">
		<h5><b><small>Employee ID :</small><?php echo $from_payroll->employee_id;  ?></b></h5>
		<h4><b><small>Payroll-Month: </small><?php echo $from_payroll->payroll_code; ?></b></h4>
		<hr class="divider">
		<div class="row">
			<div class="col-md-6">
				<p><b>Payroll Date Creation : <?php echo $from_payroll->created_date; ?></b></p>
				<p><b>Payroll deduction : <?php echo $from_payroll->amount; ?></b></p>
			</div>
			<div class="col-md-6">
				<p><b>Days of Absent : /b></p>
				<p><b>Tardy/Undertime (mins) : </b></p>
				<p><b>Total Allowance Amount : </b></p>
				<p><b>Total Deduction Amount : </b></p>
				<p><b>Net Pay : <?php echo $from_payroll->basic_salary - $from_payroll->amount; ?></b></p>
			</div>
		</div>
	

		<hr class="divider">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<span><b>Allowances</b></span>
						
					</div>
					<div class="card-body">
						<ul class="list-group">
							
							<li class="list-group-item d-flex justify-content-between align-items-center">
						   Allowance
					    <span class="badge badge-primary badge-pill"></span>
					  </li>
					
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<span><b>Deductions</b></span>
					</div>
					<div class="card-body">
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center">
					    <span class="badge badge-primary font-weight bold badge-pill">						  				<?php echo $from_payroll->amount; ?>
						</span>
					  </li>

						</ul>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<hr>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-sm btn-block col-md-2 float-right"><a class="text-white" href="<?php echo base_url() ?>AdminController/Display_payroll">Close</a></button>
				</div>
			</div>
</div>
<style type="text/css">
	.list-group-item>span>p{
		margin:unset;
	}
	.list-group-item>span>p>small{
		font-weight: 700
	}
	#uni_modal .modal-footer{
		display: none;
	}
	.alist,.dlist{
		width: 100%
	}
</style>
<script>

</script>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
	//if user not logged in this function helps to restrict accessing pages while not logged in
		$this->load->model('Personal_model');
		$this->load->model('Login_model');
		$this->load->library('form_validation');
			if (!$this->session->userdata("privilege_id"))
			 {

				return redirect('welcome/index');

			}
	}

		public function admindashboard()
		{
		$fun_name=debug_backtrace();
		$total['emplo_total'] = $this->Personal_model->count_employee();
		$total['users_total'] = $this->Login_model->count_users();
		if($this->global_functions->is_allowed($fun_name[0]['function']))
			{
			$this->load->view('include/header');
			$this->load->view('include/navigation');
			$this->load->view('Home/dashboard',$total);
			//$this->load->view('footer');
			$this->load->view('include/source');
			}
		}
		public function home()
		{
			$this->admindashboard();
		}
		public function persondata ()
		{
			$country['countries'] = $this->Personal_model->get_countries();
			$this->load->view('include/header');
			$this->load->view('include/navigation');
			$this->load->view('employee/person_add_view',$country);
			$this->load->view('include/source');
			$this->load->view('include/footer');

		}
		//function to add person information
		public function personvalidation()
		{
		//echo "<script>alert('hello I am Fine! lets go')</script>";
		$this->form_validation->set_rules('id','User Id','trim|required|min_length[4]');
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('middlename','Middle Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('dob','Birth date','trim|required');
		
		$this->form_validation->set_rules('address','Home address','trim|required|min_length[4]');
		$this->form_validation->set_rules('gender','Gender','trim|required');

		$this->form_validation->set_rules('maritalstatus','Marital status','trim|required');
		$this->form_validation->set_rules('nationality','Nationality','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');

		$this->form_validation->set_rules('phone_no1','Phone number 1','trim|required|min_length[10]');
		$this->form_validation->set_rules('phone_no2','Phone number 2','trim|required|min_length[10]');

		$this->form_validation->set_rules('kinname','Kin Name','trim|required');

		$this->form_validation->set_rules('kinaddress','Kin Address','trim|required');
		$this->form_validation->set_rules('kinphone','Kin Phone number','trim|required');
		$this->form_validation->set_rules('parentphone','Parent phone','trim|required');
		$this->form_validation->set_rules('kinrelation','Kin relationship','trim|required|min_length[2]');
		$this->form_validation->set_rules('accountnumber','Account number','trim|required|min_length[10]');
		$this->form_validation->set_rules('accountname','Account name','trim|required|min_length[10]');
		$this->form_validation->set_rules('bankname','Bank name','trim|required|min_length[2]');
		$this->form_validation->set_rules('bankbranch','Bank branch','trim|required|min_length[3]');
		
	
		if ($this->form_validation->run())
		 {
		 	$data = array(
		 		'person_id' => $this->input->post('id'),
		 		'f_name' => $this->input->post('firstname'),
		 		'other_name' => $this->input->post('middlename'),
		 		'surname' => $this->input->post('lastname'),
		 		'birth_date' => $this->input->post('dob'),
		 		'address' => $this->input->post('address'),
				'sex_id' => $this->input->post('gender'),
		 		'marital_status_id' => $this->input->post('maritalstatus'),
		 		'nationality' => $this->input->post('nationality'),
		 		'email' => $this->input->post('email'),
		 		'phone1' => $this->input->post('phone_no1'),
		 		'phone2' => $this->input->post('phone_no2'),
		 		'kin' => $this->input->post('kinname'),
		 		'kin_address' => $this->input->post('kinaddress'),
		 		'kin_phone' => $this->input->post('kinphone'),
		 		'parent_phone' => $this->input->post('parentphone'),
		 		'kin_relationship' => $this->input->post('kinrelation'),
		 		'account_no' => $this->input->post('accountnumber'),
		 		'account_name' => $this->input->post('accountname'),
		 		'bank_name' => $this->input->post('bankname'),
		 		'bank_branch' => $this->input->post('bankbranch')

		 	);
		 	
		 	$this->Personal_model->insertdata($data);	

		 	redirect(base_url(). "AdminController/inserted");
		 	
			
		}

		else
		{
		$this->persondata();

		}

	}
	public function inserted(){

		$this->persondata();
	}	
	
	public function uservalidation()
	{
		$this->form_validation->set_rules('username','User Name','trim|required|min_length[7]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
		$this->form_validation->set_rules('privilege_id','Role Id','trim|required|min_length[1]');
		$this->form_validation->set_rules('registrar','Registerer','trim|required|min_length[4]');

		if ($this->form_validation->run()) 
		{
			$data  = array(
				'username' => $this->input->post('username') ,
				'password' => md5($this->input->post('password')),
				'privilege_id' => $this->input->post('privilege_id'),
				'registrar' => $this->input->post('registrar')  
			);

			$this->Personal_model->add_user($data);
			redirect(base_url()."AdminController/added");
		}

		else
		{
			$this->Display_users();
		}
	}
	public function added()
	{
		$this->Display_users();
	}

	public function Display_users()
	{
		$users['display_username']=$this->Login_model->selectusername();
		$users['displayed']=$this->Login_model->selectusers();
			$this->load->view('include/header');
			$this->load->view('include/navigation');
			$this->load->view('users/Display_users',$users);
			$this->load->view('include/source');
			$this->load->view('include/footer');

	}


	public function Update_data($user_id)
	{
			$updtrecord['records'] = $this->Personal_model->getupdate_data($user_id);
			$updtrecord['user_id'] = $user_id;
			//$data['user_id'] = $updateid;

			if ($_SERVER['REQUEST_METHOD']=='POST')
			{
				$data  = array(
						'username' => $this->input->post('username') ,
						'password' => md5($this->input->post('password')),
						'privilege_id' => $this->input->post('privilege_id'),
						'registrar' => $this->input->post('registrar')  
					);
				$status= $this->Personal_model->edit_user($data,$user_id);
				if ($status == TRUE)
				{
					$this->session->set_flashdata('updated','record successfully updated');
					redirect(base_url('AdminController/Update_data/'.$user_id));
				}
				else
				{
				$this->session->set_flashdata('error','failed to update');
				redirect(base_url('AdminController/Display_users'));

				}
			}
				$this->load->view('include/header');
				$this->load->view('include/navigation');
				$this->load->view('users/UpdateUser_view',$updtrecord);
				$this->load->view('include/source');
				$this->load->view('include/footer');
			
		}
	

	
	
	public function delete_data()
	{
		$id = $this->uri->segment(3);
		$this->Login_model->delete_data($id);
		redirect(base_url()."AdminController/deleted");
	}
	public function deleted()
	{
		$this->Display_users();
	}
	public function view_employees()
	{
		$emplo['salaryscale']=$this->Personal_model->salary_scale();
		$emplo['departmentid']=$this->Personal_model->selectdepartmentid();
		$emplo['display_employeeid']=$this->Personal_model->selectemployeeid();
		$emplo['employees'] = $this->Personal_model->get_employees();
				$this->load->view('include/header');
				$this->load->view('include/navigation');
				$this->load->view('employee/employee_display',$emplo);
				$this->load->view('include/source');
				$this->load->view('include/footer');

	}
	//function to add employee
	public function employeevalidation()
	{
		$this->form_validation->set_rules('employee_id','Employee Id','trim|required');
		$this->form_validation->set_rules('department_id','Department Name','trim|required');
		$this->form_validation->set_rules('employee_status','Employee Status','trim|required');
		$this->form_validation->set_rules('salary','Salary Scale ','trim|required|numeric');
		$this->form_validation->set_rules('registrar','Registerer','trim|required');
		if ($this->form_validation->run()) 
		{
			$data_employee  = array(
				'employee_id' => $this->input->post('employee_id') ,
				'dept_id' => $this->input->post('department_id'),
				'employee_status_id' => $this->input->post('employee_status'),
				'salary_scale_id' => $this->input->post('salary'),
				'registrar'=> $this->input->post('registrar')  
			);

			$this->Personal_model->add_employee($data_employee);
			redirect(base_url()."AdminController/added_employee");
		}

		else
		{
			$this->view_employees();
		}


	}
	//function to confirm if record is successfully added
	public function added_employee()
	{
		$this->view_employees();
	}

	//function to delete employee
	public function delete_employee()
	{
		$employee_id = $this->uri->segment(3);
		$this->Personal_model->delete_employee($employee_id);
		redirect(base_url()."AdminController/employee_deleted");
	}

	//function to comfirm deletion
	public function employee_deleted()
	{
		$this->view_employees();
	}

	//function to add deduction items
	public function Deduction_item_validation()
	{
		$this->form_validation->set_rules('Item_name','Item Name','trim|required');
		$this->form_validation->set_rules('item_description','Item Description','trim|required');
		$this->form_validation->set_rules('amount','Amount ');
		$this->form_validation->set_rules('allowance','Allowance','trim|required');

		if ($this->form_validation->run()) 
		{
			$data_deduction_item  = array(
				'item_name' => $this->input->post('Item_name') ,
				'item_description' => $this->input->post('item_description'),
				'item_amount' => $this->input->post('amount'),
				'is_allowance' => $this->input->post('allowance')  
			);

			$this->Personal_model->add_item_deduction($data_deduction_item);
		 	//redirect(base_url(). "AdminController/dedallowances");
			redirect(base_url()."AdminController/added_item");
		}

		else
		{
			$this->view_deduction_items();
		}

	}
	//function added_item to confirm data are added
	public function added_item()
	{
		$this->view_deduction_items();
	}

	//functions fetch deductions items
	public function view_deduction_items()
	{
		$deduct_items['items'] = $this->Personal_model->get_deductions();
				$this->load->view('include/header');
				$this->load->view('include/navigation');
				$this->load->view('deductions/items_deductions_view',$deduct_items);
				$this->load->view('include/source');
				$this->load->view('include/footer');

	}
	//function to delete deductions items
	public function delete_deduction_items()
	{
		$id_deduction = $this->uri->segment(3);
		$result_deleted = $this->Personal_model->delete_deductionItem($id_deduction);
		//check if record is deleted as successfully
		if ($result_deleted == TRUE)
				{
					$this->session->set_flashdata('success','Record deleted successfully');
				redirect(base_url('AdminController/view_deduction_items'));

				
				}
				else
				{
				$this->session->set_flashdata('error','Record not deleted');
				redirect(base_url('AdminController/view_deduction_items'));

				}
	}

	//function to update deduction items

	public function update_deduction_items($item_id)
	{
		$updtitem['items_deduction'] = $this->Personal_model->getupdate_deduct_item($item_id);
		$updtitem['item_id'] = $item_id;
			//$data['user_id'] = $updateid;

			if ($_SERVER['REQUEST_METHOD']=='POST')
			{
				$data  = array(
						'item_name' => $this->input->post('Item_name'),
						'item_description' => $this->input->post('item_description'),
						'item_amount' => $this->input->post('amount'),
						'is_allowance'=>$this->input->post('allowance')
					);
				$status= $this->Personal_model->edit_item_deduction($data,$item_id);
				if ($status == TRUE)
				{
					$this->session->set_flashdata('updated_item','record successfully updated');
					redirect(base_url('AdminController/update_deduction_items/'.$item_id));
				}
				else
				{
				$this->session->set_flashdata('error','failed to update');
				redirect(base_url('AdminController/view_deduction_items'));

				}
			}
				$this->load->view('include/header');
				$this->load->view('include/navigation');
				$this->load->view('deductions/update_deduction_items',$updtitem);
				$this->load->view('include/source');
				$this->load->view('include/footer');
			
	}

	public function View_employee_profile()
	{
				//$id = $this->uri->segment(3)
				$prof['profileinfo']=$this->Personal_model->get_emplo_profile($this->session->userdata('username'));
				$this->load->view('include/header');
				$this->load->view('include/navigation');
				$this->load->view('employee/employee_profile',$prof);
				$this->load->view('include/source');
				$this->load->view('include/footer');

	}

	//payroll management and creation function
	public function Display_payroll()
	{			
				$payroll['display_payroll']=$this->Personal_model->payroll_list();
				$payroll['employee_id'] = $this->Personal_model->get_employees();
				$payroll['payroll_status_id'] = $this->Personal_model->get_payroll_status();
				$this->load->view('include/header');
				$this->load->view('include/navigation');
				$this->load->view('payroll/Create_payroll.php',$payroll);
				$this->load->view('include/source');
				$this->load->view('include/footer');

	}

	public function payrollvalidation()
	{
		$this->form_validation->set_rules('emplo_id','Employee Id','trim|required');
		$this->form_validation->set_rules('payroll_code','Payroll Code','trim|required');
		$this->form_validation->set_rules('basic_salary','Basic Salary','trim|required|numeric');
		$this->form_validation->set_rules('payroll_status','Status Id','trim|required');

		if ($this->form_validation->run()) 
		{
			$data_payroll = array(
				'employee_id' => $this->input->post('emplo_id') ,
				'payroll_code' => $this->input->post('payroll_code'),
				'basic_salary' => $this->input->post('basic_salary'),
				'payroll_status_id' => $this->input->post('payroll_status')  
			);

			$this->Personal_model->add_new_payroll($data_payroll);
			redirect(base_url()."AdminController/added_payroll");

		}

		else
		{
			$this->Display_payroll();
		}

	}
	public function added_payroll()
	{
			$this->Display_payroll();
	}
	
	//function to fetch payroll list

	public function payroll_detail($employee_id)
	{	$payrolls['employee_id']=$employee_id;
		$payrolls['from_payroll']=$this->Personal_model->fetch_payroll($employee_id);
		$this->load->view('include/header');
		$this->load->view('include/navigation');
		$this->load->view('payroll/payroll_net_salary.php',$payrolls);
		$this->load->view('include/source');
		$this->load->view('include/footer');
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	#here functions for the deductions and allowances

	public function View_employee_deductions($employee_id)
	{
		$items['persid'] = $this->Personal_model->getid($employee_id);
		$items['itemsid'] = $this->Personal_model->getitemid();
		$items['slaryscl'] = $this->Personal_model->getsalary($employee_id);
		$this->load->view('include/header');
		$this->load->view('include/navigation');
		$this->load->view('deductions/deductallowances.php',$items);
		$this->load->view('include/source');
		$this->load->view('include/footer');
	}

}



?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Personal_model extends CI_Model
{
	
	public function insertdata($data)
	{
		$this->db->insert("person",$data);
		
	}

	//function to get countries
	public function get_countries()
	{
		$this->db->select('*');
		$this->db->from('Countries');
		$res = $this->db->get();
		return $res->result();
	}
	//function for selecting menu list.
	public function all_menu($privilege_id)
	{
		$this->db->select('*');
		$this->db->from('modules_privileges,modules');
		$this->db->where('modules_privileges.module_id = modules.module_id');
		$this->db->where('modules_privileges.privilege_id',$privilege_id);
		$result =$this->db->get();
		return $result->result();

	}
	public function add_user($data)
	{

		$this->db->insert("users",$data);
	}
	public function getupdate_data($user_id)
	{	
		//$query =$this->db->select('*');
		$this->db->where("user_id",$user_id);
		$query = $this->db->get("users");
		return $query->row();
	}
	public function edit_user($data,$user_id)
	{
		 $this->db->where('user_id',$user_id);
		$this->db->update('users',$data);
		if($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	//function to insert employee
	public function add_employee($data_employee)
	{
		$this->db->insert('employee',$data_employee);
	}

	//model to fetch employees information
	public function get_employees()
	{
		$this->db->select('*');
		$this->db->from('employee,person,payroll_salary_scale');
		$this->db->where('employee.employee_id = person.person_id');
		$this->db->where('employee.salary_scale_id = payroll_salary_scale.salary_scale_id');
		$result =$this->db->get();
		return $result->result();


	}
	//function to delete employee i  model
	public function delete_employee($employee_id)
	{
		$this->db->where('employee_id',$employee_id);
		$delete = $this->db->delete('employee');
		if ($delete)
		 {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	//function to select department id
	public function selectdepartmentid()
	{
		$this->db->select('*');
		$this->db->from('department');
		$res=$this->db->get();
		return $res->result();
	}
	//function to get employee id
	public function selectemployeeid()
	{
		$this->db->select('*');
		$this->db->from('person');
		$result =$this->db->get();
		return $result->result();

	}

	//function to get salary scale
	public function salary_scale()
	{
		$this->db->select('*');
		$this->db->from('payroll_salary_scale,employee');
		$this->db->where('payroll_salary_scale.salary_scale_id = employee.salary_scale_id');
		$result =$this->db->get();
		return $result->result();
	}
	// function to insert deduction items
	public function add_item_deduction($data_deduction_item)
	{
	$this->db->insert("payroll_deduction_item",$data_deduction_item);

	}

	//functions get deductions list
	public function get_deductions()
	{
		$this->db->select('*');
		$this->db->from('payroll_deduction_item');
		$res=$this->db->get();
		return $res->result();
	}

	//functions to delete deduction items
	public function delete_deductionItem($id_deduction)
	{
		$this->db->where("item_id",$id_deduction);
		$del = $this->db->delete("payroll_deduction_item");
		if($del){
			return TRUE;
		}
		else{
			return FALSE;
		}


	}
	
	//function to get items to be updated 
	public function getupdate_deduct_item($deduct_id)
	{
		$this->db->where("item_id",$deduct_id);
		$query = $this->db->get("payroll_deduction_item");
		return $query->row();
	}

	//function to update deductions items
	public function edit_item_deduction($data,$deduct_id)
	{
		$this->db->where('item_id',$deduct_id);
		$this->db->update('payroll_deduction_item',$data);
		if($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	//function to get persons
	public function get_pesron()
	{
		$this->db->select('*');
		$this->db->from('users,person');
		$this->db->where('users.username=person.person_id');
		$results = $this->db->get();
		return $results->result();

	}
	public function get_emplo_profile($id)
	{
		$this->db->select('*');
		$this->db->from('person');
		$this->db->where('person_id',$id);
		$answ=$this->db->get();
		return $answ->result();
	}
	public function count_employee()
	{
		return $this->db->count_all('employee');
	}

	//Creation Nad management of payrolls
	public function add_new_payroll($data_payroll)
	{
		$this->db->insert('payroll',$data_payroll);
	}
	//function to select status
	public function get_payroll_status()
	{
		$this->db->select('*');
		$this->db->from('payroll_status');
		$result=$this->db->get();
		return $result->result();
	}

	//function to get all payroll 
	public function payroll_list()
	{
		$this->db->select('*');
		$this->db->from('payroll,payroll_status');
		$this->db->where('payroll.payroll_status_id = payroll_status.payroll_status_id');
		$result=$this->db->get();
		return $result->result();
	}
	//function to view payrolls and deductions for net payment of each employee
	public function fetch_payroll($employee_id)
	{
		//$this->db->select('*');
		//$this->db->from('payroll,payroll_employee_deduction');
		$this->db->where('payroll.employee_id=payroll_employee_deduction.employee_id');
		$this->db->where('payroll.employee_id',$employee_id);
		$result=$this->db->get('payroll,payroll_employee_deduction');
		return $result->row();
	}

	public function getid($employee_id)
	{
		$this->db->select('*');
		$this->db->from('person');
		$this->db->where('person_id',$employee_id);
		$resi = $this->db->get();
		return $resi->result();
	}

	public function getitemid()
	{
		$this->db->select('*');
		$this->db->from('payroll_deduction_item');
		$resi = $this->db->get();
		return $resi->result();
	}
	public function getsalary($employee_id)
	{
		$this->db->select('*');
		$this->db->from('payroll_salary_scale,employee');
		$this->db->where('payroll_salary_scale.salary_scale_id = employee.salary_scale_id');
		$this->db->where('employee_id',$employee_id);
		$resi = $this->db->get();
		return $resi->result();
	}
}
?>
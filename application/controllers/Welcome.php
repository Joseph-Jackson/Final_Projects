<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('error_reporting', E_ALL & ~E_DEPRECATED);

class Welcome extends CI_Controller{
	function __construct() 
	{
		

		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
		
	}
	
	function index() {
		
		$this->load->view('users/login');
	}

	
	public function login()
	{
		
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
			if($this->form_validation->run())
			{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$userappear = $this->Login_model->can_login($username,$password);
				// echo '<pre>';
				// print_r($userappear);
				// echo '</pre>';
				// exit();
				if ($userappear)
				{
					$sessiondata = [
						'username'=>$userappear->username,
						'privilege_id'=>$userappear->privilege_id,
						'status_id'=>$userappear->status_id,
						// 'module_id'=>$userappear->module_id,
						
					];
					$this->session->set_userdata($sessiondata);
					
					//check if the user is active
					if (($userappear->status_id) == 1) 
					{
					//here we try to verify if the logged in user has privilege to access the corresponding dashboard.
					
					return redirect("AdminController/admindashboard");
							
						}	
						else {
							$this->session->set_flashdata('messages','Sorry! your no longer an active user');
							return redirect("welcome/index");
						}
					
					

				}
				else
				{
					$this->session->set_flashdata('message','Invalid Username or Password');
					return redirect("welcome/index");

				}
								
			
			}

			else
			{
			$this->load->view('users/login');
			}
						
			
	}

	function logout(){
		$this->session->sess_destroy();
		$this->load->view('include/header');
		$this->load->view('notifications/logout_success');
		$this->load->view('include/source');
	}
}

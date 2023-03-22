<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller{
function __construct() {
		parent::__construct();
		$this->load->model('Personal_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata("privilege_id"))
			 {

				return redirect('welcome/index');

			}
	}
public function personvalidation()
{
			$res['menu_items'] = $this->Personal_model->all_menu($this->session->userdata('privilege_id'));
			$this->load->view('header');
			$this->load->view('navigation',$res);
			$this->load->view('persons_view');
			$this->load->view('source');
			$this->load->view('footer');

}



	

}
 ?>
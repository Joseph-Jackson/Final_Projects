<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Personal_model');

	}
	public function Menus()
	{
	$res['menu_items'] = $this->Personal_model->all_menu($this->session->userdata('privilege_id'));
		// echo "<pre>";
		// print_r($res);
		// echo "</pre>";


	}
}

?>
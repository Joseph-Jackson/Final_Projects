<?php 
class Global_functions{
public function __construct(){
$this->CI= & get_instance();

}
function menu(){

$where=array(
	'table_connect'=>'modules_privileges.module_id = modules.module_id AND modules_privileges.privilege_id = users.privilege_id',
	'users.username'=>$this->CI->session->userdata('username'),
	'order'=>'modules.sort ASC'
	);
	$tables=array('modules_privileges','modules','users');
	return $menu=$this->CI->global_model->get_from_table($tables,$where)->result();
}

function is_allowed($function_name){
	$username=$this->CI->session->userdata('username');
	$where=array(
	'table_connect'=>'modules_privileges.module_id = modules.module_id AND modules_privileges.privilege_id = users.privilege_id',
	'users.username'=>$username,
	'order'=>'modules.sort ASC'
);
$tables=array('modules_privileges','modules','users');
if($username!=''){
	if(in_array($function_name,array_column($this->CI->global_model->get_from_table($tables,$where)->result_array(), 'name'))){
		return TRUE;
	}else{
	echo "<script>window.history.back();</script>";
	}
}else{
	echo "<script>window.location='".base_url()."';</script>";
}
}
}


?>
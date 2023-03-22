<?php

/**
 * 
 */
class Global_model extends CI_Model
{
	
	function __construct()
	{
	}
	function get_from_table($tables,$where=array()){
		$this->db->select();
		if(isset($where['select'])){
			$this->db->select($where['select']);
			unset($where['select']);
		}
		if(is_array($tables)&isset($where['table_connect'])){
			foreach($tables as $table){
				$this->db->from($table);
			}
			$this->db->where($where['table_connect']);
			unset($where['table_connect']);
		}else {
			$this->db->from($tables);
		}

if(isset($where['order'])){
	$order=$where['order'];
	unset($where['order']);
}

		$this->db->where($where);
if(isset($order)){
	$this->db->order_by($order);
}

	return $this->db->get();	
	}
}

 ?>
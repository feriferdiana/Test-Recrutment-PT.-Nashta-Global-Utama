<?php

class MY_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert_data($data){
		$this->db->insert($this->table_name, $data);
	}

	function update_data($data=NULL, $filter=NULL){
		$this->db->update($this->table_name, $data, $filter);
	}

	function delete_data($filter=NULL){
		$this->db->delete($this->table_name, $filter);
	}

	function exec_query($query){
		return $this->db->query($query);
	}

	function insert_multi_data($data){
		$sql = " INSERT INTO ".$this->table_name." ".$field." VALUE ".$value." ";

		return $this->exec_query($sql);
	}

	function get_all($order_by = "id", $ordered = "DESC", $limit = NULL, $offset = NULL){
		if($limit == NULL){
			$this->db->order_by($order_by, $ordered);
			return $this->db->get($this->table_name);	
		}
		else{
			if($offset == NULL){
				$offset = 0;
			}
			$this->db->order_by($order_by, $ordered);
			return $this->db->get($this->table_name, $limit, $offset);
		}		
	}
	
	function get_filtered($filter, $order_by="id", $ordered="DESC", $limit=NULL, $offset=NULL){
		if($limit == NULL){
			$this->db->order_by($order_by, $ordered); 
			return $this->db->get_where($this->table_name, $filter);	
		}
		else{
			if($offset == NULL){
				$offset = 0;
			}
			$this->db->where($filter);
			$this->db->order_by($order_by, $ordered);
			return $this->db->get_where($this->table_name, $filter, $limit, $offset);
		}
	}
}

?>
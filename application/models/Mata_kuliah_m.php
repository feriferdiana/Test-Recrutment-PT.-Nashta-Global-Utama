<?php

Class Mata_kuliah_m extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();

		$this->table_name = "mhs_mata_kuliah";
	}

	function get_list()
	{
		$sql  = " SELECT mk.*, m.`nama` ";
		$sql .= " FROM `".$this->table_name."` mk ";
		$sql .= " LEFT JOIN `mhs_mahasiswa` m ON mk.`id_mahasiswa` = m.`id` ";

		return $this->exec_query($sql);
	}
}

?>
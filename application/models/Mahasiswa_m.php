<?php

Class Mahasiswa_m extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();

		$this->table_name = "mhs_mahasiswa";
	}
}

?>
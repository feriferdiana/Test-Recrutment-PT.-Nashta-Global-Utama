<?php

Class Data_nilai_m extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();

		$this->table_name = "mhs_data_nilai";
	}

	function get_list()
	{
		$sql  = " SELECT dn.*, m.`nama`, mk.`nama_mata_kuliah` ";
		$sql .= " FROM `".$this->table_name."` dn ";
		$sql .= " LEFT JOIN `mhs_mahasiswa` m ON dn.`id_mahasiswa` = m.`id` ";
		$sql .= " LEFT JOIN `mhs_mata_kuliah` mk ON dn.`id_mata_kuliah` = mk.`id` ";
		$sql .= " GROUP BY dn.`id_mata_kuliah`, dn.`id_mahasiswa` ";

		// echo $sql;

		return $this->exec_query($sql);
	}

	function get_avg($id_mhs = NULL, $id_matkul = NULL)
	{
		$sql  = " SELECT dn.* , m.`nama`, mk.`nama_mata_kuliah`, AVG(nilai) as rata_rata ";
		$sql .= " FROM `mhs_data_nilai` dn ";
		$sql .= " LEFT JOIN `mhs_mahasiswa` m ON dn.`id_mahasiswa` = m.`id` ";
		$sql .= " LEFT JOIN `mhs_mata_kuliah` mk ON dn.`id_mata_kuliah` = mk.`id` ";

		if ($id_mhs != NULL) {
			$sql .= " WHERE dn.`id_mahasiswa` = '".$id_mhs."' ";
		}

		if ($id_matkul != NULL) {
			$sql .= " AND dn.`id_mata_kuliah` = '".$id_matkul."' ";
		}
		
		$sql .= " GROUP BY dn.`id_mata_kuliah`, dn.`id_mahasiswa` ";

		return $this->exec_query($sql);
	}
}

?>
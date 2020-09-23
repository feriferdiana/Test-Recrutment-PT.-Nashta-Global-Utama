<?php

class Data_nilai extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mahasiswa_m');
		$this->load->model('mata_kuliah_m');
		$this->load->model('data_nilai_m');
	}

	function index()
	{
		$data = NULL;
		
		$query = $this->data_nilai_m->get_list();
		if ($query->num_rows() > 0) {
			
			$data['result'] = $query->result();
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->im_render->main('data_nilai/list.php', $data);
	}

	function add()
	{
		// mahasiswa
		$query = $this->mahasiswa_m->get_all();
		if ($query->num_rows() > 0) {			
			$data['mahasiswa'] = $query->result();
		}

		$this->im_render->main('data_nilai/add',$data);
	}

	function insert(){
		if ($this->input->post('f_save')) {
			
			$data = array(
							'id_mahasiswa'			=> $this->input->post('f_mahasiswa'),
							'id_mata_kuliah'		=> $this->input->post('f_mata_kuliah'),
							'nilai'					=> $this->input->post('f_nilai'),
							'keterangan'			=> $this->input->post('f_keterangan')
						);

			$this->data_nilai_m->insert_data($data);
		}

		redirect('data_nilai');
	}

	function view($id_mhs = NULL, $id_matkul = NULL)
	{
		if ($id_mhs != NULL AND $id_matkul != NULL) {
			// view data nilai
			$query = $this->data_nilai_m->get_avg($id_mhs, $id_matkul);
			if ($query->num_rows() > 0) {
				
				$data['row'] = $query->row();
			}

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			
			$this->im_render->main('data_nilai/view', $data);
		}
	}

	function delete($id_mahasiswa = NULL){
		if ($id_mahasiswa != NULL) {
			
			$where = array('id_mahasiswa' => $id_mahasiswa);

			$this->data_nilai_m->delete_data($where);
		}

		redirect('data_nilai');
	}

	function load_matkul()
	{
		$id_mahasiswa = $this->input->post('js_id_mahasiswa');

		$query = $this->mata_kuliah_m->get_filtered(array('id_mahasiswa' => $id_mahasiswa));
		if ($query->num_rows() > 0) {
			$data['matkul'] = $query->result();
		}

		$this->load->view('data_nilai/load_matkul', $data);
	}
}

?>
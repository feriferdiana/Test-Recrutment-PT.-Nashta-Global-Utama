<?php

class Mata_kuliah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mahasiswa_m');
		$this->load->model('mata_kuliah_m');
	}

	function index()
	{
		$data = NULL;

		$query = $this->mata_kuliah_m->get_list();
		if ($query->num_rows() > 0) {
			
			$data['result'] = $query->result();
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->im_render->main('mata_kuliah/list.php', $data);
	}

	function add()
	{

		$query = $this->mahasiswa_m->get_all();
		if ($query->num_rows() > 0) {			
			$data['mahasiswa'] = $query->result();
		}

		$this->im_render->main('mata_kuliah/add', $data);
	}

	function insert(){
		if ($this->input->post('f_save')) {
			
			$data = array(
							'nama_mata_kuliah'		=> $this->input->post('f_nama_mata_kuliah'),
							'id_mahasiswa'			=> $this->input->post('f_mahasiswa')
						);

			$this->mata_kuliah_m->insert_data($data);
		}

		redirect('mata_kuliah');
	}

	function edit($id = NULL)
	{
		if ($id != NULL) {

			// mahasiswa
			$query = $this->mahasiswa_m->get_all();
			if ($query->num_rows() > 0) {			
				$data['mahasiswa'] = $query->result();
			}

			// mata kuliah
			$query = $this->mata_kuliah_m->get_filtered(array('id' => $id));
			if ($query->num_rows() > 0) {
				
				$data['row'] = $query->row();
			}
			
			$this->im_render->main('mata_kuliah/edit', $data);
		}
	}

	function update(){
		if ($this->input->post('f_update')) {
			
			$data = array(
							'nama_mata_kuliah'		=> $this->input->post('f_nama_mata_kuliah'),
							'id_mahasiswa'			=> $this->input->post('f_mahasiswa')
						);

			$where = array('id' => $this->input->post('f_id'));

			$this->mata_kuliah_m->update_data($data, $where);

		}

		redirect('mata_kuliah');
	}

	function delete($id = NULL){
		if ($id != NULL) {
			
			$where = array('id' => $id);

			$this->mata_kuliah_m->delete_data($where);
		}

		redirect('mata_kuliah');
	}
}

?>
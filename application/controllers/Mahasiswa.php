<?php

class Mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mahasiswa_m');
	}

	function index()
	{
		$data = NULL;
		
		$query = $this->mahasiswa_m->get_all();
		if ($query->num_rows() > 0) {
			
			$data['result'] = $query->result();
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->im_render->main('mahasiswa/list.php', $data);
	}

	function add()
	{
		$this->im_render->main('mahasiswa/add');
	}

	function insert(){
		if ($this->input->post('f_save')) {
			
			$data = array(
							'nama'			=> $this->input->post('f_nama'),
							'alamat'		=> $this->input->post('f_alamat')
						);

			$this->mahasiswa_m->insert_data($data);
		}

		redirect('mahasiswa');
	}

	function edit($id = NULL)
	{
		if ($id != NULL) {
			$query = $this->mahasiswa_m->get_filtered(array('id' => $id));
			if ($query->num_rows() > 0) {
				
				$data['row'] = $query->row();
			}
			
			$this->im_render->main('mahasiswa/edit', $data);
		}
	}

	function update(){
		if ($this->input->post('f_update')) {
			
			$data = array(
							'nama'			=> $this->input->post('f_nama'),
							'alamat'		=> $this->input->post('f_alamat')
						);

			$where = array('id' => $this->input->post('f_id'));

			$this->mahasiswa_m->update_data($data, $where);

		}

		redirect('mahasiswa');
	}

	function delete($id = NULL){
		if ($id != NULL) {
			
			$where = array('id' => $id);

			$this->mahasiswa_m->delete_data($where);
		}

		redirect('mahasiswa');
	}
}

?>
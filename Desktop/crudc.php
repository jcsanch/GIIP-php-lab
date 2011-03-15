<?php

class Crud extends Controller 
{
	function index()
	{
		$data = array();
		$this->load->view('crudv', $data);
		
		if($query = $this->crudv->get_records())
		{
			$data['records'] = $query;
		}
		
		$this->load->view('crudv', $data);
	}
	
	function create()
	{
		$data = array(
			'title' => $this->input->post('title')
			'author' => $this->post9'author')
			'content' => $this->input->post('content')

		);
		
		$this->crud_model->add_record($data);
		$this->index();
	}
	
	function update()
	{
		$data = array(
			'title' => 'Update',
			'author' => 'Updated',
			'content' => 'Yep its updated.'	
			
		);
		
		$this->crudm->update_record($data);
	}
	
	
	function delete()
	{
		$this->crudm->delete_row();
		$this->index();
	}
}
?>
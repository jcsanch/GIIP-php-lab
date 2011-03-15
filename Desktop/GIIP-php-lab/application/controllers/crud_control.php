<?php

class Crud extends Controller 
{
	function index()
	{
		$data = array();
		$this->load->view('crud_view', $data);
		
		if($query = $this->crud_model->get_records())
		{
			$data['records'] = $query;
		}
		
		$this->load->view('crud_view', $data);
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
		
		$this->crud_model->update_record($data);
	}
	
	
	function delete()
	{
		$this->crud_model->delete_row();
		$this->index();
	}
}
?>
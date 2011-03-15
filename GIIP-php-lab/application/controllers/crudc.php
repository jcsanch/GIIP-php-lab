<?php

class crudc extends Controller
{
function index()
{
$data = array();

if($query = $this->crud_model->get_records())
{
$data['records'] = $query;
}

$this->load->view('crudv', $data);
}

function create()
{
$data = array(
'title' => $this->input->post('title'),
'content' => $this->input->post('content')
);

$this->site_model->add_record($data);
$this->index();
}

function update()
{
$data = array(
'title' => 'My Freshly UPDATED Title',
'content' => 'Content should go here; it is updated.'
);

$this->site_model->update_record($data);
}


function delete()
{
$this->site_model->delete_row();
$this->index();
}
}
?>
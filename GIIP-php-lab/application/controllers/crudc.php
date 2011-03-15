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
'author' => $this->input->post('author'),
'content' => $this->input->post('content')
);

$this->crudm->add_record($data);
$this->index();
}

function update()
{
$data = array(
'title' => 'My Freshly UPDATED Title',
'author' => 'The most recent Author',
'content' => 'Content should go here; it is updated.'
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
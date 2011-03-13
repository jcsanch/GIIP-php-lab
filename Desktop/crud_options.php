<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<h4><title>CRUD</title></h4>
	<style type="text/css" media="screen">
		label {display: block;}
	</style>
</head>
<body>
     <h1>Create Article</h1>
	<?php echo form_open('crud/create');?>
	
	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" />
	</p>
	
	<p>
		<label for="author">Author:</label>
		<input type="text" name="author" id="author" />
	</p>
	
	<p>
		<label for="content">Content:</label>
		<input type="text" name="content" id="content" />
	</p>	
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<?php echo form_close(); ?>
	
	<hr />
	
	<h1>Read</h1>
	<?php if(isset($records)) : foreach($records as $row) : ?>	

		<?php endforeach; ?>

	<?php else : ?>	
	<p>No avaliable records at this time.</p>
		<?php endif; ?>
	
	<hr />
	
	<h1>Delete</h1>
	
	
	<p>
		Click on a link to use the delete function.
	</p>
	
</body>
</html>	
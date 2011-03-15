<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>untitled</title>
				<style type="text/css" media="screen">
				label {display: block;}
			</style>
	</head>
<body>
	<h2>Create</h2>
		<?php echo form_open('crudc/create');?>
	<p><label for="title">Title:</label>
		<input type="text" name="title" id="title" /></p>
		
	<p><label for="content">Author:</label>
		<input type="text" name="author" id="author" /></p>	
		
	<p><label for="content">Content:</label>
		<input type="text" name="content" id="content" /></p>
		
	<p><input type="submit" value="Submit" /></p>
	
	<?php echo form_close(); ?>
	<hr />

		<h2>Read</h2>
		<?php if(isset($records)) : foreach($records as $row) : ?>
		<? echo 'title' , 'author'; ?>
			<?php endforeach; ?>

		<?php else : ?>

		<h2>There are no records avaliable at this time.</h2>

		<?php endif; ?>
<hr />

		<h2>Delete</h2>
	
		<p>To use the delete function click on a link!</p>

</body>
</html> 
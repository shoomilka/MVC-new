<?php
require('header.php');
?>
<form action="/index.php/task" method="POST">
	<label for="basic-url">Title</label>
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon3">Title</span>
		</div>
		<input type="text" name="title" class="form-control" id="basic-url" aria-describedby="basic-addon3">
	</div>

	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text">Text</span>
		</div>
		<textarea name="text" class="form-control" aria-label="With textarea"></textarea>
	</div>
	
	<input type="submit" class="btn btn-primary float-right" value="Submit">
</form>

<?php
require('footer.php');
?>
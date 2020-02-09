<?php
require('header.php');
?>

<form action="/index.php/login" method="POST">
	<div class="input-group input-group-lg">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
		</div>
		<input type="text" name="username" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
	</div>
	<div class="input-group input-group-lg">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
		</div>
		<input type="password" name="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
	</div>
	<input type="submit" class="btn btn-primary float-right" value="Submit">
</form>

<?php
require('footer.php');
?>
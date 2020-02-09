<?php
require('header.php');

if(isset($message)){
	echo '<div class="alert alert-warning" role="alert">'.$message.'</div>';
}
?>
<form action="/index.php/create" method="POST">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon3">Name</span>
		</div>
		<input type="text" name="name" class="form-control" value="<?php if(isset($_POST["name"])) echo $_POST["name"]; ?>">
	</div>
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon3">Email</span>
		</div>
		<input type="text" name="email" class="form-control" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>">
	</div>

	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text">Text</span>
		</div>
		<textarea name="text" class="form-control" aria-label="With textarea"><?php if(isset($_POST["text"])) echo $_POST["text"]; ?></textarea>
	</div>
	
	<input type="submit" class="btn btn-primary float-right" value="Submit">
</form>

<?php
require('footer.php');
?>
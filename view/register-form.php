<div class="login-register">
	<?php
		require_once(__DIR__ . "/../model/config.php");
	?>

	<h1>Sign Up</h1>

	<!--creates a path-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
		<div>
			<label class="label" for="email">Email: </label>
			<input class="input" type="text" name="email" />
		</div>

		<div>
			<!--creates a slot for the user's username-->
			<label class="label" for="username">Username: </label>
			<input class="input" type="text" name="username" />
		</div>

		<div>
			<!--creates a slot for the user's password-->
			<label class="label" for="password">Password: </label>
			<input class="input" type="password" name="password" />
		</div>

		<div>
			<!--creates a submit button-->
			<button type="submit">Submit</button>
		</div>
	</form>
</div>
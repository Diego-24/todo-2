<div class="login-register">
	<?php
		require_once(__DIR__ . "/../model/config.php");
	?>

	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	
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
			<button class="button" type="submit">Login</button>
		</div>
		<footer>
			<button class="button" type="button">
				<a href="<?php echo $path . "register.php";?>">Sign Up</a>
			</button>
		</footer>
	</form>
	
</div>
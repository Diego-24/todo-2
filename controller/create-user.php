<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	$hashedPassword = crypt($password, $salt);

	$query = $_SESSION["connection"]->query("SELECT * FROM listusers WHERE username = '$username'");

	if ($query->num_rows == 0) {
		$query = $_SESSION["connection"]->query("INSERT INTO listusers SET "
				. "email = '$email', "
				. "username = '$username',"
				. "password = '$hashedPassword',"
				. "salt = '$salt'");

		if($query) {
			$_SESSION["name"] = $username;
			echo "Successfully created user: $username";
			header("Location: " . $path . "index.php");
		}
		else{
			echo "<p>" . $_SESSION["connection"]->error . "</p>";
		}
	}
	else{
		echo "Username already exists";
	}
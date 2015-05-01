<?php
	require_once(__DIR__ . "/database.php");
	session_start();
	session_regenerate_id(true);

	/*Sets the path that leads to PHPBasics*/
	$path = "/todo-2/";
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "todo-2";

	/*checks if it has been set or not*/
	if(!isset($_SESSION["connection"])) {
		/*stores the object mysqli*/
		$connection = new Database($host, $username, $password, $database);
		/*assigns the connection variable to the session variable*/
		$_SESSION["connection"] = $connection;
	}
	
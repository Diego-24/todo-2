<?php
	require_once(__DIR__ . "/../model/config.php");

	/*Creates the entire table*/
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");
	
	/*creates another table*/
	$query = $_SESSION["connection"]->query("CREATE TABLE tasks("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "username varchar(30) NOT NULL,"
			. "password char(128) NOT NULL,"
			. "salt char(128) NOT NULL,"
			. "PRIMARY KEY (id))");
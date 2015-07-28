<?php
/*
	define ("URL", "127.0.0.1");
	define ("USER", "root");
	define ("PASSWORD", "whateverMyPasswordIs");
	define ("DATABASE_NAME", "dabbleChat");
*/

	$url = "127.0.0.1";
	$user = "root";
	$password = "whateverMyPasswordIs";
	$database_name = "dabbleChat";

	$connection = new mysqli ($url, $user, $password, $database_name);
	if ($connection->connect_error) {
		print ("Connection error");
		exit (1);
	}

	if (isset ($_GET ['user_msg'])) {
		$query = "INSERT INTO messages values ('" . $_GET ['user_msg'] . "')";
		$connection->query ($query);
	}

	$query = "SELECT * from messages";
	$response = $connection->query ($query);

	$msg_array = true;
	while ($msg_array) {
		$msg_array = $response->fetch_array ();
		print ($msg_array [0] . "<br />");
	}

	$connection->close ();
?>

<!DOCTYPE html>
<html>
	<body>
		<center>
		<form action = "delchat.php" method = "post">
			Password:<input type = "password" name = "pass" />
			<br /><input type = "submit" value = "Erase chat" />
		</form>
		<?php

			$url = "127.0.0.1";
			$user = "root";
			$password = "whateverMyPasswordIs";
			$database_name = "dabbleChat";

			if (isset ($_POST ['pass'])) {
				if ($_POST ['pass'] == "1xusng23@") {
					$connection = new mysqli ($url, $user, $password, $database_name);

			                if ($connection->connect_error) {
		                        	die ("Failed to connect");
			                }

			                $query = "delete from messages";
			                $connection->query ($query);
			                $connection->close ();
				}
				else {
					print ("Incorrect Password <br />");
				}
		                print ("<b> Done </b>");
			}
		?>
		</center>
	</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
</head>
<body>
	<p>
		<?php
			# This is a PHP comment
			echo("Hello, world!");

			# Create variables for username and user status
			# Logged in and admin -> "Welcome, admin, you have full privileges"
			# Logged in and not admin -> "Welcome, name"
			# Not logged in -> "Please log in to proceed"

			# Spacing between part 1 and part 2
			echo("<br><br>");

			$status = "logged out";
			$username = "David";

			if ($status == "logged in") {

				if ($username == "admin") {
					echo("Welcome, admin, you have full privileges.");
				} else {
					echo("Welcome, {$username}.");
				}

			} else {
				# User must not be logged in
				echo("Please log in to proceed.");
			}

		?>	
	</p>
</body>
</html>
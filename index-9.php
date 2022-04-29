<html>
<head>
	<title>Insertion</title>
</head>
<body>
<?php

# Set up parameters to connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

# Create connection to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

# Check the connection was successful
if (!$conn) {
	die(mysqli_connect_error());
}

# SQL query to run
$sql = <<<SQL
INSERT INTO Accounts
VALUES (16, 1, "Checking", 1000, 2);
SQL;

# Send SQL query to the database
$result = mysqli_query($conn, $sql);

# Check if the modification was performed successfully
if ($result) {
	echo("Update performed!");
} else {
	echo("Update failed!");
}

?>
<body>
</html>
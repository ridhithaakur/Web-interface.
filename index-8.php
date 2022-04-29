<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer account search</title>
</head>
<body>
	<form method = "post" action = "results.php">
		<label for = "search">Customer search</label>
		<input type = "text" name = "search">
		<br>
		<input type = "checkbox" name = "include">
		<label for = "include">Include customers with no accounts</label>
		<br>
		<input type = "checkbox" name = "sort" checked>
		<label for = "sort">Sort ascending</label>
		<input type = "submit" value = "Go!">
	</form>
</body>
</html>
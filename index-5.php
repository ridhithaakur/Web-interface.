<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account query</title>
</head>
<body>
	<form method = "post" action = "results.php">
		<label for = "type">Account type</label>
		<select name = "type">
			<option value = "Checking">Checking</option>
			<option value = "Savings">Savings</option>
			<option value = "Investment">Investment</option>
		</select>
		<br>
		<label for = "min">Minimum balance</label>
		<input type = "number" name = "min">
		<br>
		<input type = "submit" value = "Submit">
	</form>
</body>
</html>
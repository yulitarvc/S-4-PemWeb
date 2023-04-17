<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h2>Biodata</h2>
	<form method="POST" action="process.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required><br><br>
		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea><br><br>
		<button type="submit">Save</button>
	</form>
</body>
</html>
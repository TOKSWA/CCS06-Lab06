<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
</head>
<body>
	<h1>Feedback Form</h1>
	<form method="post" action="thankyou.php">
		<label for="complete_name">Complete Name:</label>
		<input type="text" id="complete_name" name="complete_name" required><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="type">Type:</label>
		<select id="type" name="type" required>
			<option value="">Select Type</option>
			<option value="Inquiry">Inquiry</option>
			<option value="Feedback">Feedback</option>
			<option value="Other">Other</option>
		</select><br>
		<label for="satisfaction_level">Level of satisfaction:</label>
		<input type="range" id="satisfaction_level" name="satisfaction_level" min="0"max="10" required><br>

		<label for="message">Feedback Message:</label>
		<textarea id="message" name="message" required></textarea><br>
	
		<input type="submit" value="Submit">
	</form>
</body>
</html>

//thankyou code

<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form - Thank You!</title>
</head>
<body>
		<h1>Thank You!</h1>
	<?php
		$complete_name = $_POST['complete_name'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$satisfaction_level = $_POST['satisfaction_level'];
		$message = $_POST['message'];
		echo "Received $type message from $complete_name ($email)<br><br>";
		echo "$message<br><br>";
		echo "Satisfaction Level: $satisfaction_level";
	?>
</body>
</html>
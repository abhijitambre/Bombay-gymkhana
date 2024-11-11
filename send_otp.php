<!DOCTYPE html>
<html>

<head>
	<title>OTP Validation</title>
</head>

<body>
	<h2>Enter OTP</h2>
	<form method="post" action="">
		<label for="phone">Phone Number:</label>
		<input type="text" name="phone" id="phone" required><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>
		<label for="authType">Authentication Type:</label>
		<select name="authType" id="authType">
			<option value="SMS">SMS</option>
			<option value="EMAIL">Email</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<form method="post" action="">
		<label for="phone">OTP:</label>
		<input type="text" name="otp" id="otp" required><br><br>
		<input type="submit" name="submit1" value="Submit">
	</form>


</body>

</html>



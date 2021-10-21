<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="style.css">

<form action="save.php" method="post">
	<div class="registration"><fieldset>
	<legend>REGISTRATION</legend>
	Name : <br>
	<input type="text" name="name" value=""placeholder="Give valid Username">
	<br>
	Email : <br>
	<input type="text" name="email" value=""placeholder="Give valid Username">
	<br>
	Username : <br>
	<input type="text" name="username" value=""placeholder="Give valid Username">
	<br>
	Password:<br>
	<input type="Password" name="pass" value="" placeholder="password">
	<br>
	Confirm Password :<br>
	<input type="password" name="conpass" placeholder="New Password">
	<br>
	<fieldset>
			<legend >Gender</legend>
			<input type="radio" id="gender" name="male">Male</input>
			<input type="radio" id="gender" name="male">FeMale</input>
			<input type="radio" id="gender" name="male">Other</input>

	</fieldset>

	<fieldset>
		<legend>Date Of Birth</legend>
		 <label for="dateofbirth"></label>
		 <input type="date" id="dateofbirth" name="dateofbirth">
	</fieldset>
	<br>
	<input type="submit" name="Login" value="Submit"> <input type="submit" name="Reset" value="Reset"> 
	</fieldset>
</form>

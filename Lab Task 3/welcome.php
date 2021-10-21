<?php 
	if(!empty($_POST['remember'])) {
	
	setcookie("username",$_POST['username'],time()+10);
	setcookie("password",$_POST['pass'],time()+10);
	echo "cookie set successfully";
	}

	else{
		setcookie("username","");
		setcookie("password","");
		echo "cookie not set";
	}

?>

<br>
<br>
<a href="Login.php">Go to Login Page</a>
<br>
<a href="Profile.php">Profile</a>
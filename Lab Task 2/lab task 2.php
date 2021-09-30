<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateofbirthErr= $genderErr = $degreeErr= $bloodgroupErr ="";
$name = $email = $dateofbirth = $gender = $degree= $bloodgroup="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"] );
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  

  if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "Cannot be Empty";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
 }
  
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


if (empty($_POST["degree"])) {
    $degreeErr = "At least Select two";
  }
  else {
    $degree = test_input($_POST["degree"]);
  }


  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "At least Select one is required";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Registration Form</h2>
<form method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NAME: <input type="text" name="name" Placeholder="type your Name here">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-MAIL: <input type="text" name="email"placeholder="example@gmail.com">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  DATE OF BIRTH :
		 <label for="dateofbirth"></label>
		 <input type="date" id="dateofbirth" name="dateofbirth">
         <span class="error">* <?php echo $dateofbirthErr;?></span>
		 <br><br>
  
  GENDER:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  DEGREE:
  <input type="Checkbox" id="degree" name="degree" value="SSC">SSC
  <input type="Checkbox" id="degree" name="degree" value="HSC">HSC
  <input type="Checkbox" id="degree" name="degree" value="BSc">BSc
  <input type="Checkbox"id="degree" name="degree" value="MSc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

  BLOOD GROUP :
  
  <select name="bloodgroup"> <option id="bloodgroup" name="bloodgroup" value="">Select your Blood Group</option>
  <option id="bloodgroup" name="bloodgroup" value="A+">A+</option>
  <option id="bloodgroup" name="bloodgroup" value="A-">A-</option>
  <option id="bloodgroup" name="bloodgroup" value="B+">B+</option>
  <option id="bloodgroup" name="bloodgroup" value="B-">B-</option>
  <option id="bloodgroup" name="bloodgroup" value="AB+">AB+</option>
  <option id="bloodgroup" name="bloodgroup" value="AB-">AB-</option>
  <option id="bloodgroup" name="bloodgroup" value="O+">O+</option>
  <option id="bloodgroup" name="bloodgroup" value="O-">O-</option>
  <select/>
 <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit" >  
</form>
<?php


echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo"<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
echo "<br>";
?>
<footer>
		<p>This website made by &copy; Tanvir Hasan Nahid</p>
	</footer>
</body>
</html>
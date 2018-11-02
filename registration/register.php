<?php

$con= mysqli_connect("localhost","phpmyadmin","Reshma@92mo","phpmyadmin");
if(!$con)
{
die("Could not connect".mysqli_error());
}

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>
				Registration Form
			</title>
<style>
body
{
background:"powederblue";
background-image: url('iot10.jpg');
}
.wrap{
	width:400px;
	margin:auto;
	bakground-color:#ffff46;
	background-image: url('white1.jpg');
	margin-top:50px;
	padding:5px;
}
form{
	padding:10px;
	font-family:arial;
	border:1px solid black;
}
h2{
	text-align:center;
	background:orange;
	color:white;
	padding:10px;
	border-radius:10px; 
}
input{
padding:10px;
margin:5px;
border-radius:5px;
border:"black";
}
input[type=text],input[type=email],input[type=number],input[type=password],input[type=tel]{
	width:90%
}
input[type=submit]{
width:95%;
background:orange;
cursor:pointer;
font-size:18px;
font-weight:bold;
color:white
}
input[type=submit]:hover{
background:yellow;
}
select{
padding:10px;
width:32%;
border-radius:5px;
}
</style>
</head>


<body>
	<div class="wrap">
		
		<form method="post">
		
			<h2>REGISTRATION FORM</h2>

<input type="text" name="name" id="name" placeholder= " Full Name" required>

<input type="text" name="userid" id="userid" placeholder= " User ID" required><br>

<input type="radio" name="gender" id="gender" value="Male" placeholder = "Male" required> Male

<input type="radio" name="gender" id="gender" value="Female" placeholder = "Female" required> Female
<br>
<label>&nbsp Date of Birth</label>
<input type="date" name="dob" id="dob" required>

<input type="text" name="aadhaar" id="aadhaar" placeholder=" Aadhaar No." required>

<input type="tel" name="mobile" id="mobile" placeholder=" Mobile No." required>

<input type="text" name="address" id="address" placeholder=" Address" required>

<input type="password" name="pass" id="pass" placeholder=" Password" required>

<input type="password" name="cpass" id="cpass" placeholder=" Confirm Password" required><br>

<br>

<input type="submit" name="signup" id="signup" value="SIGN UP">

			</form>
		</body>
	</html>
</style>
</head>

<?php
if(isset($_POST['signup']))
{
  echo "Registered Successfully";

    $name = $_POST['name'];
	$userid = $_POST['userid'];   
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
    $aadhaar = $_POST['aadhaar'];
    $mobile = $_POST['mobile'];
	$address = $_POST['address'];	
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	/*$today = date("Y-m-d");*/
	$diff = (date('Y')-date('Y',strtotime($dob)));
	
	
	
	
$query = "INSERT INTO `BusUserData`(`name`, `userid`, `gender`,`dob`,`age`,`aadhaar`, `mobile`, `address`, `pass`, `cpass`) VALUES ('$name','$userid','$gender', '$dob','$diff','$aadhaar','$mobile','$address','$pass','$cpass')";

$rs = mysqli_query($con,$query);

echo '<script type="text/javascript">alert("'.$fname.' Registered successfully")</script>';
//;window.location=\'sup.html\';
//header("location:mainpg.php");
}
?>



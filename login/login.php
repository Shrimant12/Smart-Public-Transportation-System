<?php
session_start();
?>

<?php

//	if(isset($_SESSION['uname']))
	//{
		//header("Location: mainpg.php");
	//}

$con= mysqli_connect("localhost","phpmyadmin","Reshma@92mo","phpmyadmin");
if(!$con)
{
	die("Could not connect".mysqli_error());
}

?>


<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>

      Login Page

    </title>
  </head>
<body style="background-image: url('iot10.jpg')">

	<style>
		
h1{
	text-align:center;
	background:orange;
	color:black;
	padding:10px;
	border-radius:10px; 
}

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
width:90%;
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
<h1 align="center">
  <b>
    Welcome to Smart Public Transportation System
  </b>
</h1>
<br>

<br>

<div class="wrap" align="center">


<form method="post">

    <input type="text" id="uname" placeholder="Username" name="uname" required>
    <input type="password" id="pass" placeholder="Password" name="pass" required>

    <input type="submit" class="button" value="Login" name="Login">

</form>
</div>

</body>
</html>  

<?php
      if(isset($_POST['Login']))
      {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM AdminData WHERE uname='$uname' AND pass='$pass'";

		$query_run = mysqli_query($con,$query);
		$counts = mysqli_num_rows($query_run);

		if($counts>0)
			{
				$_SESSION['uname']=$uname;
				header('location: home.php');
			}
			else
			{
				echo "Please Enter username and password";
			}
     }

?>

<?php
	if(isset($_POST['Back']))
	{
	echo "pressed";	
	header('location: index.php');
	
	}


?>



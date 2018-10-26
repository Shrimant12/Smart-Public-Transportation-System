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
		form{border: 1px  solid #ff0000;}

		.button
		{
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;

		}

	</style>

<div class="container" align="center" style=" margin-top:170px; background-image: url('white1.jpg');">
<div style="width:100%;">

<form method="post">

<h1 align="center">
  <b>
    Welcome to Smart Public Transportation System
  </b>
</h1>

<br>
  <h3  align="center">Username
    <input type="text" id="uname" name="uname" required>
  </h3>


  <h3 align="center">Password
    <input type="password" id="pass" name="pass" required>
  </h3>

  <h5 align="center">
    <input type="submit" class="button" value="Login" name="Login">
  </h5>
 

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



</form>
</body>
</html>

<?php
include "db.php";

$con= mysqli_connect("localhost","phpmyadmin","Reshma@92mo","phpmyadmin");
if(!$con)
{
die("Could not connect".mysqli_error());
}

//mysqli_select_db("phpmyadmin",$con);


if(isset($_POST['Signup']))
{
  echo "Registered Successfully";

    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

$query = "INSERT INTO `AdminData`(`fname`, `uname`, `email`,`pass`, `cpass`) VALUES ('$fname','$uname','$email','$pass','$cpass')";

$rs = mysqli_query($con,$query);

echo '<script type="text/javascript">alert("'.$fname.' Registered successfully")</script>';
//;window.location=\'sup.html\';
//header("location:mainpg.php");
}
?>



<!-- hi -->
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>	
        Signup Page
    </title>
  </head>
<body>

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

<div class="wrap" align="center">
    <form method="post">

		<center>    
      <input type="text" id="fname" placeholder="First name"  name="fname" required>

      <input type="text" id="uname" placeholder= "Username" name="uname" required>
    
      <input type="email" id="email" placeholder= "abc@gmail.com" name="email" required>
 
   
    <input type="password" id="pass" name="pass" placeholder="Password" onkeyup='check();' required>
 

    <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" onkeyup='check();' required>
    
    
<script type="text/javascript">

  var check = function()
  {
    if (document.getElementById('pass').value ==
        document.getElementById('cpass').value)
       {

         document.getElementById('message').style.color = 'green';
         document.getElementById('message').innerHTML = 'Password Matched';

       }


    else
    {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }

</script>

 
  <input type="submit" class="button" value="Signup" name="Signup">
 </div>
 <?php

if(isset($_POST['Back']))
{
  header("location: index.php");
}
mysqli_close();

?>


    </form>
  </body>
</html>

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
				Recharge Form
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
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="wrap">
		
		<form method="post">
		
			<h2>RECHARGE FORM</h2>

<input type="text" name="name" id="name" placeholder= " Full Name">

<input type="text" name="userid" id="userid" placeholder= " User ID"><br>

<input type="text" name="recharge" id="recharge" placeholder= " Recharge " ><br>

<br>

<input type="submit" name="signup" id="signup" value=" SUBMIT">
</form>
</div>
</body>
</html>


</style>

</head>
<body>

<?php
if(isset($_POST['signup']))
{
 # echo "Rechargred Successfully";

	$userid = $_POST['userid']; 
	
	$recharge = $_POST['recharge'];
	
	$query = "UPDATE `BusUserData` SET recharge=recharge+'$recharge' WHERE userid='$userid'";
	

$rs = mysqli_query($con,$query);

echo '<script type="text/javascript">alert("'.$fname.' Recharged successfully")</script>';
//;window.location=\'sup.html\';
//header("location:mainpg.php");
}
?>



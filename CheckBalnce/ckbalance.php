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
				Check balance
			</title>
<style>
body
{
background:"powederblue";
background-image: url('iot10.jpg');
}
.wrap{
	width:600px;
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
width:48%
}
input[type=submit]{
width:52%;
background:orange;
cursor:pointer;
font-size:18px;
font-weight:bold;
color:white;

}

input[type=submit]:hover{
background:yellow;
}
select{
padding:10px;
width:32%;
border-radius:5px;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: orange;
    color: white;
}
</style>
</head>


<body>
<br>
<br>
<br>
<br>

	<div class="wrap">
		
		<form method="post">
		
			<h2>Check User Balance</h2>


<center>
<input type="text" name="id" id="id" placeholder="User ID" required>
<br>
</center>

<center>
<input type="submit" name="Signup" value="SUBMIT">
</center>

<br>





<?php

echo "<table align='center' border='1' id='customers'>
<tr>
<th> Name</th>
<th> Balance</th>

</tr>";

if(isset($_POST['Signup']))
{
$id=$_POST['id'];
				
				$query="SELECT * FROM BusUserData WHERE userid='$id'";
				$query_run=mysqli_query($con,$query);
				//$query_run1=mysqli_num_rows($query_run);
				if($fetch=mysqli_fetch_array($query_run))
				{
					echo "<tr>";
					echo "<td>" . $fetch['name'] . "</td>";
					echo "<td>" . $fetch['recharge'] . "</td>";
					
					echo "</tr>";
				}

echo "</table>";
//header("location: retrive.php");
}
?>







</form>




</body>
</html>


</style>

</head>




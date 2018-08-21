<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style>
body{
background:"powederblue";
}
.wrap{
	width:350px;
	margin:auto;
	bakground-color:#ffff46;
	margin-top:50px;
	padding:5px;
}
form{
	padding:10px;
	font-family:arial;
	border:1px dotted black;
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
<form>
<h2>REGISTRATION FORM</h2>
<input type="text" name="flname" placeholder= " Full Name">
<input type="text" name="uid" placeholder= " User ID"><br>
<input type="date" name="dob" placeholder= " Date of Birth">
<input type="radio"name="male" value="Male">Male
<input type="radio"name=female" value="Female">Female<br>
<input type="text" name="adharno" placeholder=" Aadhaar No.">
<input type="tel" name="mobno" placeholder=" Mobile No.">
<input type="text" name="addr" placeholder=" Address">
<input type="password" name="password"placeholder=" Password">
<input type="password" name="Confirm Password" placeholder=" Confirm Password"><br>
<br>
<input type="submit" name="Submit"value="SUBMIT">
</form>
</div>
</body>
</html>


</style>

</head>
<body>
<div class ="wrap">

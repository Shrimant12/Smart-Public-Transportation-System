<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Lab portal
  </title>
</head>

<body style="background-image: url('iot10.jpg');">
	<style>
		form {border: 1px solid #ff0000;}

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
	
	<div align="center" class="container" style="margin-top:170px; background-image: url('white1.jpg');">
	<div style="width:100%;" >




<form method="post">



<h1 align = "center">
  <b>
    <marquee>Smart Public Transportation System
    </marquee>
    <br>

      <input value="Admin Login" class="button" name="Login" type="submit">
      <input value="Admin Signup" class="button" name="Signup" type="submit">
  </b>
</h1>

<?php

    if(isset($_POST['Login']))
    {
      header("location: login.php");
    }

    if(isset($_POST['Signup']))
    {
      header("location: sup.php");
    }


 ?>

</form>
</body>
</html>

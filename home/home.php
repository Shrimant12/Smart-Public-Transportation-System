<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  background-image: url("pt2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  /* background-color: #e9e9e9; */
  background-color: #2196F3;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  /* background-color: #2196F3; */
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;

  
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a class="active" href="register.php">Register</a>
  <a class="active" href="recharge.php">Recharge</a>
  <a class="active" href="ckbalance.php">Check Balance</a>
  <a class="active" href="verify.php"> Verify </a>
  
  <!--
  <div class="search-container">
    <form action="/retrive.php">
      <input type="text" placeholder="Search.." id="userid" name="userid">
     
     
     <button type="submit">
     <i class="fa fa-search">
     </i>
     </button>
     -->
   
     
    </form>
  </div>
</div>

<div style="padding-left:16px">
  <h2>Smart Public Transportation System</h2>
  
</div>

</body>
</html>


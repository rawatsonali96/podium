<?php
include('Config/setup.php');
 include('Config/css.php'); 
 include('Config/js.php');
 include ('connect.php');
 include('template/navigation.php');
if(!isset($_GET['ar_id'])){
    header('Location:homep.php');
}

$ar_sql="SELECT * FROM article WHERE ar_id=".$_GET['ar_id'];
  if($ar_query=mysqli_query($dbc,$ar_sql)){
      $ar_rs=mysqli_fetch_assoc($ar_query);
      ?>
      <meta charset="utf-8">
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 <script type="text/javascript" src="effects.js"></script>
 </head>
 <body> 
  <div class="container">
     <div class= "row">
	   <ul class="nav navbar-nav" >
	   <li><a href="/" style="color:#fe6f5e;">Home</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Poetry</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Fiction</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Startup</a></li>
	   <li><a href="#"style="color:#fe6f5e;">Politics</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Unsung heroes</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Recent/Opnion/Generic</a></li>
	 <li>
    <button type="button" class="btn  navbar-btn" id="but" style="background-color:#fe6f5e;color:black;">You too can upload your articles here</button></li>
	 <li>
	 <a href="signuppage.php"
    <button type="button" class="btn  navbar-btn" id="but1" style="background-color:#fe6f5e;color:black;">Sign up
	</button></a>
	</li>
	 <li>
	 <a href="loginpage.php>
    <button type="button" class="btn navbar-btn" id="but1" style="background-color:#fe6f5e;color:black;">Log in
	</button>
	</a>
	</li>
	  </ul>
	  <!--div class="checkbox">
  <label>
    <input type="checkbox" data-toggle="toggle">
  </label>
</div-->
	 </div>
	 <div>
	   
	 </div>
  </div>
 </body>
</html>
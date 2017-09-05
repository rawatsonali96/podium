<?php
  include 'dbh.php';
  if(isset($_POST['submitted']) == 1){
   $first= mysqli_real_escape_string($conn,$_POST['first']);
   $last= mysqli_real_escape_string($conn,$_POST['last']);
   $pwd= mysqli_real_escape_string($conn,$_POST['pwd']);

   }
   echo $first;
    $sql="INSERT INTO `podium`.`user` (`first`,`last`,`pwd`) VALUES ('$first', '$last', '$pwd')";
  $result=$conn->query($sql);
  
?>
<html>
 <head>
   <link rel="stylesheet" type="text/css" href="logincss.css">
 </head>
 <body>
  <style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #fe6f5e;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="signuppage.php" method="POST" enctype="multipart/form-data" role="form"><h2>Sign up Form</h2>
  <div class="imgcontainer">
    <img src="img/writers1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Firstname</b></label>
    <input type="text" placeholder="Enter first name" name="first" required>
	
	 <label><b>Lastname</b></label>
    <input type="text" placeholder="Enter last name" name="last" required>
	
	 <label><b>Email-id</b></label>
    <input type="text" placeholder="Enter id" name="uid" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
	<button type="submit" class="btn btn-default">Save</button>
                           <input type="hidden" name="submitted" value="1">
	
        
    <button type="submit">Sign up</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  
</form>

</body>
</html>

  
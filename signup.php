<?php
 include 'dbh.php';
   if(isset($_POST['submitted']) == 1){
   $first= mysqli_real_escape_string($conn,$_POST['first']);
   $last= mysqli_real_escape_string($conn,$_POST['last']);
   $pwd= mysqli_real_escape_string($conn,$_POST['pwd']);
   }
   echo $last;
  
   
  $sql="INSERT INTO `podium`.`user` (`first`,`last`,`pwd`) VALUES ('$first', '$last', '$pwd')";
  $result=$conn->query($sql);
  if($result){
  echo "connected";
  }
  
 
  ?>
  
  
<?php

if(count($_POST)>0)
{    
     include 'dbConn.php';

     $fname = $_POST['rank'];
     $lname = $_POST['name'];
     $email = $_POST['phone'];
 
     $query = "INSERT INTO employee (fname,lname,email)
     VALUES ('$rank','$name','$phone')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }

}
  header ("Location: adminhome.php?msg=".$msg."");
?>
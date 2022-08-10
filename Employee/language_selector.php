<?php
   // ob_start();
   // session_start();language_selctor.php

include 'dbConn.php';
if(isset($_POST['submit_language']))
{
   if (isset($_POST['q1'])){
        $q1 = $_POST['q1'];

        $query="UPDATE `language` SET `language_set`='$q1' WHERE lang_id=1"; // Fetch all the data from the table customers

        $result=mysqli_query($db_conn,$query);
    }
    $msg=7;
     header("location: index.php?msg=".$msg."");
 }
?>